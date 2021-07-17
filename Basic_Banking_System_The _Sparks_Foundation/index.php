<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background-color : #daf5ba;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #7b9957;">
			  <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.png" class="img-fluid pt-2" width="330" height="330">
              </div>
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="color : #daf5ba;">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user2.png" class="img-fluid" width="250" height="250">
                    <br>
                    <a href="createuser.php"><button style="background-color : #e352a4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer2.png" class="img-fluid" width="280" height="280">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #e352a4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.png" class="img-fluid" width="250" height="250">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #e352a4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="background-color : #daf5ba;">
         <p>&copy 2021. Designed by <b><a href="https://www.linkedin.com/in/sreedhar-p-05b7771a8/" style="color : black;">SREEDHAR P</a></b>
		<br><b><a href="https://www.thesparksfoundationsingapore.org/" style="color : black;">THE SPARKS FOUNDATION</a></b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>