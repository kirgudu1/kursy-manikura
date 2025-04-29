<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лучшие курсы по маникюру | О сервисе</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<!-- Подключаем верхнее меню -->
<?php include 'header.php'; ?>

<!-- Основной контент -->
<div class="container">

    <!-- ======== Блок: Вступление "О Сервисе" начало ======== -->
<section class="about-service-intro sushi-section">
  <h1>🌟 Добро пожаловать на наш сайт!</h1>
  <p>Мы создали этот проект, чтобы помочь каждому найти свой путь в мире ногтевого сервиса. Здесь вы найдете лучшие курсы маникюра собранные в одном месте, с понятным описанием, отзывами учеников и выгодными условиями обучения.</p>
  <p>Наша цель — сделать выбор курса простым, понятным и честным. Мы тщательно анализируем предложения, чтобы вы могли уверенно выбрать обучение, которое откроет для вас новые возможности!</p>
</section>

<style>
/* === Стили для блока: Вступление "О Сервисе" === */
.about-service-intro {
  text-align: center;
  padding: 40px 20px;
  background: #f9f9f9;
  border-radius: 12px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
  margin-bottom: 40px;
}
.about-service-intro h1 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #222;
}
.about-service-intro p {
  font-size: 16px;
  color: #555;
  max-width: 700px;
  margin: 10px auto;
}
@media (max-width: 768px) {
  .about-service-intro h1 {
    font-size: 24px;
  }
  .about-service-intro p {
    font-size: 15px;
  }
}
/* === Конец блока: Вступление "О Сервисе" === */
</style>
<!-- ======== Блок: Вступление "О Сервисе" конец ======== -->


<!-- ======== Блок: Почему стоит нам доверять? начало ======== -->
<section class="trust-section">
  <div class="container">
    <h2>Почему стоит нам доверять?</h2>
    <ul class="trust-list">
      <li><strong>Тщательный отбор:</strong> Мы анализируем реальные отзывы учеников, качество программ и достижения выпускников.</li>
      <li><strong>Фокус на практике:</strong> В приоритете курсы с большим количеством практических занятий на моделях.</li>
      <li><strong>Официальные документы:</strong> Мы рекомендуем только те курсы, которые выдают лицензированные дипломы и сертификаты.</li>
      <li><strong>Актуальность информации:</strong> Мы регулярно обновляем данные, чтобы вы получали только свежую и проверенную информацию.</li>
      <li><strong>Честность:</strong> Мы сотрудничаем с академиями в рамках партнерских программ, но сохраняем объективность при отборе курсов.</li>
    </ul>
  </div>
</section>

<style>
/* === Стили для блока "Почему стоит нам доверять?" === */
.trust-section {
  background: #ffffff;
  padding: 40px 20px;
  border-radius: 10px;
  margin-bottom: 40px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.trust-section h2 {
  text-align: center;
  font-size: 26px;
  margin-bottom: 25px;
  color: #222;
}

.trust-list {
  list-style-type: none;
  padding: 0;
  max-width: 800px;
  margin: 0 auto;
}

.trust-list li {
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 12px;
  color: #555;
  position: relative;
  padding-left: 25px;
}

.trust-list li::before {
  content: "✔️";
  position: absolute;
  left: 0;
  top: 2px;
  font-size: 18px;
  color: #4caf50;
}

@media (max-width: 768px) {
  .trust-section h2 {
    font-size: 22px;
  }

  .trust-list li {
    font-size: 15px;
  }
}
/* === Конец блока "Почему стоит нам доверять?" === */
</style>
<!-- ======== Блок: Почему стоит нам доверять? конец ======== -->

<!-- ======== Блок: Как мы отбираем курсы начало ======== -->
<section class="about-selection">
  <div class="container">
    <h2>🔍 Как мы отбираем курсы маникюра?</h2>
    <p>На нашем сайте представлены только тщательно отобранные программы обучения. При выборе курсов мы учитываем:</p>
    <ul>
      <li>Реальные отзывы выпускников о качестве обучения;</li>
      <li>Актуальность программ и наличие практики на моделях;</li>
      <li>Выдачу официальных дипломов и сертификатов после окончания курсов;</li>
      <li>Квалификацию преподавателей и условия обучения;</li>
      <li>Историю и репутацию учебных заведений.</li>
    </ul>
    <p>Благодаря тщательному отбору вы можете быть уверены, что найдёте надёжное место для старта или развития карьеры в сфере маникюра.</p>
  </div>
</section>

<style>
/* ======== Стили блока: Как мы отбираем курсы ======== */
.about-selection {
  margin: 50px 0;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.about-selection h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #222;
}

.about-selection p {
  font-size: 16px;
  margin-bottom: 15px;
}

.about-selection ul {
  list-style-type: disc;
  padding-left: 20px;
  margin-bottom: 15px;
}

.about-selection li {
  margin-bottom: 8px;
  font-size: 15px;
}
/* ======== Конец стилей блока: Как мы отбираем курсы ======== */
</style>
<!-- ======== Блок: Как мы отбираем курсы конец ======== -->







<!-- Подключаем подвал -->
<?php include 'footer.php'; ?>

<!-- Подключаем JS -->
<script src="/scripts.js"></script>

</body>
</html>
