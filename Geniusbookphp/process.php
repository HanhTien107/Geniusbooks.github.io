<?php
$update= 0;
        $mysqli = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($mysqli, 'SET NAMES UTF8');

        if(isset($_POST['save'])){
     $folder="/img/";
 $file = $_FILES['anh'];
    $file_name = $file['name'];

 
 
     $Ten = $_POST['ten'];
     $Anh = addslashes(file_get_contents($_FILES["anh"], ["tmp_name"]));
     $Gia = $_POST['gia']; 
     $Theloai = $_POST['theloai']; 
     $Mota = $_POST['mota']; 
     $mysqli->query("INSERT INTO Sach VALUES('$Ten','$Anh','$Gia','$Theloai','$Mota')")
             or die($mysqli->error);
     
     $_SESSION['message']="Sản phẩm đã được lưu !";
     $_SESSION['msg_type']="Success";
         header('location:admin.php');

 }
  

     
 
 ?>
