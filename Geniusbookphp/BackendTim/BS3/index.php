<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

 <?php
        $link = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($link, 'SET NAMES UTF8');
        ?>
<html>
    <head>
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include'header.php';?>
   <section class="works" id="store">
  <br>
  <br>  <br>            

    <h3 style="text-align:center;">Sách hay và chỉ có sách hay</h3>
  <br>
  <br>
        
   

    <?php
    
    $query = "SELECT Ten, Image, Gia, Theloai, mota  FROM Sach";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0){
                   $i = 0;?>
<?php  echo 
            "<div class='w3-row-padding w3-padding-16 w3-center'>"?>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            $i++;
           
            ?>
            <?php 
            echo 
             "<div class='w3-quarter '>  <br>" 
?>
                                                            <?php echo' '
                                                                            . "<div class='cover'>"

                                                            . ' <td><img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="100%""></td><br>'
                                                                    ."</div>" ?>

           <?php echo '<b> <h5>'
                  ."<p style ='background-color:#FEDDF0'>"
                    .$row['Ten']."</b></h5> " 
                    .$row['mota']."<br>"
                     ."<i class='fa fa-graduation-cap' style='font-size:20px'></i> ".$row['Theloai']."<br>"
                    .$row['Gia']."<br>" ."</p>"
                     ."  </p> <a href=''> <button>Add to cart</button></a>"
                ."</div>"              
                            


                   
                ;
        }
    }else{
        echo"Không có Sách nào!";
    }
    ?>
        <?php echo                     "</div>"    ?>                

        
        <?php 
                                              while($row = mysqli_fetch_assoc($result)):?>
                                              <tr>

                                                 <?php echo'  <td><img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" width="70%""></td>'?>
                                                  <td> <?php echo $row['Ten'];?></td>
                                                  <td> <?php echo $row['Gia'];?></td>
                                                  <td> <?php echo $row['Theloai'];?></td>
                                                  <td> <?php echo $row['mota'];?></td>
                                                  <td>
                                                      <a href="product.php?edit=<?php echo $row['id'];?>"
                                                         class ="btn btn-info ">Edit</a>
                                                         <a href="process.php?delete=<?php echo $row['id'];?>"
                                                            class ="btn btn-danger ">Delete</a>
                                                  </td>
                                              </tr>
                                              <?php endwhile;?> 
                                              <!-- Pagination -->
<div class="w3-center w3-padding-32">
  <div class="w3-bar">
    <a href="#book1" class="w3-bar-item w3-button w3-hover-black">«</a>
    <a href="#book2" class="w3-bar-item w3-black w3-button">1</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
  </div>
</div>
    <?php
        
include'about-us.php';
include'contact-us.php';
include'footer.php'  ;
?>
    </body>
</html>
