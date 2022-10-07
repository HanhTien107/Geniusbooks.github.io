<?php
include'admin/layout/header.php';?>
        
  <!--right columb-->
  <section class="col right-col">
    <div class="top-container">
        <h4 style="color:#006064">Dashboard</h4>
      <br>
      
  <br><br>
  
  
      <table style="width:100%"  >
          <tr>
              <th>Ảnh sản phẩm</th>
              <th>Tên</th>
              <th>Giá</th>
              <th>Thể loại</th>
              <th>Mô tả</th>
              <th>Xử lý</th>
</tr>

  </div>
      
   <?php
   if (isset($_SESSION[message])):  ?>
<div class ="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
</div>
<?php endif
?>

    
  <?php

    $query = "SELECT Ten, Image, Gia, Theloai, mota  FROM Sach";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0){
                   $i = 0;

        while($row = mysqli_fetch_assoc($result)){
            $i++;
            $anh = $row['Image'];
            $ten = $row['Ten'];
            $gia = $row['Gia'];
            $theloai = $row['Theloai'];
            $mota = $row['mota'];
            echo "<tr>";

echo ' <td><img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2FTinh%20hoa.png?v=1564477479713 " width="50%"  /></td>';
            echo "<td>$ten </td>";
            echo "<td>$gia </td>";
            echo "<td>$theloai </td>";
            echo "<td>$mota </td>";
            echo "<td>"

           . "<button><a href='delete.php?delete=$ten' >Xoá</a></button>
          <button>   <a href='update.php?edit=$ten'>Sửa</a></button> </td>";

            echo ' <td> <img src=".$anh."/".$file_name"</td>'; 

             echo"</tr>";

        }
    }

    ?>
           </table>
          
      
        
   




     
  
  
 </div>
  </section>
  
        
      <?php
                  include'admin/layout/right.php';

      ?>
  </header>

          <?php
        

include'footer.php'  ;
?>
     




  </body>
</html>
<script>
    $(document).ready(function(){
        
       $('#save').click(function(){
           var image_name = $('#anh').val();
           if(image_name ==''){
               alert("Xin vui lòng nhập ảnh");
               return false;
           }
           else
           {
               var extension = $('#anh').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1){
                   alert('Ảnh không hợp lệ!');
                   $('#anh').val('');
                   return false;
               }
               
           }
       });
    }
            );
    </script>
