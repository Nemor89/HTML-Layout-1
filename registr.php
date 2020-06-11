<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Регистрация</title>
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
        <form class="regform" method="post" enctype="multipart/form-data">
          <h1>Регистрация</h1>
          <input class="reg" type="text" name="login" placeholder="Логин">
          <input class="reg" type="email" name="email" placeholder="Email">
          <input class="reg" type="password" name="password" placeholder="Пароль">
          <input class="reg" type="password" name="repassword" placeholder="Повторите пароль">
          <div class="example-3">
            <label for="custom-file-upload" class="filupp">
            <span class="filupp-file-name js-value">Загрузить аватар</span>
            <input type="file" name="attachment-file" value="1" id="custom-file-upload">
            </label>
          </div>
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