<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/media.css">
  <title>ADMIN</title> 
</head>
<body>
  <div id="div-all">
    <div id="div-top">
      <div class="left">
        <a href="index.php" style="text-decoration: none;">
          <h1>ADMIN</h1>
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
          <?php 
          require_once '../menu.php'
          ?>
        </div>
        <div class="bot">
          <ul type="none">
            <li class="button">SETTING</li>
            <li class="button">ACCOUNT</li>
          </ul>
        </div>
      </div>
      <div class="right">
        
      </div>
    </div>
  </div>
</div>
</body>
</html>