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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Все техники маникюра и педикюра</td>
<td>2-5 месяцев</td>
<td>176</td>
<td>40</td>
<td>21</td>
<td>Диплом специалиста</td>
<td>83 100 ₽</td>
<td>50%</td>
<td>3 500 ₽/мес. на 24 месяца</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-extensions" target="_blank">Курсы наращивания ногтей</a></td>
<td>Моделирование и коррекция ногтей</td>
<td>1 месяц</td>
<td>56</td>
<td>8</td>
<td>5</td>
<td>Диплом мастера</td>
<td>36 800 ₽</td>
<td>50%</td>
<td>4 100 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">Мастер маникюра и педикюра</a></td>
<td>Современные техники маникюра и педикюра</td>
<td>2-4 месяца</td>
<td>104</td>
<td>26</td>
<td>13</td>
<td>Диплом специалиста</td>
<td>52 900 ₽</td>
<td>50%</td>
<td>5 900 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">Мастер маникюра и моделирования ногтей</a></td>
<td>Создание уникальных дизайнов ногтей</td>
<td>2-4 месяца</td>
<td>136</td>
<td>30</td>
<td>10</td>
<td>Диплом специалиста</td>
<td>67 200 ₽</td>
<td>50%</td>
<td>3 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-art" target="_blank">Курс дизайна ногтей</a></td>
<td>Техники акварельного рисования и вензелей</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>10 200 ₽</td>
<td>50%</td>
<td>3 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/pedicure" target="_blank">Курсы педикюра</a></td>
<td>Современные техники SPA-педикюра</td>
<td>2 месяца</td>
<td>60</td>
<td>10</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>23 200 ₽</td>
<td>50%</td>
<td>3 900 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/manicure-master" target="_blank">Курс мастера маникюра</a></td>
<td>Техники работы с гель-лаком и дизайном</td>
<td>1-2 месяца</td>
<td>47</td>
<td>16</td>
<td>8</td>
<td>Диплом специалиста</td>
<td>27 600 ₽</td>
<td>50%</td>
<td>4 600 ₽/мес.</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
<!--startblok-->
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер-универсал ногтевого сервиса</div>
<h2>Мастер-универсал ногтевого сервиса</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-5 месяцев</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес. на 24 месяца</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">83 100 ₽</span> <span class="rating-count"><del>166 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение, минимальная цена только на ограниченное время.</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3; 3-й Павловский пер., д. 14</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-nail-service-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Москве</strong> — идеальный выбор для начинающих и опытных мастеров, желающих освоить актуальные техники маникюра и педикюра.</p>
<p>Программа включает классические и современные методы, включая наращивание, дизайн и SPA-уход.</p>
<p>За <span class="price-highlight">176 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для новичков, так и для профессионалов, стремящихся расширить свои навыки и спектр услуг.</p>
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
<span><strong>2-5 месяцев</strong></span>
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
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический и аппаратный маникюр, покрытие ногтей</td>
</tr>
<tr>
<td>📈 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, акварель, френч</td>
</tr>
<tr>
<td>🎨 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический, аппаратный, дисковый педикюр</td>
</tr>
<tr>
<td>💅 Наращивание</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем, моделирование ногтей</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения (таблица) -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Выполнять классический, аппаратный и комбинированный маникюр</li>
<li>🌈 Создавать уникальные дизайны ногтей</li>
<li>🛠️ Реально наращивать ногти с использованием разных материалов</li>
<li>🚀 Разрабатывать SPA-процедуры для ухода за руками и ногами</li>
<li>📜 Подтверждать квалификацию дипломом специалиста</li>
<li>🤝 Работать с реальными клиентами и строить свою клиентскую базу</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы наращивания ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы наращивания ногтей</div>
<h2>Курсы наращивания ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 месяц</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 100 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">36 800 ₽</span> <span class="rating-count"><del>73 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период акций!</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3 и 3-й Павловский пер., д. 14</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-extensions" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-extensions" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей»</strong> в <strong>Москве</strong> — идеальный выбор для будущих мастеров ногтевого сервиса.</p>
<p>Вы научитесь методам моделирования, ремонта и коррекции ногтей, а также получите практику на реальных клиентах.</p>
<p>За <span class="price-highlight">56 ак. часов</span> слушатели получают практику и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td>🔰 Введение в наращивание</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Основы работы с гелем и полигелем</td>
</tr>
<tr>
<td>📈 Моделирование с нижними формами</td>
<td><span class="price-highlight">16 ч / 3 урока</span></td>
<td>Технология наращивания и коррекция</td>
</tr>
<tr>
<td>🎨 Моделирование с верхними формами</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Качественное моделирование, френч</td>
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
<li>💅 Эффективные методы моделирования ногтей</li>
<li>🎯 Техника работы с гелем и полигелем</li>
<li>🧰 Создание сложных форм ногтей</li>
<li>🎨 Правила выкладки френча</li>
<li>🌸 Коррекция и ремонт наращенных ногтей</li>
<li>📋 Успешное ведение портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-extensions" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 900 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">52 900 ₽</span> <span class="rating-count"><del>105 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на ограниченный период времени.</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, дом 23А, стр. 3 (М. Комсомольская площадь)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и педикюра»</strong> в <strong>Москве</strong> — это идеальный старт для новичков и профессионалов в бьюти-индустрии.</p>
<p>Программа охватывает современные техники маникюра и педикюра, включая гель-лак и SPA-уход.</p>
<p>За <span class="price-highlight">104 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для мастеров, желающих повысить свою квалификацию.</p>
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
<span><strong>2-4</strong> месяца</span>
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
<td>Классический маникюр, аппаратный маникюр, покрытие и ремонт ногтей</td>
</tr>
<tr>
<td>📈 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический педикюр, аппаратный педикюр, дисковый педикюр</td>
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
<li>💅 Делать все виды маникюра и педикюра</li>
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 Применять различные техники дизайна</li>
<li>🌸 Устраивать SPA-маникюр и проводить уходовые процедуры</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span> (на 18 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">67 200 ₽</span> <span class="rating-count"><del>134 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в ограниченный период</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3 (М. Комсомольская площадь) / 3-й Павловский пер., д. 14 (М. Тульская)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и моделирования ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и моделирования ногтей»</strong> в <strong>Москве</strong> — идеальный старт для начинающих мастеров в индустрии красоты.</p>
<p>Программа охватывает актуальные техники маникюра, моделирования ногтей, а также создание дизайна разной сложности.</p>
<p>За <span class="price-highlight">136 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто уже работает в сфере красоты и хочет расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>136</strong> ак. часов</span>
<span><strong>30</strong> уроков</span>
<span><strong>10</strong> процедур</span>
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
<td>🔰 Мастера маникюра</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический, аппаратный маникюр, покрытие и ремонт ногтей</td>
</tr>
<tr>
<td>📈 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, стили тату и акварель, уникальный френч</td>
</tr>
<tr>
<td>🎨 Наращивание ногтей</td>
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
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🌸 Работать в разных техниках, включая акварель и френч</li>
<li>📋 Давать рекомендации по уходу за ногтями и руками</li>
<li>🏆 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс дизайна ногтей</div>
<h2>Курс дизайна ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (до 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 200 ₽</span> <span class="rating-count"><del>20 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> ограниченное предложение!</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-art" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-art" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Москве</strong> — идеальное решение для тех, кто хочет стать мастером в мире нейл-арта.</p>
<p>Программа включает изучение различных техник дизайна, таких как акварель, вензеля, стиль тату и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> студенты получают ценную практику на реальных моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет повысить свою квалификацию в бьюти-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>2 недели</strong></span>
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
<td>🔰 Основы дизайна</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Акварельная роспись, вензеля</td>
</tr>
<tr>
<td>🎨 Разновидности дизайна</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Эффект хрустальных камней, стиль тату</td>
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
<li>💅 Выполнять акварельные дизайны</li>
<li>🎯 Создавать вензеля и уникальный френч</li>
<li>🧰 Осваивать стиль тату в дизайне ногтей</li>
<li>🎨 Использовать эффекты хрустальных камней</li>
<li>🌸 Работать с бархатным песком и декоративными материалами</li>
<li>📋 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/nail-art" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы педикюра</div>
<h2>Курсы педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 200 ₽</span> <span class="rating-count"><del>46 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках акции на обучение</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3 и 3-й Павловский пер., д. 14</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/pedicure" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы педикюра»</strong> в <strong>Москве</strong> — идеальный выбор для начинающих специалистов в области ногтевого сервиса.</p>
<p>Участники освоят современные техники SPA-педикюра, коррекцию формы и уход, что позволит им предоставлять качественные услуги.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет улучшить свои навыки и начать карьеру мастера педикюра.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span> <span><strong>10</strong> уроков</span> <span><strong>5</strong> процедур</span> <span><strong>2 месяца</strong></span>
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
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Классический, аппаратный педикюр</td>
</tr>
<tr>
<td>📈 SPA-педикюр</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Уходовые процедуры, массаж</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">20 ч / 2 урока</span></td>
<td>Создание стильных образов, покрытие гель-лаком</td>
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
<li>💅 Выполнять классический и аппаратный педикюр</li>
<li>🎯 Работать с современными инструментами</li>
<li>🌸 Осваивать техники SPA-педикюра</li>
<li>🎨 Создавать стильные образы для клиентов</li>
<li>📋 Давать грамотные рекомендации по уходу</li>
<li>👩‍🎓 Получить диплом специалиста по педикюру</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс мастера маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс мастера маникюра</div>
<h2>Курс мастера маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">47 ак. часов</span> (1-2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">27 600 ₽</span> <span class="rating-count"><del>55 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/manicure-master" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/manicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс мастера маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс мастера маникюра»</strong> в <strong>Москве</strong> — это идеальный старт для начинающих в бьюти-индустрии.</p>
<p>Вы освоите техники работы с гель-лаком, френчем и дизайном ногтей.</p>
<p>За <span class="price-highlight">47 академических часов</span> слушатели получат практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>47</strong> ак. часов</span>
<span><strong>16</strong> уроков</span>
<span><strong>8</strong> процедур</span>
<span><strong>1-2 месяца</strong></span>
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
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Классический, европейский, комбинированный маникюр</td>
</tr>
<tr>
<td>📈 Продвижение</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Гель-лак, френч, дизайн</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Современные технологии, Spa-маникюр</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения (таблица) -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Выполнять классический и комбинированный маникюр</li>
<li>🎯 Работать с гель-лаком и создавать стойкие покрытия</li>
<li>🧰 Проводить ремонт и уход за ногтями</li>
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🌸 Осуществлять Spa-маникюр и уходовые процедуры</li>
<li>📋 Получить диплом специалиста в области маникюра</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://moscow.ecolespb.ru/manicure-school/manicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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