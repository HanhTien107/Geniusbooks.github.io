<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS Login form</title>



      <link rel="stylesheet" href="assets/css/stylelogin.css">


</head>

<body>

  <div id="boxForm">
  <h2 id="title">My Login Form</h2>
  <form Method="POST" action = "logincn.php">
    <input class='text' type='text' name='username' placeholder='Username'required>
    <br>
    <input class='text' id='pwd' name ='password' type='password' placeholder='Password' required>
    <br>
    <input id='rememberMe' name='rememberMe' type='checkbox'> <label>Remember me</label>
    <br>
    <input class='button' type='submit' value='Connection'>
  </form>
</div>



    <script  src="./script.js"></script>




</body>

</html>
