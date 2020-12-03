<?php $id = $_GET['id'];
require "db_conect.php";  
$mysql=("SELECT  `firstname`, `lastname`, `email`, `password` FROM `users` WHERE `id`=".$id);
$result = $mysqli->query($mysql);
$row=mysqli_fetch_array($result);
// var_dump($row["firstname"]);
?>
<form method="POST" action="update.php?id=<?echo $id?>">
 <input  name="firstname" type="text" value="<?php echo $row["firstname"]?>">
 <input  name="lastname" type="text"  value="<?php echo $row["lastname"]?>">
 <input name="email" type="email"  value="<?php echo $row["email"]?>">
  <input name="password" type="password"  value="<?php echo $row["password"]?>">
  <button name="button" value=true> Оновити </button>
  </form>
<?php
$firstname=$_POST["firstname"]; // Відправлення оновлених даних
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$text = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',password='$password' WHERE id='$id'";


// var_dump($text);
// exit();
  if($_POST["button"]==true){
    $mysqli->query($text);
  echo '<script>window.location.href="admin.php"</script>';
 }
?>