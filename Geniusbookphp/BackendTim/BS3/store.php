


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Genius Book</title>


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss/style.scss" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Cute+Font|Inconsolata:400,700|Prata" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/store.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="css/reset.css" type="text/css"> <!-- CSS reset -->
	<link rel="stylesheet" href="assets/css/store.css" type="text/css"> <!-- Resource style -->
  <script src="modernizr.js"></script> <!-- Modernizr -->
  	
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

h2{
  font-size: 100px;

}

    
  navbar {
  float: left;
  width: 18%;
   border-radius: 30px;

  height: 70em; /* only for demonstration, should be removed */
  background: #F692A8;
  padding: 1em;
    transition: background 0.5s ease-in-out ,color 0.5s ease-in-out;
  padding:10px 30px;
  display: inline-block;

   
}
 navbar h6:hover{
      background-color:#97D6A3;
      color:#fcf8e3;
    }
    h6{
        text-align: center;
    }
    nav4{
  position: fixed;
  z-index: 1;
  left: 0;
  right: 0;
  font-family: 'Prata', serif;
  font-size: 2em;
  background-color:#4995D0;
      
}
   
  </style>
</head>
  <body>


  <nav>
  <ul class="navigation">
    <li><a href="index.php">hello</a></li>
      <li><a href="store.php">Cửa hàng sách</a></li>
      <li><a href="#gioithieu">Giới thiệu</a></li>

      <li><a href="http://localhost:8888/Geniusbookphp/BackendTim/BS3/index.php#contact">Liên hệ</a></li>


         <li><a href="login.html">Đăng nhập</a></li>
                        <li><a href="#contact"><img src="img/cart.png" class="works-img" >
</a></li>
    </ul>
  </nav>
      <br>
      <br>
      

<!-- List sản phẩm-->
  
  
<!--first-->

<br>    
<header>
		<h2> Cửa hàng sách</h2>
	</header>
    <br>
    
        
<navbar>

    <ul>
      <img style="width:30%;"src="assets/img/menu.png" class="works-img">
      <h3 style= "color:#4995D0;" href="#"><b>Danh mục</b> </h3>
      <h6 href="#">Tất cả</h6><br>
      <h6 href="#">Sách nói</h6><br>
      <h6 href="#">Kinh doanh</h6><br>
      <h6 href="#">Đầu tư</h6><br>
      <h6 href="#">Kỹ năng</h6><br>
      <h6 href="#">Tác phẩm kinh điển</h6><br>
      <h6 href="#">Văn học</h6><br>
      <h6 href="#">Khoa học-Công nghệ</h6><br>
      <h6 href="#">Lập trình</h6><br>
      <h6 href="#">Khoá học</h6><br>
      <h6 href="#">Truyện tranh</h6><br>


</ul>
  </navbar>

  
  
  
      <h3 style="text-align:center; background-color:#FCF481">Tất cả sách</h3>

  
  
  
  <!-- Hàng 1-->
  <section class="Sách" id="book1">
  <br>
  <br>
  <div class="row no-gutters">
  <div class="col">




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

           <?php echo '<b> <h5></br></br>'
                  ."<p style ='background-color:#FEDDF0'>"
                    .$row['Ten']."</b> </h5> " 
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
        

include'footer.php'  ;
?>

 </body>
</html>

