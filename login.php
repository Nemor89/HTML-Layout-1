<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Авторизация</title>
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
          <h1>Авторизация</h1>
          <input class="reg" type="text" name="login" placeholder="Логин">
          <input class="reg" type="password" name="password" placeholder="Пароль">
          <input class="regbtn" type="submit" name="submit" value="Войти">
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