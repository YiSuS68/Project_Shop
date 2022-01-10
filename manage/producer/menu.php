    <div id="div-top">
      <div class="left">
        <a href="../root" style="text-decoration: none;">
          <h1>QUẢN LÝ</h1>
        </a>
      </div>
      <div class="right" >
        <a href="">
          <img src="">LOGO + Tên Shop
        </a>
      </div>
    </div>
    <div id="div-space-top"></div>
    <div id="div-bot">
      <div id="div-space-bot-left"></div>
      <div class="left">
        <div class="top">
          <ul type="none">
            <a href="../product" style="text-decoration: none;">
              <li class="button"">
                SẢN PHẨM
              </li>
            </a>
            <a href="../producer" style="text-decoration: none;">
              <li class="button"  id="active">
                NHÀ SẢN XUẤT
              </li>
            </a>
          </ul>
        </div>
        <div class="bot">
          <ul type="none">
            <li class="button">SETTING</li>
            <li class="button">ACCOUNT</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="top">  
          <a href="form_insert.php">
            <button style="  
            width: 10%;
            height: 50%;
            margin: 10px 10px;
            float: left;">Thêm</button>
          </a>
          <form style="float: left; margin: 5px 0 0 0;">
            Tìm kiếm tên<br>
            <input type="search" name="search" value="<?php echo $search ?>">
          </form>
        </div>
        <div class="bot" style="align:center;">
          <table width="100%" align="center" border="2px">
            <tr>
              <th colspan="10">NHÀ SẢN XUẤT</th>
            </tr>
            <tr>
              <th>Ảnh</th>
              <th>Họ và tên</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
            <?php foreach ($resume as $each){ ?>
              <tr>
                <td style="text-align:center">
                  <img height="100px" src="../../history_image/<?php echo $each['image'] ?>">
                </td>
                <td style="text-align:center"><?php echo $each['name']; ?></td>
                <td style="text-align:center"><?php echo $each['phone']; ?></td>
                <td style="text-align:center"><?php echo $each['address']; ?></td>
                <td style="text-align:center">
                  <a href="form_update.php?id=<?php echo $each['id']; ?>" style="color: blue;">X</a>
                </td>
                <td style="text-align:center">
                  <a href="delete.php?id=<?php echo $each['id']; ?>" style="color: red;">X</a>
                </td>
              </tr>
            <?php } ?>
          </table>
          <?php for ($i=1; $i <=$quantity_page ; $i++) { ?>
            <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>" >
              <span style="margin: 10px 10px; float: left; border: 2px solid black;"><?php echo $i ?> </span>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>