<div class="top" style="width: 100%; height: 8%;">
  <div style="width: 50%; height: 8%; float: left;">
    <?php 
    require '../event_crud.php';
    ?>
  </div>
  <div style="width: 50%; height: 8%; float: left;">
    <form style="float: right;">
      Tìm kiếm tên nhân viên<br>
      <input type="search" name="search" value="<?php echo $search ?>">
    </form>
  </div>
</div>
<div class="bot" style="width: 100%; height: 92%;">
  <?php 
  require 'table.php';
  ?>
</div>