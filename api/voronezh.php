<?php
include "meta.php"; // Подключаем файл с мета-информацией
$page = basename($_SERVER['PHP_SELF']);
$title = $meta_tags[$page]['title'] ?? "По умолчанию";
$description = $meta_tags[$page]['description'] ?? "Описание по умолчанию";
$h1 = $meta_tags[$page]['h1'] ?? $title; // Если H1 не указан, используем Title
$content = $meta_tags[$page]['content'] ?? ""; // Первый абзац после H1
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css?v=<?= rand(1000, 9999) ?>">

<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($description) ?>">
	
	

</head>
<body>

<!-- Подключаем верхнее меню -->
<?php include 'header.php'; ?>



<?php
// Собираем список ТОП-доставок, чтобы sidebar.php использовал его
$sushiBlocks = [];
$rank = 1;

// Ищем все блоки с ТОП-доставками на странице
foreach (glob("*.php") as $filename) {
    if ($filename !== "sidebar.php" && $filename !== "header.php" && $filename !== "footer.php") {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(file_get_contents($filename));
        $xpath = new DOMXPath($dom);
        $nodes = $xpath->query('//div[contains(@class, "sushi-ranking")]');

        foreach ($nodes as $node) {
            $titleNode = $xpath->query('.//h2', $node);
            $title = $titleNode->length > 0 ? $titleNode->item(0)->nodeValue : "Без названия";
            $sushiBlocks[] = $title;
            $rank++;
        }
    }
}
?>

<!-- Подключаем боковое меню -->
<?php include 'sidebar.php'; ?>



	
	

    <!-- Основной контент -->
	
	    <div class="content">
   <div class="sushi-block">
   
   <!-- ======== МОЙ КОНТЕНТ НАЧАЛО ======== -->
	
<!-- ======== Заголовок страницы города ======== -->
<div class="city-header">
<h1><?= htmlspecialchars($h1) ?></h1>
<?php if (!empty($content)): ?>
    <p><?= nl2br(htmlspecialchars($content)) ?></p>
<?php endif; ?>
</div>
<!-- ======== Конец заголовка страницы города ======== -->
	<?php include 'rating-info.php'; ?>
