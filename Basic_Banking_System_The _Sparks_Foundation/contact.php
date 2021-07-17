<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #ffebb3">
<?php
    include 'navbar.php';
    include 'config.php';
    if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $mesg=$_POST['mesg'];
    $sql="insert into contactus(email,mesg) values('{$email}','{$mesg}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('We have received your details successfully! we will contact you very soon');
					 
                     </script>";
                    
    }
  }
?>


   <class class="welcome">
        <h2>
            <img src="img/contactus.jpg" alt="Bank" width="1340" height="350" style="font-weight: bold;">
        </h2>
    </class>
 
    
    <div class="test" style="border-radius:5px;background-color:#f2f2f2;padding:30px;">
        <h3>Contact Us</h3>
   
		  <form class="app-form" method="post">
            
            <div class="app-form-group">
			<h4>Email id</h4>
              <input class="form-label" type="email" name="email" required>
            </div>
            <div class="app-form-group">
			<h4>Your message</h4>
              <input class="app-form-control" type="text" name="mesg" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="SUBMIT" name="submit"></input>
              
            </div>
          </form>
        </div>

<footer class="text-center mt-5 py-2">
            <p>&copy 2021. Designed by <b><a href="https://www.linkedin.com/in/sreedhar-p-05b7771a8/">SREEDHAR P</a></b>
		<br><a href="https://www.thesparksfoundationsingapore.org/">THE SPARKS FOUNDATION</a></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>