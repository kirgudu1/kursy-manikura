<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы маникюра с дипломом — рейтинг лучших курсов в России 2025</title>
<meta name="description" content="Подберите лучший курс маникюра в вашем городе! Актуальный рейтинг 2025 года, подробные обзоры программ обучения, стоимость, документы по окончании и советы от экспертов индустрии красоты.">
<!-- Open Graph теги для соцсетей -->
<meta property="og:type" content="website">
<meta property="og:title" content="Курсы маникюра с дипломом — рейтинг лучших школ в России 2025">
<meta property="og:description" content="Выбирайте лучшие курсы маникюра в своём городе. Рейтинг школ, стоимость обучения, документы по окончании, советы экспертов и аналитика рынка красоты.">
<meta property="og:url" content="https://kursy-manikura.vercel.app/">
<meta property="og:image" content="https://kursy-manikura.vercel.app/logo.png">

    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<!-- Подключаем верхнее меню -->
<?php include 'header.php'; ?>

<!-- Основной контент -->
<div class="container">
<!-- === Блок: Главный баннер (герой) начало === -->
<section class="hero">
  <h1>💅 Лучшие курсы маникюра в вашем городе</h1>
  <p>Мы собрали для вас обзоры лучших курсов маникюра по городам России. Сегодня профессия мастера маникюра востребована как никогда — спрос на услуги растёт, а средний доход специалистов увеличивается из года в год.</p>
  <p>Выбирайте подходящий курс и читайте нашу свежую аналитику о рынке маникюрных услуг в России по итогам 2024 года, чтобы сделать осознанный выбор!</p>
</section>
<!-- === Блок: Главный баннер (герой) конец === -->




<!-- === Блок: Популярность услуг (диаграмма) начало === -->
<div class="sushi-section">
  <h3>Популярность бьюти-услуг в России, 2024</h3>

  <div class="chart-container">
    <canvas id="popularityChart"></canvas>
  </div>
  <p class="source-note">Источник: исследование YCLIENTS, апрель 2024 года</p>
</div>

<style>
/* === Стили для блока "Популярность услуг" === */
.chart-container {
  position: relative;
  max-width: 600px;
  margin: 30px auto;
}

.source-note {
  text-align: center;
  font-size: 12px;
  color: #777;
  margin-top: 10px;
}

@media (max-width: 768px) {
  .chart-container {
    max-width: 90%;
  }
}
/* === Конец стилей для блока "Популярность услуг" === */
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// === Диаграмма "Популярность услуг" ===
const ctx = document.getElementById('popularityChart').getContext('2d');
const popularityChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Маникюр', 'Стрижка', 'Педикюр', 'Окрашивание', 'Брови'],
    datasets: [{
      data: [30, 20, 15, 15, 20],
      backgroundColor: [
        '#ffcc00', '#ffa07a', '#90ee90', '#87ceeb', '#ffb6c1'
      ],
      borderColor: '#fff',
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
        labels: {
          color: '#333',
          font: {
            size: 14
          },
          usePointStyle: true,
          pointStyle: 'circle'
        }
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return context.label + ': ' + context.parsed + '%';
          }
        }
      }
    },
    interaction: {
      mode: 'nearest',
      intersect: true
    },
    hover: {
      mode: 'nearest',
      onHover: function(event, chartElement) {
        event.native.target.style.cursor = chartElement.length ? 'pointer' : 'default';
      }
    },
    elements: {
      arc: {
        hoverOffset: 12 // Кусочек увеличивается при наведении
      }
    }
  }
});
// === Конец диаграммы "Популярность услуг" ===
</script>
<!-- === Блок: Популярность услуг (диаграмма) конец === -->