<!-- Блок: Сравнительная таблица курсов -->
<div class="sushi-section">
<h3>Сравнительная таблица курсов</h3>
<div class="table-wrapper">
<table class="comparison-table">
<thead>
<tr>
<th>Название курса</th>
<th>Чему вы научитесь</th>
<th>Длительность</th>
<th>Часы</th>
<th>Уроки</th>
<th>Процедуры</th>
<th>Документ</th>
<th>Стоимость</th>
<th>Скидка</th>
<th>Рассрочка</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-art" target="_blank">Курсы дизайна ногтей</a></td>
<td>Актуальные техники дизайна ногтей</td>
<td>2 недели</td>
<td>16 ак. часов</td>
<td>4</td>
<td>0</td>
<td>Диплом специалиста</td>
<td>7 300 ₽</td>
<td>50%</td>
<td>1 225 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/manicure-master" target="_blank">Курсы мастера маникюра</a></td>
<td>Классические и современные техники маникюра</td>
<td>1-2 месяца</td>
<td>64 ак. часов</td>
<td>16</td>
<td>8</td>
<td>Диплом специалиста</td>
<td>19 700 ₽</td>
<td>50%</td>
<td>3 300 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/pedicure" target="_blank">Курс педикюра</a></td>
<td>Профессиональные техники педикюра</td>
<td>2 месяца</td>
<td>40 ак. часов</td>
<td>10</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>12 700 ₽</td>
<td>50%</td>
<td>4 300 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">Мастер маникюра и моделирования ногтей</a></td>
<td>Современные техники маникюра и моделирования</td>
<td>2-4 месяца</td>
<td>136 ак. часов</td>
<td>30</td>
<td>10</td>
<td>Диплом специалиста</td>
<td>43 700 ₽</td>
<td>50%</td>
<td>4 900 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">Мастер маникюра и педикюра</a></td>
<td>Все виды маникюра и педикюра</td>
<td>2-4 месяца</td>
<td>104 ак. часов</td>
<td>26</td>
<td>13</td>
<td>Диплом специалиста</td>
<td>32 200 ₽</td>
<td>50%</td>
<td>3 600 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-extensions" target="_blank">Курс наращивания ногтей</a></td>
<td>Методики наращивания и коррекции</td>
<td>1 месяц</td>
<td>56 ак. часов</td>
<td>7</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>21 400 ₽</td>
<td>50%</td>
<td>3 600 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Все виды услуг ногтевого сервиса</td>
<td>2-5 месяцев</td>
<td>176 ак. часов</td>
<td>40</td>
<td>21</td>
<td>Диплом специалиста</td>
<td>52 000 ₽</td>
<td>50%</td>
<td>5 800 ₽/мес.</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
<!--startblok-->
<!-- Главная карточка "Курсы дизайна ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы дизайна ногтей</div>
<h2>Курсы дизайна ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">1 225 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 300 ₽</span> <span class="rating-count"><del>14 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение при записи в ближайшие группы.</p>
<p><strong>📍 Адрес:</strong> Воронеж, ул. Кольцовская, 23 А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-art" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-art" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы дизайна ногтей»</strong> в <strong>Воронеже</strong> — для всех, кто хочет освоить актуальные техники дизайна ногтей.</p>
<p>На курсе изучают акварель, вензеля, эффект хрустальных камней и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подойдёт как для новичков, так и для профессионалов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>0</strong> процедур</span> <span><strong>2 недели</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварель, вензеля, эффект хрустальных камней, уникальный френч</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>💎 Выполнять эффект хрустальных камней</li>
<li>🌈 Осваивать технику акварели</li>
<li>✒️ Рисовать вензеля и элементы тату</li>
<li>🌟 Создавать разнообразные виды френча</li>
<li>🖌️ Работать с различными материалами для дизайна</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-art" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы мастера маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы мастера маникюра</div>
<h2>Курсы мастера маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 300 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 700 ₽</span> <span class="rating-count"><del>39 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в специальные периоды.</p>
<p><strong>📍 Адрес:</strong> г. Воронеж, ул. Кольцовская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/manicure-master" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/manicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы мастера маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы мастера маникюра»</strong> в <strong>Воронеже</strong> — это идеальный выбор для начинающих в сфере красоты.</p>
<p>Учите классические и современные техники маникюра, такие как гель-лак, френч и дизайн.</p>
<p>За <span class="price-highlight">64 академических часа</span> студенты получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто хочет повысить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часов</span> <span><strong>16</strong> уроков</span> <span><strong>8</strong> процедур</span> <span><strong>1-2</strong> месяца</span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический, европейский маникюр, стерилизация инструментов</td>
</tr>
<tr>
<td>📈 Аппаратный маникюр</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Работа с маникюрным аппаратом, комбинированный маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Техники дизайна ногтей, Spa-маникюр</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Выполнять классический, европейский и аппаратный маникюр</li>
<li>🎯 Работать с гель-лаком и создавать стойкие покрытия</li>
<li>🧰 Проводить ремонт и укрепление ногтевой пластины</li>
<li>🎨 Создавать различные дизайны ногтей</li>
<li>🌸 Проводить Spa-маникюр и уходовые процедуры</li>
<li>📋 Убедиться в своей квалификации с дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/manicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс педикюра</div>
<h2>Курс педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 300 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">12 700 ₽</span> <span class="rating-count"><del>25 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> — отличное время для начала обучения!</p>
<p><strong>📍 Адрес:</strong> г. Воронеж, ул. Кольцовская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/pedicure" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Воронеже</strong> — идеальный выбор для желающих освоить востребованную профессию в beauty-сфере.</p>
<p>Вы изучите профессиональные техники педикюра, такие как SPA-педикюр, коррекция формы и уход.</p>
<p>За <span class="price-highlight">2 месяца</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои навыки и начать карьеру мастера педикюра.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>5</strong> процедур</span>
<span><strong>2 месяца</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Классический и SPA-педикюр</td>
</tr>
<tr>
<td>📈 Коррекция</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Коррекция формы ногтей, уход за стопами</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Покрытие гель-лаком, френч, дизайн ногтей</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Выполнять классический и SPA-педикюр</li>
<li>🧰 Корректировать форму ногтей и стрижку</li>
<li>🌸 Работать с основными инструментами педикюра</li>
<li>🎨 Создавать стильное покрытие и дизайн</li>
<li>📋 Давать рекомендации по уходу</li>
<li>🔍 Понимать использование косметики для педикюра</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер маникюра и моделирования ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер маникюра и моделирования ногтей</div>
<h2>Мастер маникюра и моделирования ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-4 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 700 ₽</span> <span class="rating-count"><del>87 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> от первоначальной стоимости курса</p>
<p><strong>📍 Адрес:</strong> г. Воронеж, ул. Кольцовская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и моделирования ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и моделирования ногтей»</strong> в <strong>Воронеже</strong> — отличный выбор для начинающих и опытных мастеров, которые стремятся освоить актуальные техники и получить новые навыки.</p>
<p>Программа включает изучение классического маникюра, наращивания ногтей, современного дизайна и техники работы с материалами.</p>
<p>За <span class="price-highlight">136 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто уже работает в сфере красоты и хочет расширить свои возможности.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>136</strong> ак. часов</span> <span><strong>30</strong> уроков</span> <span><strong>10</strong> процедур</span> <span><strong>2-4</strong> месяца</span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Базовый</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический маникюр, аппаратный маникюр, Spa-маникюр и дизайн</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, стили татуа и акварель, уникальный френч</td>
</tr>
<tr>
<td>📈 Наращивание</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем и полигелем, моделирование на нижних и верхних формах</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Выполнять классический и аппаратный маникюр</li>
<li>🎯 Моделировать ногти с помощью геля и полигеля</li>
<li>🎨 Применять современные техники дизайна ногтей</li>
<li>🧰 Проводить ремонт и коррекцию ногтей</li>
<li>🌸 Осваивать различные стили и тренды в маникюре</li>
<li>📋 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер маникюра и педикюра</div>
<h2>Мастер маникюра и педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-4 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">32 200 ₽</span> <span class="rating-count"><del>64 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение до окончания акции</p>
<p><strong>📍 Адрес:</strong> Воронеж, ул. Кольцовская 23А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и педикюра»</strong> в <strong>Воронеже</strong> — идеальный выбор для начинающих специалистов, желающих влиться в сферу beauty.</p>
<p>Программа включает в себя обучение всем видам маникюра и педикюра, техникам работы с гель-лаком и уникальными дизайнами.</p>
<p>За <span class="price-highlight">104 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих повысить свою квалификацию и расширить возможности.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>104</strong> ак. часов</span>
<span><strong>26</strong> уроков</span>
<span><strong>13</strong> процедур</span>
<span><strong>2-4 месяца</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Маникюр</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический, аппаратный, SPA-маникюр, гель-лак</td>
</tr>
<tr>
<td>🔶 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический, аппаратный, экспресс-педикюр</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Делать классический и аппаратный маникюр</li>
<li>🎯 Осваивать техники покрытия гель-лаком</li>
<li>🧰 Проводить процедуры SPA для рук и ног</li>
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🌸 Выполнять все виды эстетического педикюра</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс наращивания ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс наращивания ногтей</div>
<h2>Курс наращивания ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 месяц</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 400 ₽</span> <span class="rating-count"><del>42 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в этот период действуют особые предложения.</p>
<p><strong>📍 Адрес:</strong> Воронеж, ул. Кольцовская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-extensions" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-extensions" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс наращивания ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс наращивания ногтей»</strong> в <strong>Воронеже</strong> — идеальное решение для тех, кто хочет стать профессионалом в nail-индустрии.</p>
<p>Программа включает в себя современные методики наращивания, моделирования и коррекции ногтей.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс будет полезен как новичкам, так и тем, кто хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>7</strong> уроков</span>
<span><strong>5</strong> процедур</span>
<span><strong>1 месяц</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы наращивания</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Работа с гелем и полигелем, моделирование ногтей</td>
</tr>
<tr>
<td>📈 Техники наращивания</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Коррекция ногтей, техники моделирования</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">20 ч / 2 урока</span></td>
<td>Френч, сложные формы ногтей</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Моделировать ногти на нижних и верхних формах</li>
<li>🎯 Работать с гелем и полигелем для идеальной формы</li>
<li>🧰 Делать коррекции и ремонт наращенных ногтей</li>
<li>🎨 Создавать красивые дизайны на ногтях</li>
<li>🌸 Придавать ногтям различные формы и стиль</li>
<li>📋 Получить диплом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/nail-extensions" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер-универсал ногтевого сервиса</div>
<h2>Мастер-универсал ногтевого сервиса</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">176 ак. часов</span> (2-5 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 800 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">52 000 ₽</span> <span class="rating-count"><del>104 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> Воронеж, ул. Кольцовская, 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74732120527">+7 (473) 212-05-27</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">voronezh.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-nail-service-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Воронеже</strong> — идеальный выбор для начинающих мастеров и тех, кто хочет повысить квалификацию в nail-индустрии.</p>
<p>Вы освоите основы классического и аппаратного маникюра, техники дизайна и наращивания ногтей, а также получите навыки SPA-ухода.</p>
<p>За <span class="price-highlight">176 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто желает расширить свои услуги в сфере ногтевого сервиса.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>176</strong> ак. часов</span>
<span><strong>40</strong> уроков</span>
<span><strong>21</strong> процедур</span>
<span><strong>2-5</strong> месяцев</span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Маникюр</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический, аппаратный, Spa-маникюр, дизайн ногтей</td>
</tr>
<tr>
<td>📈 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, акварельный стиль, уникальный френч</td>
</tr>
<tr>
<td>🎨 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический, аппаратный, экспресс-педикюр</td>
</tr>
<tr>
<td>💅 Наращивание</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем, полигелем, моделирование</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Выполнять классический и аппаратный маникюр и педикюр</li>
<li>🎨 Создавать уникальные дизайны ногтей в различных техниках</li>
<li>🧰 Осуществлять процедуры наращивания ногтей</li>
<li>🌿 Работать с материалами для SPA-ухода</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
<li>📈 Расширять спектр своих услуг в nail-индустрии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://voronezh.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->

<!-- ======== МОЙ КОНТЕНТ КОНЕЦ ======== -->
<!-- Подключаем Популярные города -->
<?php include 'popular-cities.php'; ?>



</div>






    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>



<!-- Подключаем футер -->
<?php include 'footer.php'; ?>


<!-- Подключаем внешний JavaScript -->
<script src="/scripts1.js"></script>
<script src="script_skidka.js"></script>
</body>


</body>
</html>