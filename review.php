<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <title>Отзыв</title>
 </head>
 <body>
  <div class="main">
    <?php
    require_once "inc/header.php";
    ?>
   <main>
     <div class="maincontent">
      <?php
        require_once "inc/leftmenu.php";
      ?>
      <div class="content">
        <h1 class="about">Оставьте свой отзыв о работе сайта</h1>
        <form class="review" method="post">
        <textarea class="reviewarea" name="review"></textarea>
        <input class="reviewsubmit"	type="submit" name="reviewsubmit">
        </form>
      </div>
     </div>
   </main>
   <?php
    require_once "inc/footer.php";
   ?>
  </div>
 </body>
</html>