<!-- ======== Блок: Средний чек по городам (динамическая таблица) начало ======== -->
<div class="sushi-section">
  <h3>Средний чек на маникюр в городах России</h3>
  <div class="average-check-wrapper">
    <table class="average-check-table">
      <thead>
        <tr>
          <th>Город</th>
          <th>Средний чек</th>
          <th>Рост за год</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Москва</td>
          <td><span class="price-highlight">1 690 ₽</span></td>
          <td><span class="rating-score">+21%</span></td>
        </tr>
        <tr>
          <td>Санкт-Петербург</td>
          <td><span class="price-highlight">1 800 ₽</span></td>
          <td><span class="rating-score">+6%</span></td>
        </tr>
        <tr>
          <td>Россия (среднее)</td>
          <td><span class="price-highlight">1 633 ₽</span></td>
          <td><span class="rating-score">+10%</span></td>
        </tr>
      </tbody>
    </table>
    <p class="data-source">Источник данных: аналитика сервиса YCLIENTS — одного из крупнейших CRM-сервисов для сферы бьюти и услуг в России.</p>
  </div>
</div>

<style>
/* === Стили для блока Средний чек по городам === */
.average-check-wrapper {
  overflow-x: auto;
  margin-top: 20px;
}

.average-check-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
  background: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  border-radius: 8px;
  overflow: hidden;
}

.average-check-table th, .average-check-table td {
  padding: 12px 16px;
  text-align: left;
  border-bottom: 1px solid #eee;
}

.average-check-table thead {
  background: #f9f9f9;
  font-weight: bold;
}

.average-check-table tbody tr:nth-child(even) {
  background-color: #fafafa;
}

.average-check-table tbody tr:hover {
  background-color: #f0f8ff;
  transition: background-color 0.3s;
}

.price-highlight {
  color: #ff6600;
  font-weight: bold;
}

.rating-score {
  color: #4caf50;
  font-weight: bold;
}

.data-source {
  margin-top: 15px;
  font-size: 13px;
  text-align: center;
  color: #888;
  font-style: italic;
}

@media (max-width: 768px) {
  .average-check-table th, .average-check-table td {
    padding: 10px;
    font-size: 13px;
  }
}
/* === Конец блока: Средний чек по городам === */
</style>
<!-- ======== Блок: Средний чек по городам (динамическая таблица) конец ======== -->


<!-- ======== Блок: Рост интереса мужчин к маникюру начало ======== -->
<div class="sushi-section">
  <h3>Рост интереса мужчин к маникюру в 2024 году</h3>
  <div class="men-manicure-stats">
    <div class="stat-item">
      <div class="stat-number">+270%</div>
      <div class="stat-text">Рост бронирований на мужской маникюр</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">+348%</div>
      <div class="stat-text">Рост бронирований на мужской педикюр</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">+39%</div>
      <div class="stat-text">Увеличение визитов мужчин на уход за бровями</div>
    </div>
  </div>
  <p class="data-source">Источник данных: аналитика сервиса Fitmost — одного из крупнейших IT-сервисов в сфере здорового образа жизни в России.</p>
</div>

<style>
/* === Стили для блока: Рост интереса мужчин к маникюру === */
.men-manicure-stats {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
}

.stat-item {
  background: #f9f9f9;
  padding: 15px 20px;
  border-radius: 10px;
  text-align: center;
  width: 220px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
}

.stat-item:hover {
  transform: translateY(-5px);
}

.stat-number {
  font-size: 28px;
  font-weight: bold;
  color: #0073e6;
  margin-bottom: 8px;
}

.stat-text {
  font-size: 14px;
  color: #333;
}

.data-source {
  margin-top: 20px;
  font-size: 13px;
  text-align: center;
  color: #888;
  font-style: italic;
}

@media (max-width: 768px) {
  .men-manicure-stats {
    flex-direction: column;
    align-items: center;
  }

  .stat-item {
    width: 90%;
  }
}
/* === Конец блока: Рост интереса мужчин к маникюру === */
</style>
<!-- ======== Блок: Рост интереса мужчин к маникюру конец ======== -->

<!-- === Блок: Как составляется рейтинг (обновленный) начало === -->
<section class="rating-info">
  <h2>📊 Как мы выбираем лучшие курсы?</h2>
  <p>Наш обзор формируется на основе реальных отзывов учеников, анализа программ обучения, количества практических занятий и наличия официальных документов о квалификации.  
  Мы внимательно оцениваем качество обучения, условия обучения и успехи выпускников, чтобы вы могли легко выбрать лучший курс маникюра в своём городе.</p>
  
  <a href="/about" class="btn" target="_blank">Подробнее</a>
