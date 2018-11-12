<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
  
  $customer = new Customer();

  $customers = $customer->getCustomers();


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
            <title>View Customers</title>
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
    <h2>Customers</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($customers as $customer): ?>
                <tr>
                <td><?php echo $customer->id; ?></td>
                <td><?php echo $customer->first_name; ?> 
                    <?php echo $customer->Last_name; ?>

                <td><?php echo $customer->email; ?></td>
                <td><?php echo $customer->created_at; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
     </div>

</body>

</html>