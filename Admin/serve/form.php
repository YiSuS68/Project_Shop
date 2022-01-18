<div class="top" style="width: 100%; height: 50%;">  
  <?php 
  require 'form_insert.php';
  ?>
</div>
<div class="bot" style="width: 100%; height: 50%;">
  <form style="float: right;" >
    Tìm kiếm tên<br>
    <input type="search" name="search" value="<?php echo $search ?>">
  </form>
  <?php 
  require 'table.php';
  ?>
</div>