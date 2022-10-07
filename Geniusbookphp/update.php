<?php
$update= 1;

        $mysqli = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($mysqli, 'SET NAMES UTF8');
 
        
        if(isset($_POST['edit'])){
      $ten = $_GET['edit'];
     $result =  $mysqli->query("SELECT * FROM Sach WHERE Ten = '$ten'") 
             or die($mysqli->error);
       if(count($result)==1){
           $row=$result->fetch_array();
        
            $Anh = $row['Image'];
            $Ten = $row['Ten'];
            $Gia = $row['Gia'];
            $Theloai = $row['Theloai'];
            $Mota = $row['mota'];
       }



     
 }
          header('location:admin.php');


?>
 