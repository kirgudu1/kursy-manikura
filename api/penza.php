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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/nail-design" target="_blank">Курс дизайна ногтей</a></td>
<td>Создавать акварельные рисунки, выполнять вензеля</td>
<td>16 ак. часов (2 недели)</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>4 700 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Наращивание, восстановление ногтей</td>
<td>16 ак. часов (2 недели)</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>7 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">Курсы повышения квалификации по маникюру</a></td>
<td>Классический и аппаратный маникюр</td>
<td>16 ак. часов (2 недели)</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>4 700 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курс педикюра</a></td>
<td>Классический, аппаратный и SPA-педикюр</td>
<td>16 ак. часов (2 недели)</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>6 600 ₽</td>
<td>50%</td>
<td>5 500 ₽/мес. (3 месяца)</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Основы маникюра, работа с клиентами</td>
<td>1 месяц</td>
<td>24 ак. часа</td>
<td>6</td>
<td>4</td>
<td>Сертификат специалиста</td>
<td>8 000 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">Мастер маникюра</a></td>
<td>Маникюр, дизайн, гель-лак</td>
<td>3–7 недель</td>
<td>56</td>
<td>14</td>
<td>7</td>
<td>Диплом специалиста</td>
<td>15 700 ₽</td>
<td>50%</td>
<td>2 700 ₽/мес. (6 месяцев)</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Все аспекты маникюра и педикюра</td>
<td>2-3 месяца</td>
<td>88</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>25 400 ₽</td>
<td>50%</td>
<td>4 300 ₽/мес. (6 месяцев)</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
<!--startblok-->
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс дизайна ногтей</div>
<h2>Курс дизайна ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 700 ₽</span> <span class="rating-count"><del>9 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4, 3 этаж</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/nail-design" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Пензе</strong> — идеальный выбор для тех, кто хочет стать мастером в nail-дизайне.</p>
<p>Программа охватывает популярные техники, такие как акварель, вензеля и стиль тату, с акцентом на практику.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практическую отработку и <span class="price-highlight">сертификат</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки в дизайне ногтей.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники работы с акварелью, геометрия</td>
</tr>
<tr>
<td>📈 Техники декорирования</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Вензеля, стиль тату</td>
</tr>
<tr>
<td>🎨 Уникальный френч</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Причудливые варианты френча, креативные идеи</td>
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
<li>💅 Создавать акварельные рисунки</li>
<li>🎯 Выполнять вензеля и эффект хрустальных камней</li>
<li>🖌️ Применять стиль тату в дизайне ногтей</li>
<li>🌈 Реализовывать уникальные френчи</li>
<li>🎨 Комбинировать разные техники декора</li>
<li>📊 Формировать собственное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы наращивания ногтей гелем</div>
<h2>Курсы наращивания ногтей гелем</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 800 ₽</span> <span class="rating-count"><del>15 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> по специальным предложениям</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4, 3 этаж</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Пензе</strong> — идеальный выбор для начинающих и профессионалов, желающих освоить навыки наращивания ногтей и улучшения качества ногтевой пластины.</p>
<p>В программе курса рассматриваются современные техники наращивания, восстановление поврежденных ногтей и работа с разнообразными гелями.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои навыки в нейл-сервисе.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> отработки на практике</span>
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
<td>🔰 Основы наращивания</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Подбор материалов, технологии наращивания</td>
</tr>
<tr>
<td>📈 Работа с поврежденными ногтями</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Исправление повреждений, восстановление формы</td>
</tr>
<tr>
<td>🎨 Техники дизайна</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Использование гелей, создание дизайна</td>
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
<li>💅 Научитесь наращивать ногти с учетом их формы и длины</li>
<li>🎯 Восстанавливать поврежденные ногти безопасными методами</li>
<li>🧰 Обеспечивать безопасность и качество своей работы</li>
<li>🎨 Создавать креативные дизайны для разных клиентов</li>
<li>🌸 Осваивать техники работы с гелевыми покрытиями</li>
<li>📋 Подготовить портфолио для дальнейшего трудоустройства</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы повышения квалификации по маникюру</div>
<h2>Курсы повышения квалификации по маникюру</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 700 ₽</span> <span class="rating-count"><del>9 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в ближайшие курсы</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4, 3 этаж</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы повышения квалификации по маникюру»</strong> в <strong>Пензе</strong> — отличный выбор для мастеров, стремящихся улучшить свои навыки в области маникюра и ухода за ногтями.</p>
<p>Программа охватывает основные техники выполнения маникюра, включая френч и SPA-процедуры.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит для профессионалов, желающих поработать над качеством своей работы и увеличить поток клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классический, аппаратный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Френч, SPA-процедуры, уход за ногтями</td>
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
<li>🎯 Создавать идеальное покрытие и работать с гель-лаком</li>
<li>🧰 Проводить безопасное выравнивание ногтевой пластины</li>
<li>🎨 Осваивать французский маникюр и дизайн</li>
<li>🌸 Укреплять ногтевую пластину с помощью эффективных процедур</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 600 ₽</span> <span class="rating-count"><del>13 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> — на всё обучение в акционных периодах.</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4, 3 этаж</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Пензе</strong> — идеальный выбор для тех, кто хочет освоить профессию мастера педикюра и повысить свои навыки в индустрии красоты.</p>
<p>Программа охватывает такие техники, как классический, аппаратный, СПА и экспресс-педикюр с максимальным количеством практических занятий на реальных клиентах.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки и повысить свою конкурентоспособность на рынке услуг.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедур</span>
<span><strong>2</strong> недели</span>
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
<td>🔰 Основы ухода</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Анатомия стопы, основы безопасности, диагностика заболеваний</td>
</tr>
<tr>
<td>📈 Техники педикюра</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Классический, аппаратный и комбинированный педикюр</td>
</tr>
<tr>
<td>🎨 SPA-педикюр</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Уходовые процедуры, ароматерапия, массаж ног</td>
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
<li>🎯 Применять SPA-техники для ухода за стопами</li>
<li>🧰 Проводить диагностику проблемных участков ног</li>
<li>🎨 Обрабатывать кутикулу и ухаживать за ногтями</li>
<li>🌸 Гарантировать безопасность и качество своих услуг</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс маникюра для начинающих</div>
<h2>Курс маникюра для начинающих</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 месяц</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 000 ₽</span> <span class="rating-count"><del>16 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках текущей акции</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Пензе</strong> — отличный старт для тех, кто хочет освоить профессию нейл-мастера.</p>
<p>Программа курса охватывает основы маникюра, техники выполнения и безопасные методы работы с клиентами.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Идеально подходит для начинающих и тех, кто стремится изменить сферу работы.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники выполнения классического маникюра</td>
</tr>
<tr>
<td>📈 Аппаратный маникюр</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Безопасность и техника выполнения</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с гель-лаком и техниками дизайна</td>
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
<li>💅 Выполнять классический маникюр</li>
<li>🔧 Овладевать основами аппаратного маникюра</li>
<li>🎨 Создавать уникальные дизайны на ногтях</li>
<li>🧰 Безопасно работать с инструментами</li>
<li>🤝 Общаться с клиентами и строить доверительные отношения</li>
<li>📜 Получить сертификат специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер маникюра</div>
<h2>Мастер маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">56 ак. часов</span> (3–7 недель)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 700 ₽</span> <span class="rating-count"><del>31 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4, 3 этаж</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Пензе</strong> — идеальный старт для начинающих и опытных специалистов в beauty-сфере.</p>
<p>Программа включает классические и современные техники маникюра, восстановление ногтей и дизайн.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит тем, кто хочет повысить квалификацию или начать новую карьеру.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>14</strong> уроков</span>
<span><strong>7</strong> процедур</span>
<span><strong>3–7</strong> недель</span>
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
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический маникюр, аппаратный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Ремонт ногтей, выравнивание, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварель, аэропуффинг, геометрия, декоративные элементы</td>
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
<li>💅 Выполнять классический, аппаратный и комбинированный маникюр</li>
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 Создавать разнообразные дизайны с использованием различных техник</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Получить диплом, подтверждающий квалификацию специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 300 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 400 ₽</span> <span class="rating-count"><del>50 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на курс в текущий момент.</p>
<p><strong>📍 Адрес:</strong> г. Пенза, ул. Свердлова, д. 4, 3 этаж</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78412458925">+7 (8412) 45-89-25</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">penza.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Пензе</strong> — отличный выбор для начинающих мастеров и тех, кто хочет расширить свои навыки в маникюрном сервисе.</p>
<p>Программа охватывает салонный маникюр, эстетический педикюр, ремонт и дизайн ногтей любой сложности.</p>
<p>За <span class="price-highlight">88 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, стремящихся повысить свою квалификацию и заработать в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>88</strong> ак. часов</span>
<span><strong>22</strong> урока</span>
<span><strong>14</strong> процедур</span>
<span><strong>2-3</strong> месяца</span>
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
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, аппаратный, комбинированный маникюр и покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, ремонт, выравнивание, френч</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Декоративные элементы, акварельная техника, геометрия, аэропуффинг</td>
</tr>
<tr>
<td>🦶 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический, европейский, аппаратный педикюр</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Создание формы, восстановление, наращивание длины ногтей</td>
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
<li>💅 Выполнять маникюр и педикюр любой сложности</li>
<li>🎯 Создавать сложные дизайны ногтей</li>
<li>🧰 Упражняться в наращивании и ремонте ногтей</li>
<li>🎨 Осваивать акварельные техники в дизайне</li>
<li>🌸 Проводить SPA-маникюр и педикюр</li>
<li>📋 Получить диплом подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://penza.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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