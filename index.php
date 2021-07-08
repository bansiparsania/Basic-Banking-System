<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
     <header>
  <!-- NAVBAR -->
      <div class="container-fluid p-0">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>GRIP Bank</h1>
                  <h5 style="font-weight:bold">your perfect banking partner</h5>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/bank.jpg" class="img-fluid pt-2">
              </div>
            </div>

      </header>
          <br>
          <br>
          <br>
          <h3 class="action"><span><b>CHOOSE</b></span></h3>
            <div class="column activity text-center">
                  
                  <div class="col-md act">
  
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button>Transfer History</button></a>
                  </div>

                  <div class="col-md act">
                    <br>
                    <br>
                    <a href="transfermoney.php"><button>View Customers to transfer</button></a>
                  </div>
                  
            </div>
           
      </div>
      <br>
      <br>
      <br>
      <footer class="text-center mt-5 py-2">
        <p>A Project by <b>PARSANIA BANSI</b> <br> </p>
        <br>
        <h4 class="text-muted"><b>Follow Us</b></h4>
        <p class="text-muted">Let us be social</p>
        <div class="column text-light">
          <a href="https://github.com/bansiparsania" style="margin-left:5px;"><i class="fab fa-github"></i>
          <a href="https://www.linkedin.com/in/BANSI PARSANIA/"><i class="fab fa-linkedin"></i></a>
     
        </div>
      
    </footer>
      <br>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>