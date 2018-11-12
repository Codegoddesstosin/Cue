

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

    <div class="container">
        <h2 class="my-4 text-center"> Online Payment to Complete Admission Process ($50)</h2>

    <form action="./charge.php" method="post" id="payment-form">
            <div class="form-row">

      <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
         
      <input type="text" name="Last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">

      <input type="text" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">




        <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
        </div>

    <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>
    </form>
  </div>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>

</html>