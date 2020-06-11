<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <title>О сайте</title>
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
        <h1 class="about">Данный проект разрабатывается в учебных целях.</h1>
        <p class="about2">Цели проекта:</p>
        <p class="about2">1. Верстка шаблона,</p>
        <p class="about2">2. Реализация проекта на чистом PHP,</p>
        <p class="about2">3. Переработка проекта с использованием ООП,</p>
        <p class="about2">4. Переработка проекта с использованием компонентов,</p>
        <p class="about2">5. Переработка проекта с использованием framework.</p>
      </div>
        <div class="progressbar">
          <div class="card">
            <div class="box">
              <div class="percent">
                <svg>
                  <circle cx="70" cy="70" r="70"></circle>
                  <circle cx="70" cy="70" r="70"></circle>
                </svg>
                <div class="number">
                  <h2>10<span>%</span></h2>
                </div>
              </div>
                <h2 class="progress">Прогресс</h2>  
            </div>
          </div>
      </div>
     </div>
   </main>
   <?php
    require_once "inc/footer.php";
   ?>
  </div>
 </body>
</html>