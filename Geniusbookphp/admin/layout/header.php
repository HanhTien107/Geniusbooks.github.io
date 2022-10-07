<?php
        $link = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($link, 'SET NAMES UTF8');
        ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Genius Book</title>
  <script src ="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Cute+Font|Inconsolata:400,700|Prata" rel="stylesheet">
<style>
     button {
  background-color: #FC2986;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  button {border-radius: 12px;}
button:hover {
  background-color: yellow;
  color: blue;
}
nav1{
  position: fixed;
  z-index: 1;
  left: 0;
  right: 0;
  font-family: 'Prata', serif;
  font-size: 22px;
}
    
    
    table, th, td {
  border: 7px solid #fff;
  width:100%;
    padding: 13px;

      text-align:center;

    border-collapse: collapse;
  background-color: #FDF8EA;

}
table {border-radius: 12px;}

table th{
  background-color: #1970C1;
  color: white;

  form{
      text-align:center;
  }


}
.checked {
  color: orange;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FF999C;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
</style>
</head>
  <body>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="/__/firebase/6.3.0/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
       https://firebase.google.com/docs/web/setup#reserved-urls -->

  <!-- Initialize Firebase -->
  <script src="/__/firebase/init.js"></script>


<header class="row" id="hello">
  <!--left columb-->
  <section class="col left-col col-2">
    <div class="top-container">
      <br>
      <br>
          <br>  
      <h4>Store.<h4>
        <a href="admin.html"><img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fhome.png?v=1565278127171" alt="Steak" style="width:40%"><br><br></a>
        <a href="product.html"><img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fhome2.png?v=1565278127712" alt="Steak" style="width:40%"><br><br></a>
        <a href="order.html"><img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fhome3.png?v=1565278128143" alt="Steak" style="width:40%"><br><br></a>

      <img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fhome4.png?v=1565278128506" alt="Steak" style="width:40%"><br><br>
      <img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fhome5.png?v=1565278129521" alt="Steak" style="width:40%"><br><br>
        <a href="index.php"><img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Flogout.png?v=1565278283852" alt="Steak" style="width:60%"><br><br></a>

  
  </section>