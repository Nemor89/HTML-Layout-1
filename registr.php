<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://htmllayout.loc/HTML-Layout-1/styles/styles.css">
  <title>Главная страница</title>
 </head>
 <body>
  <div class="main">
    <?php
    require_once "inc/header.php"
    ?>
   <main>
     <div class="maincontent">
      <?php
        require_once "inc/leftmenu.php";
      ?>
      <div class="content">
        <form class="regform" method="post" enctype="multipart/form-data">
          <h1>Регистрация</h1>
          <input class="reg" type="text" name="login" placeholder="Логин">
          <input class="reg" type="email" name="email" placeholder="Email">
          <input class="reg" type="password" name="password" placeholder="Пароль">
          <input class="reg" type="password" name="repassword" placeholder="Повторите пароль">
          <input class="setavatar" type="file" name="avatar" value="Аватар" accept="image/jpeg,image/png">
          <input class="regbtn" type="submit" name="submit" value="Регистрация">
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