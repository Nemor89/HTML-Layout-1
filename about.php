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
        <p class="about">Данный проект разрабатывается в учебных целях.</p>
        <p class="about">Цели проекта:</p>
        <p class="about">1. Верстка шаблона,</p>
        <p class="about">2. Реализация проекта на чистом PHP,</p>
        <p class="about">3. Переработка проекта с использованием ООП,</p>
        <p class="about">4. Переработка проекта с использованием компонентов,</p>
        <p class="about">5. Переработка проекта с использованием framework.</p>
      </div>
     </div>
   </main>
   <?php
    require_once "inc/footer.php";
   ?>
  </div>
 </body>
</html>