<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <title>Главная страница</title>
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
      <div class="blogs">
        <div class="blog1" id="blog1">
          <p class="blogtext">Дата добавления: 2 000 лет до нашей эры</p>
          <p class="blogtext">Автор: Профессионал</p>
          <a href="#"><img class="blogimg" src="img/energy.jpg"></a>
          <p class="description">Как выпить 6 энергетиков подряд и не сдохнуть? Ответ профессионала</p>
          <!-- <a id="read" href="#">Читать</a> -->
        </div>
        <div class="blog2" id="blog2">
          <p class="blogtext">Дата добавления: 09.06.2020 14:54</p>
          <p class="blogtext">Автор: Nemor</p>
          <a href="#"><img class="blogimg" src="img/grust.jpg"></a>
          <p class="description">Кати разрушают судьбы</p>
       <!--    <a id="read" href="#">Читать</a> -->
        </div>
        <div class="blog3" id="blog3">
          <p class="blogtext">Дата добавления:</p>
          <p class="blogtext">Автор</p>
          <a href="#"><img class="blogimg" src="img/sosiska.jpg"></a>
          <p class="description">Скорбим всем селом</p>
     <!--      <a id="read" href="#">Читать</a> -->
        </div>
        <div class="blog4" id="blog4">
          <p class="blogtext">Дата добавления:</p>
          <p class="blogtext">Автор</p>
          <a href="#"><img class="blogimg" src="img/zasekundu.jpg"></a>
          <p class="description">За секунду до...</p>
       <!--    <a id="read" href="#">Читать</a> -->
        </div>
        <a id ="prev" href="#">Сюда</a>
        <a id ="next" href="#">Туда</a>
      </div>
     </div>
   </main>
   <?php
    require_once "inc/footer.php";
   ?>
  </div>
 </body>
</html>