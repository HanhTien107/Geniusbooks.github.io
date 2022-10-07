<?php
session_start;
$id = 0;

$update = false;
        
 $mysqli = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($mysqli, 'SET NAMES UTF8');
        
        if(isset($_POST['save'])){
            $name = $_POST['name'];
             $password = $_POST['password'];
             
             
     $mysqli->query("INSERT INTO admin(name,password)VALUES('$name','$password')")
             or die($mysqli->error);
     
     $_SESSION['message']="Đã lưu người dùng!";
     $_SESSION['msg_type']="success";
             
        }
          if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $update= true;
            $result = $mysqli->query("SELECT * FROM admin WHERE id=$id")or die ($mysqli->error());
           if(count($result==1)) {
             $row = $result->fetch_array();
             $name = $row['name'];
             $password = $row['password'];
             
           }

        }
        
      if(isset($_GET['delete'])){
         $id = $_GET['delete'] ;
         $mysqli->query("DELETE FROM admin WHERE id =$id") or die($mysqli->error);
         
         $_SESSION['message']="Đã xoá người dùng!";
         $_SESSION['msg_type']="Nguy hiểm";
      }  
      
      if(isset($_POST['update'])){
          $id = $_POST['id'];
          $name = $_POST['name'];
           $password = $_POST['password'];
           
          $mysqli->query("UPDATE admin SET name = '$name', password = '$password' WHERE id =$id") 
                  or die($mysqli->error);
          $_SESSION['message']="Đã cập nhật Admin!";
          $_SESSION['msg_type']="warning";
                            header('location:user.php');
       
      }
        
        
      
        
        
                 header('location:user.php');

 ?>