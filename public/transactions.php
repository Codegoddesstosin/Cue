<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');
  
  $transaction = new Transaction ();

  $transactions = $transaction->getTransactions();


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
            <title>Transactions</title>
        <!-- Fonts -->
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<div class="Container mt-4">
        <div class="btn-group" role="group">
            <a href="customers.php" class="btn btn-primary">Customers</a>
               <a href="transactions.php" class="btn btn-secondary">Transactions</a>
        
    </div>
    <hr>
    <h2>Transactions</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($transactions as $transaction): ?>
                <tr>
                <td><?php echo $transaction->id; ?></td>
                <td><?php echo $transaction->customer_id; ?> 
                <td><?php echo $transaction->product_id; ?></td>
                <td><?php echo $transaction->amount; ?></td>
                <td><?php echo $transaction->created_at; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
     </div>

</body>

</html>