</section>
<!-- === Блок: Как составляется рейтинг (обновленный) конец === -->



    <!-- Список городов -->
<section class="cities-list">
    <h2>🏙 Выберите ваш город</h2>
    <ul>
        <li><a href="/moskva">Москва</a></li>
<li><a href="/sankt-peterburg">Санкт-Петербург</a></li>
<li><a href="/arhangelsk">Архангельск</a></li>
<li><a href="/astrahan">Астрахань</a></li>
<li><a href="/balashiha">Балашиха</a></li>
<li><a href="/barnaul">Барнаул</a></li>
<li><a href="/vladivostok">Владивосток</a></li>
<li><a href="/vladimir">Владимир</a></li>
<li><a href="/volgograd">Волгоград</a></li>
<li><a href="/voronezh">Воронеж</a></li>
<li><a href="/ekaterinburg">Екатеринбург</a></li>
<li><a href="/ivanovo">Иваново</a></li>
<li><a href="/izhevsk">Ижевск</a></li>
<li><a href="/irkutsk">Иркутск</a></li>
<li><a href="/ioshkar-ola">Йошкар-Ола</a></li>
<li><a href="/kazan">Казань</a></li>
<li><a href="/kaliningrad">Калининград</a></li>
<li><a href="/kemerovo">Кемерово</a></li>
<li><a href="/kirov">Киров</a></li>
<li><a href="/kovrov">Ковров</a></li>
<li><a href="/krasnodar">Краснодар</a></li>
<li><a href="/krasnoyarsk">Красноярск</a></li>
<li><a href="/kurgan">Курган</a></li>
<li><a href="/lipetsk">Липецк</a></li>
<li><a href="/lyubertsy">Люберцы</a></li>
<li><a href="/mytishchi">Мытищи</a></li>
<li><a href="/naberezhnye-chelny">Набережные Челны</a></li>
<li><a href="/nizhnii-novgorod">Нижний Новгород</a></li>
<li><a href="/novokuznetsk">Новокузнецк</a></li>
<li><a href="/novosibirsk">Новосибирск</a></li>
<li><a href="/omsk">Омск</a></li>
<li><a href="/orenburg">Оренбург</a></li>
<li><a href="/orsk">Орск</a></li>
<li><a href="/penza">Пенза</a></li>
<li><a href="/perm">Пермь</a></li>
<li><a href="/rostov-na-donu">Ростов-на-Дону</a></li>
<li><a href="/ryazan">Рязань</a></li>
<li><a href="/samara">Самара</a></li>
<li><a href="/saratov">Саратов</a></li>
<li><a href="/stavropol">Ставрополь</a></li>
<li><a href="/surgut">Сургут</a></li>
<li><a href="/tver">Тверь</a></li>
<li><a href="/tolyatti">Тольятти</a></li>
<li><a href="/tomsk">Томск</a></li>
<li><a href="/tula">Тула</a></li>
<li><a href="/tyumen">Тюмень</a></li>
<li><a href="/ulyanovsk">Ульяновск</a></li>
<li><a href="/ufa">Уфа</a></li>
<li><a href="/himki">Химки</a></li>
<li><a href="/chelyabinsk">Челябинск</a></li>

    </ul>
</section>


<!-- === Блок: Тренды 2024 (начало) === -->
<div class="sushi-section">
  <h3>Тренды в индустрии маникюра 2025 года</h3>

  <div class="trends-list">
    <div class="trend-item">
      <div class="trend-icon">👨‍🦰</div>
      <div class="trend-text"><strong>Рост мужского маникюра</strong><br>Бронирования на мужской маникюр и педикюр выросли более чем на 270%.</div>
    </div>
    <div class="trend-item">
      <div class="trend-icon">💆‍♀️</div>
      <div class="trend-text"><strong>Возвращение SPA-маникюра</strong><br>Услуги расслабляющего маникюра с уходом снова в моде.</div>
    </div>
    <div class="trend-item">
      <div class="trend-icon">🎨</div>
      <div class="trend-text"><strong>Персонализированный дизайн</strong><br>Индивидуальные решения под стиль клиента становятся стандартом.</div>
    </div>
    <div class="trend-item">
      <div class="trend-icon">💳</div>
      <div class="trend-text"><strong>Рост цифровых чаевых</strong><br>Все больше салонов внедряют оплату чаевых через QR-коды.</div>
    </div>
    <div class="trend-item">
      <div class="trend-icon">🌎</div>
      <div class="trend-text"><strong>Русификация брендов</strong><br>Бренды переходят на русские названия и коммуникацию на родном языке.</div>
    </div>
  </div>
