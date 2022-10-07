<?php
  $mysqli = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($mysqli, 'SET NAMES UTF8');

if(isset($_POST['Connection'])){
     
 $username = $_POST['username'];
 $password = $_POST['password'];
 
$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

 $result = mysql_query("SELECT * FROM admin WHERE username= '$username' and password = '$password'")
         or die($mysqli->error);
$row = mysql_fetch_array($result);
if ($row['name']==$username && $row['password']== $password){
echo "SUCCESS";
      header('location:dashboard.php');

}else{
    echo "Failed to login!";
    $mysqli->error;
}

 }
      header('location:dashboard.php');


 ?>

