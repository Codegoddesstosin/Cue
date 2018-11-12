<?php 

 

 require_once('C:\xampp\htdocs\laravel\Cue\vendor\autoload.php');
 require_once('config/db.php');
 require_once('lib/pdo_db.php');
 require_once('models/Customer.php');
 require_once('models/Transaction.php');

 \Stripe\Stripe::setApiKey('sk_test_HbmVzgwYzJlFClW3DAvZVYe8');


 //sanitize post array

 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];

 $Last_name = $POST['Last_name'];

 $email = $POST['email'];

 $token = $POST['stripeToken'];

 
 //Create customer in Stripe
 $customer = \Stripe\Customer::create(array(

   "email" => $email,
   "source" => $token

 ));

 //chareg customer

 $charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "usd",
    "description" => "Acceptance Fee",
    "customer" => $customer->id

 ));

//Customer DATA


$customerData = [
   'id' =>$charge->customer,
   'first_name'=> $first_name,
  'Last_name'=>$Last_name,
  'email' => $email

 ];

 //instantiate customer
 $customer = new Customer ();

 $customer->addCustomer($customerData);

//transaction data
  $transactionData = [
   'id' =>$charge->id,
   'customer_id'=> $charge->customer,
  'product_id'=>$charge->description,
  'amount' => $charge->amount,
  'currency'=> $charge->currency,
   'status' => $charge->status,

 ];



 //instantiate transaction dATA
 $transaction = new Transaction();

 $transaction->addTransaction($transactionData);

//Redirevct to success
header('Location: success.php?tid='.$charge->id.'& product='.$charge->description);