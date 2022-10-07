<style>
   nav2{
  position: fixed;
  z-index: 1;
  right: 0;
  font-family: 'Prata', serif;
  font-size: 22px;
} 
</style>

        <section class="col right-col col-3" >
    <div class="top-container1" >
      <h4 style="color:#006064;">Hanh Tien</h4>
     <br>
   <img src="https://cdn.glitch.com/c0614e40-72a4-4218-beee-0d95d53e4ce9%2Fhanh.png?v=1565279818320" alt="cactus" style="width:50%"/><br><br>
      <br>
         <?php
    include 'process.php';
        include 'update.php';


    ?>
  <form action ="process.php" method="POST" enctype="multipart/form-data">
         
       <tr> 
          <td> Tên sản phẩm: </td><br>
       <td><input type="text" name ="ten" value="<?php echo $name;?>" /></td><br> <br>
       </tr> 
       <td> Ảnh sản phẩm: </td><br>
          <td><input type="file" name ="image" value="<?php echo $anh;?>"/> </td><br> <br>
           <td> Giá sản phẩm: </td><br>
           <td><input type="number" name ="gia" value="<?php echo $gia;?>"/> </td><br><br>
           <td> Thể loại:</td><br>
       <td><input type="text" name ="ten" value="<?php echo $theloai;?>" /></td><br> <br>

           <td> Mô tả: </td><br>
           <td><input type="textarea" name ="mota" value="<?php echo $mota;?>"  /></td><br><br>
      </tr>
      <tr>
          <td colspan="2">
              <?php 
              if($update == true):
                  ?>
                            <button type="submit " name="update" id ="save">Cập nhật</button>
<?php else:?>
              <button type="submit " name="save" id ="save">Thêm mới</button>
         <?php
              endif;?>
          </td>
      </tr>
         
    </form>
  <br>
  

     
         
        </section>



                 