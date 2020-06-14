<div class="leftmenue">
	<div class="clock">
        <div class="hour">
          <div class="hr" id="hr"></div>
        </div>
        <div class="min">
          <div class="mn" id="mn"></div>
        </div>
        <div class="sec">
          <div class="sc" id="sc"></div>
        </div>
      </div>
  <script type="text/javascript">
    const deg =6;
    const hr = document.querySelector('#hr');
    const mn = document.querySelector('#mn');
    const sc = document.querySelector('#sc');

    setInterval(() => {
      let day = new Date();
      let hh = day.getHours() * 30;
      let mm = day.getMinutes() * deg;
      let ss = day.getSeconds() * deg;

      hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
      mn.style.transform = `rotateZ(${mm}deg)`;
      sc.style.transform = `rotateZ(${ss}deg)`;
    });
  </script>
  <ul class="menu">
    <li class="left"><a id ="left" href = "index.php">Главная</a></li>
    <li class="left"><a id ="left" href = "#">Новое</a></li>
    <li class="left"><a id ="left" href = "#">Популярное</a></li>
    <li class="left"><a id ="left" href = "#">Категории</a></li>
    <li class="left"><a id ="left" href = "review.php">Оставить отзыв</a></li>
    <li class="left"><a id ="left" href = "source.php">Исходники</a></li>
  </ul>
  <textarea id="leftblock">Активное развитие аэрокосмической отрасли предъявляет все более серьезные требования к летательным аппаратам: они должны быть быстрыми, износостойкими, должны снижаться затраты на производство и обслуживание. Многие ведущее космические агентства (НАСА, ЕКА (Европа), а также агентства Японии, Китая и Индии) ведут активную разработку таких летательных аппаратов многоразового пользования — воздушно-космических самолетов (ВКС), применение которых позволит существенно снизить стоимость доставки людей и грузов на орбиту, а также сократить временные интервалы между полетами. С учетом такого количества требований к производительности аппаратов, требуется серьезно совершенствовать качество используемых в них материалов.

  Группа ученых НИТУ «МИСиС» разработала керамический материал с самой высокой температурой плавления среди всех известных на данный момент соединений. Благодаря уникальному сочетанию физических, механических и термических свойств, материал перспективен для использования в наиболее теплонагруженных узлах летательных аппаратов — носовых обтекателях, воздушно-реактивных двигателях и острых передних кромках крыльев, работающих при температурах выше 2000 °С.</textarea>
</div>