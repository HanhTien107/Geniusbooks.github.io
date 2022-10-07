<?php
include'admin/layout/header.php';?>
<!--right columb-->
  <section class="col right-col">
    <div class="top-container">
        <h4 style="color:#006064">Dashboard</h4>
      <br>
      
  <img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fproduct.png?v=1565283098438" alt="product" style="width:40%; text-align:right;"/>
  <br><br>
  
      <table style="width:100%" >
          <tr>
              <th>Ảnh sản phẩm</th>
              <th>Tên</th>
              <th>Giá</th>
              <th>Thể loại</th>
              <th>Mô tả</th>
              <th>Xử lý</th>
</tr>
      
      
   
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
            echo "<td>$anh </td>";
            echo "<td>$ten </td>";
            echo "<td>$gia </td>";
            echo "<td>$theloai </td>";
            echo "<td>$mota </td>";
            echo "<td><a href='delete.php?id=$ten'>Xoá</a>
             <a href='update.php?id=$ten'>Sửa</a> </td>";

             echo"</tr>";
        }
    }
    ?>
           </table>
          
      
        
  <?php
    require_once 'process.php';
  ?>
     <form action ="process.php" method="POST">
         
       <tr> 
          <td> Tên sản phẩm: </td><br>
       <td><input type="text" name ="ten" /></td><br> <br>
       </tr> 
       <td> Ảnh sản phẩm: </td><br>
          <td><input type="text" name ="anh"/> </td><br> <br>
           <td> Giá sản phẩm: </td><br>
           <td><input type="text" name ="gia"/> </td><br><br>
           <td> Thể loại:</td><br>
           <td><input type="text" name ="theloai"/> </td><br><br>
           <td> Mô tả: </td><br>
           <td><input type="text" name ="mota" /></td><br><br>
      </tr>
      <tr>
          <td colspan="2">
              
              <button type="submit"  name="save">Thêm mới</button>
          </td>
      </tr>
         
    </form>
  <br>
   </div>
  </section>

  <?php
                  include'admin/layout/right.php';

      ?>
 </body>
</html>