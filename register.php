<html>
<head> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css"> 
</head>
<body>
<div class="register">
<form method="POST" action="register.php">
  <div class="form-group">
  <label for="exampleInputEmail1">Firstname</label>
    <input  name="firstname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Lastname</label>
    <input  name="lastname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1">Email address</label>
    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button  value=true name="button" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
<?php
if(!empty($_POST["button"])==true){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    // $call="INSERT INTO `users`(`Id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password')";
    require "db_conect.php";
    $mysqli->query("INSERT INTO `users`(`Id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password')");
    echo '<script>window.location.href="index.php"</script>';
   }
   
?>