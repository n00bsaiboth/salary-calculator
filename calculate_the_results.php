<?php 
  if(isset($_POST['submit'])) {
    $payment = floatval($_POST['payment']);
    $hours = floatval($_POST['hours']);
    $duration = intval($_POST['duration']); 
    $tax = floatval($_POST['tax']);
    
    $totalPayment = $payment * $hours * $duration;

    $totalTaxes = $tax / 100 * $totalPayment;

    $paymentAfterTax = $totalPayment - $totalTaxes;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/jumbotron.css">
    <link rel="stylesheet" href="./css/custom.css">

    <title>Salary calculator - results</title>

    <meta name="description" content="Salary calculator">
    <meta name="keywords" content="salary, calculator, infected-design, id">
    <meta name="author" content="Jussi 'hobbit' jokinen, aka. n00bsaiboth">    
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Here is your average salary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="  #navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="about.php">about this software</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://infected-design.net" target="_blank">about us</a>
            </li>
          </ul>
        </div>
    </nav>

    <main role="main">  
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Here are the results for your average salary</h1>
          <?php
            echo "<p>Before taxes and other repayments " . htmlspecialchars($totalPayment) . " €.</p>";
            echo "<p>After taxes and other repayments " . htmlspecialchars($paymentAfterTax) . " €.</p>";
          ?>  
        </div>
      </div>
    </main>  

    <hr>

    <footer class="container">
      <p>&copy; infected-design 2005-2019.</p>
    </footer>  

    <script src="./js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>