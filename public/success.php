<?php
  if(!empty($_GET['tid'] && !empty($_GET['product'])))

  {

    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

     $tid = $GET['tid'];
     $product = $GET['product'];
}
else {
	header('Location: success.php');
}


?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
            <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<div class="Container mt-4">

        <h2>You have successfully paid <?php echo $product; ?></h2>
         <h2>Your transaction id is <?php echo $tid; ?></h2>
          
            <p>Proceed to Print Admission slip and Confirm Admission status</p>
        <p><a href="/summary" class="btn btn-primary mt-2">Proceed</a></p>
     </div>

</body>