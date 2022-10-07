<!doctype html>
<?php
        $link = new mysqli('localhost','root','root','demo') or die('Kết nối thất bại!');
        mysqli_query($link, 'SET NAMES UTF8');
        ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" type="text/css">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
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
</style>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Geniusbook
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="product.php">
                        <i class="pe-7s-diamond"></i>
                        <p>Sản phẩm</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                     <a href="index.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Sign out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sản phẩm</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="index.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
  
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Danh sách Sản phẩm</h4>
                                <p class="category">Danh sách Sản phẩm</p>
                            </div>
                            <div class="content">
                                  <section class="col right-col">
    <div class="top-container">
  
  
  <?php
include'process.php';
    $query = "SELECT Ten, Image, Gia, Theloai, mota  FROM Sach";
    $result = $mysqli->query("SELECT * FROM Sach") or die ($mysqli->error);?>
                                      <div class="content">
                                          <table class="table-hover">
                                              <thead>
                                                  <tr>
                                                      <th> Ảnh sản phẩm </th>
                                                      <th> Tên</th>
                                                      <th> Giá </th>
                                                      <th> Thể Loại </th>
                                                      <th> Mô tả</th>
                                                      <th> Hành động</th>
                                                      
                                                    
                                                  </tr>
                                              </thead>
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
                                          </table>
                                      </div>                                   
    

  </section>
  
        
    
  </header>

  
     





 





                            </div>
                        </div>
                    </div>
                
    
 <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
   
    
                            <div class="header">
                                <h4 class="title">Thêm Sản phẩm</h4>
                                <p class="category">Thêm sản phẩm</p>
                            </div>
                            <div class="content">
                             <form action ="process.php" method="POST" enctype="multipart/form-data">
                                          <input type="hidden" name ="id" value="<?php echo $id;?>">

       <tr> 
          <td> Tên sản phẩm: </td><br>
                 <td><input type="text" name ="ten"  value="<?php echo $ten;?>"/> </td><br> <br>

       </tr> 
       <td> Ảnh sản phẩm: </td><br>
          <td><input type="file" name ="image" value="<?php echo $anh;?>" /> </td><br> <br>
           <td> Giá sản phẩm: </td><br>
           <td><input type="text" name ="gia" value="<?php echo $gia;?>"/> </td><br><br>
           <td> Thể loại:</td><br>
       <td><input type="text" name ="theloai" value="<?php echo $theloai;?>"  /></td><br> <br>

           <td> Mô tả: </td><br>
           <td><input type="textarea" name ="mota" value="<?php echo $mota;?>"  /></td><br><br>
      </tr>
      <tr>
          <td colspan="2">
              
 <?php 
              if($update == true):
                  ?>
                            <button type="submit " name="update" id ="update">Cập nhật</button>
<?php else:?>
              <button type="submit " class="btn btn-primary" name="save" id ="save">Thêm mới</button>
            <?php
                        var_dump($_FILES);

              endif;?>     
              
          </td>
      </tr>
      
         
                             </form></div>
                        </div>
                    </div>
                        </div>
                    </div>
   <script>
    $(document).ready(function(){
        
       $('#save').click(function(){
           var image_name = $('#image').val();
           if(image_name ==''){
               alert("Xin vui lòng nhập ảnh");
               return false;
           }
           else
           {
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1){
                   alert('Ảnh không hợp lệ!');
                   $('#image').val('');
                   return false;
               }
               
           }
       });
    }
            );
    </script> 

                       
    
    </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
               
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });
      
	</script>

</html>