</div>

<style>
/* === Стили для блока "Тренды 2025" === */
.trends-list {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
  justify-content: center;
}

.trend-item {
  background: #f9f9f9;
  border-radius: 10px;
  padding: 15px;
  width: 260px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
}

.trend-item:hover {
  transform: translateY(-5px);
}

.trend-icon {
  font-size: 30px;
  margin-bottom: 10px;
}

.trend-text {
  font-size: 14px;
  color: #333;
  line-height: 1.4;
}

@media (max-width: 768px) {
  .trend-item {
    width: 90%;
  }
}
/* === Конец стилей для блока "Тренды 2025" === */
</style>
<!-- === Блок: Тренды 2025 (конец) === -->

<!-- === Блок: Средний размер чаевых (начало) === -->
<div class="sushi-section">
  <h3>Средний размер чаевых в индустрии красоты, 2024</h3>

  <div class="tips-stats">
    <div class="tip-item">
      <div class="tip-number">301 ₽</div>
      <div class="tip-text">Средний размер чаевых в 2023 году</div>
    </div>
    <div class="tip-item">
      <div class="tip-number">+10%</div>
      <div class="tip-text">Рост среднего чаевого за год</div>
    </div>
    <div class="tip-item">
      <div class="tip-number">70%</div>
      <div class="tip-text">Доля безналичных платежей в России</div>
    </div>
  </div>

  <p class="tips-source">Источник данных: исследование YCLIENTS и CloudTips — ведущих сервисов в области CRM и цифровых платежей.</p>
</div>

<style>
/* === Стили для блока "Средний размер чаевых" === */
.tips-stats {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  margin-top: 20px;
}

.tip-item {
  background: #f9f9f9;
  padding: 15px 20px;
  border-radius: 10px;
  text-align: center;
  width: 220px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
}

.tip-item:hover {
  transform: translateY(-5px);
}

.tip-number {
  font-size: 28px;
  font-weight: bold;
  color: #ff6600;
  margin-bottom: 8px;
}

.tip-text {
  font-size: 14px;
  color: #333;
  line-height: 1.4;
}

.tips-source {
  text-align: center;
  margin-top: 20px;
  font-size: 13px;
  color: #777;
}

@media (max-width: 768px) {
  .tip-item {
    width: 90%;
  }
}
/* === Конец стилей для блока "Средний размер чаевых" === */
</style>
<!-- === Блок: Средний размер чаевых (конец) === -->



<section class="video-reviews">
   <h2>🎥 Как проходят занятия и что говорят ученики</h2>
<p>Посмотрите видео с занятий и отзывами учеников, чтобы узнать больше о формате обучения и преимуществах курсов.</p>


    
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-4Vaogfx_O0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E4br2i5W6go" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0Tv47WuvCd8" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8TDkmmx1u8Q" allowfullscreen></iframe>
    </div>
</section>



<section class="contact-block">
    <h2>📩 Свяжитесь с нами</h2>
    <p>Если у вас есть вопросы или предложения по улучшению нашей подборки курсов, напишите нам на e-mail.</p>
    <p><a href="mailto:friendlydesk@mail.ru" class="contact-email">friendlydesk@mail.ru</a></p>
</section>


<!-- скрываем форму
<section class="contact-form">
    <h2>📩 Свяжитесь с нами</h2>
    <p>Если у вас есть вопросы или предложения, напишите нам. Мы всегда рады вашим отзывам!</p>
    
    <form action="send_message.php" method="post">
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn">Отправить</button>
    </form>
</section>
-->


</div>

<!-- Подключаем подвал -->
<?php include 'footer.php'; ?>

<!-- Подключаем JS -->
<script src="/scripts.js"></script>

</body>
</html>
