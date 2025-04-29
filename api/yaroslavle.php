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
<!--startblok-->
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
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">Курсы градиентного маникюра</a></td>
<td>Создание градиентных переходов и техника колористики</td>
<td>1 неделя</td>
<td>4</td>
<td>3</td>
<td>1</td>
<td>Сертификат</td>
<td>4 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">Курс маникюра одной фрезой</a></td>
<td>Ускорение маникюра с использованием фрезы</td>
<td>1 день</td>
<td>4</td>
<td>2</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>4 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">Курсы повышения квалификации по маникюру</a></td>
<td>Работа с современными техниками маникюра</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат специалиста</td>
<td>5 900 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">Мастер маникюра</a></td>
<td>Классические и современные техники маникюра</td>
<td>3–7 недель</td>
<td>56</td>
<td>14</td>
<td>7</td>
<td>Диплом специалиста</td>
<td>14 900 ₽</td>
<td>50%</td>
<td>4 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">Мастер по наращиванию ногтей</a></td>
<td>Наращивание ногтей гелем и акрилом</td>
<td>1–3 месяца</td>
<td>72</td>
<td>18</td>
<td>11</td>
<td>Диплом специалиста</td>
<td>24 400 ₽</td>
<td>50%</td>
<td>4 000 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание ногтей</td>
<td>2–3 месяца</td>
<td>88</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>23 200 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курсы наращивания ногтей акрилом и полигелем</a></td>
<td>Работа с акрилом и полигелем</td>
<td>1 месяц</td>
<td>32</td>
<td>8</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>10 300 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курсы педикюра</a></td>
<td>Эстетический педикюр с различными техниками</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>6 800 ₽</td>
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
<!-- Главная карточка "Курсы градиентного маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы градиентного маникюра</div>
<h2>Курсы градиентного маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span> (1 неделя)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 800 ₽</span> <span class="rating-count"><del>9 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в особые периоды</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/courses-gradient-manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы градиентного маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы градиентного маникюра»</strong> в <strong>Ярославле</strong> — идеальное предложение для начинающих и действующих nail-мастеров, желающих освоить градиентные техники.</p>
<p>Программа включает изучение колористики, техники создания цветовых переходов и работу на реальных клиентах.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практический опыт и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс поможет вам стать востребованным мастером в nail-индустрии и расширить спектр услуг.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span> <span><strong>3</strong> урока</span> <span><strong>1</strong> процедура</span> <span><strong>1 неделя</strong></span>
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
<td>🔰 Основы колористики</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Искусство сочетания оттенков</td>
</tr>
<tr>
<td>🎨 Техника переходов</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Создание плавных цветовых градиентов</td>
</tr>
<tr>
<td>💅 Практика на моделях</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Отработка навыков на реальных клиентах</td>
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
<li>🎨 Создавать градиентные переходы</li>
<li>💅 Сочетать оттенки для колор-переходов</li>
<li>🧰 Выбирать актуальную палитру для маникюра</li>
<li>🌈 Работать с цветами на практике на клиентах</li>
<li>✨ Создавать выразительные градиентные композиции</li>
<li>🌸 Расширить спектр предлагаемых услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс маникюра одной фрезой" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс маникюра одной фрезой</div>
<h2>Курс маникюра одной фрезой</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 800 ₽</span> <span class="rating-count"><del>9 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в определённый период</p>
<p><strong>📍 Адрес:</strong> Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра одной фрезой" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра одной фрезой»</strong> в <strong>Ярославле</strong> — идеальный выбор для начинающих мастеров, желающих ускорить процесс маникюра с помощью современной техники.</p>
<p>Программа охватывает использование фрезы для быстрого маникюра, делая акцент на техникe обработки ногтей.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт тем, кто хочет увеличить скорость работы и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
<span><strong>3</strong> процедур</span>
<span><strong>1 день</strong></span>
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
<td>🔰 Основы техники</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Выбор фрезы, подготовка инструмента</td>
</tr>
<tr>
<td>💨 Ускоренный маникюр</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Экспресс-маникюр за 12 минут</td>
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
<li>💅 Подбирать фрезы для разных задач</li>
<li>⏱️ Выполнять маникюр за 12 минут</li>
<li>💼 Обеспечивать комфорт во время процедуры</li>
<li>📈 Увеличивать клиентскую базу</li>
<li>🧰 Осваивать аппаратный маникюр</li>
<li>🎨 Развивать свои профессиональные навыки</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 900 ₽</span> <span class="rating-count"><del>11 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в сезон специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы повышения квалификации по маникюру»</strong> в <strong>Ярославле</strong> — идеальный выбор для тех, кто хочет улучшить свои навыки в маникюре.</p>
<p>Программа включает в себя работу с современными техниками, моделирование блик и покрытие под кутикулу.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит как начинающим, так и опытным мастерам для повышения квалификации и расширения своих умений.</p>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с инструментами, макассирование, подготовка ногтей</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Классические и современные техники, выравнивание</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Моделирование блик и покрытия под кутикулу</td>
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
<li>💅 Моделировать идеальные блики</li>
<li>🎯 Работать с разными маникюрными техниками</li>
<li>🧰 Восстанавливать ногтевую пластину</li>
<li>🎨 Выполнять покрытие под кутикулу</li>
<li>🌸 Работать на реальных клиентах</li>
<li>📋 Получать сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 900 ₽</span> <span class="rating-count"><del>29 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в течение ограниченного периода.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Ярославле</strong> — отличный старт для начинающих мастеров и тех, кто хочет повысить свою квалификацию.</p>
<p>Программа охватывает классические и современные техники маникюра, включая гель-лак и уникальный дизайн.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеален для начинающих и тех, кто хочет расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>Классический, машинный, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Ремонт ногтей, выравнивание, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Тонкие линии, акварель, геометрия, аэропуффинг</td>
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
<li>💅 Делать классический и комбинированный маникюр</li>
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Выполнять ремонт ногтей и выравнивание</li>
<li>🎨 Создавать уникальный дизайн ногтей</li>
<li>🌸 Проводить SPA-маникюр и уходовые процедуры</li>
<li>📋 Подтвердить квалификацию дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер по наращиванию ногтей</div>
<h2>Мастер по наращиванию ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">72 ак. часа</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 400 ₽</span>
<span class="rating-count"><del>48 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках специальных акций</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Ярославле</strong> — идеальный вариант для начинающих и опытных мастеров, желающих повысить свою квалификацию и расширить спектр услуг.</p>
<p>Программа охватывает техники наращивания ногтей гелем и акрилом, а также основы дизайна для создания уникальных работ.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подойдет тем, кто хочет начать карьеру в nail-индустрии или улучшить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>72</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>11</strong> процедур</span>
<span><strong>1-3</strong> месяца</span>
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
<td>🔰 Маникюр для начинающих</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, машинный, комбинированный маникюр, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Наращивание ногтей гелем</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Основы наращивания, виды наращивания гелем, дизайн в наращивании</td>
</tr>
<tr>
<td>🎨 Наращивание ногтей акрилом и полигелем</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акриловое и полигелевое моделирование, техника "одной капли"</td>
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
<li>🔥 Осваивать техники наращивания ногтей гелем и акрилом</li>
<li>🎨 Создавать уникальный дизайн ногтей</li>
<li>🛠️ Проводить коррекцию и ремонт ногтей клиента</li>
<li>📋 Подтверждать квалификацию дипломом 4-го разряда</li>
<li>🌟 Работать с реальными клиентами и развивать портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы аппаратного маникюра и педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы аппаратного маникюра и педикюра</div>
<h2>Курсы аппаратного маникюра и педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 700 ₽</span> <span class="rating-count"><del>11 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в ограниченный период.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы аппаратного маникюра и педикюра»</strong> в <strong>Ярославле</strong> — идеальный выбор для тех, кто хочет получить профессию в области красоты.</p>
<p>Программа охватывает современный аппаратный маникюр и педикюр, включая практику на реальных клиентах.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>C курсом можно начать карьеру или повысить квалификацию в бьюти-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>3</strong> урока</span>
<span><strong>3</strong> процедуры</span>
<span><strong>1 неделя</strong></span>
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
<td>🔰 Основы аппаратного маникюра</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Маникюрные машины, инструменты, обработка</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы машинного педикюра и его особенности</td>
</tr>
<tr>
<td>🎨 Практика на клиентах</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Отработка техник на реальных моделях</td>
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
<li>💅 Применять маникюрные аппараты и инструменты</li>
<li>🎯 Выполнять аппаратный маникюр и педикюр высокого уровня</li>
<li>🧰 Правильно обрабатывать ногтевую пластину</li>
<li>🎨 Создавать качественное портфолио с работами</li>
<li>🌸 Обеспечивать стерильность и безопасность процесса</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 900 ₽</span> <span class="rating-count"><del>11 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> при ранней записи</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/nail-design" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Ярославле</strong> — идеальный выбор для начинающих мастеров и тех, кто хочет расширить свои навыки в nail-дизайне.</p>
<p>Программа охватывает популярные техники, включая акварель, вензеля, френч и тату.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для всех желающих повысить свою квалификацию и начать карьеру в индустрии красоты.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники акварели, вензели</td>
</tr>
<tr>
<td>📈 Дизайн</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Элементы декора, стиль тату</td>
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
<li>💅 Создавать актуальный nail-дизайн</li>
<li>🎨 Работать с акварельной техникой</li>
<li>🧰 Использовать элементы декора в дизайне</li>
<li>🌈 Комбинировать различные техники маникюра</li>
<li>💼 Повышать цену за услуги</li>
<li>📋 Получать диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс росписи ногтей</div>
<h2>Курс росписи ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 800 ₽</span> <span class="rating-count"><del>9 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период акции на обучение</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/drawing_nails" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/drawing_nails" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс росписи ногтей»</strong> в <strong>Ярославле</strong> — идеальный выбор для желающих освоить искусство росписи ногтей.</p>
<p>На курсе изучаются различные техники рисования узоров, вензелей и их сочетания с другими стилями маникюра.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои навыки в дизайне ногтей.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>3</strong> процедуры</span>
<span><strong>1 неделя</strong></span>
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
<td>🔰 Основы росписи</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Техники рисования узоров и вензелей</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Работа на моделях и отработка навыков</td>
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
<li>💅 Делать маникюр с росписью ногтей</li>
<li>🎨 Создавать уникальные узоры и вензели</li>
<li>🏆 Декорировать вензелями маникюр любого типа</li>
<li>👍 Работать с реальными клиентами</li>
<li>✨ Собрать портфолио для соц. сетей</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/drawing_nails" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>13 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в период акции</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Ярославле</strong> — идеальный выбор для желающих овладеть навыками эстетического педикюра.</p>
<p>Вы изучите классическую, аппаратную, СПА- и экспресс-техники педикюра.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для новичков, так и для тех, кто хочет улучшить свои навыки в педикюре.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> отработки</span>
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
<td>🔰 Введение</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы и техника классического педикюра</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Использование аппаратуры, работа с фрезами</td>
</tr>
<tr>
<td>🎨 Комбинированный педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Сочетание классических и аппаратных техник</td>
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
<li>💅 Выполнять эстетический педикюр</li>
<li>🎯 Работать с проблемными ногтями и стопами</li>
<li>🧰 Применять аппаратные техники</li>
<li>🎨 Создавать комбинированный педикюр</li>
<li>🌸 Подбирать средства для ухода за ногами</li>
<li>📋 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Возможна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>13 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на все обучение, специально для вас!</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Ярославле</strong> — идеальный выбор для тех, кто хочет быстро и эффективно освоить искусство наращивания ногтей.</p>
<p>Здесь вы изучите современные техники и лучшие практики в nail-индустрии.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> практические отработки</span>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Материалы, инструмент, моделирование формы</td>
</tr>
<tr>
<td>📈 Виды наращивания гелем</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Сравнение геля и акрила, методы наращивания</td>
</tr>
<tr>
<td>🎨 Дизайн в наращивании</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Создание концептуального дизайна и фактуры</td>
</tr>
<tr>
<td>🔧 Ремонт искусственного ногтя</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Удаление и коррекция повреждений</td>
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
<li>💅 Быстро и качественно наращивать ногти</li>
<li>🎯 Применять актуальные техники nail-наращивания</li>
<li>🧰 Использовать специальное оборудование для наращивания</li>
<li>🎀 Деликатно снимать типсы и покрытие</li>
<li>🌟 Декорировать ногти дополнительными элементами</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы маникюра для начинающих" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы маникюра для начинающих</div>
<h2>Курсы маникюра для начинающих</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 месяц</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>13 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> во время акций</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы маникюра для начинающих»</strong> в <strong>Ярославле</strong> — идеальный старт для тех, кто хочет освоить профессию в beauty-сфере.</p>
<p>Программа включает классические и современные техники маникюра, включая гель-лак и комбинированную технику.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс отлично подходит для начинающих и тех, кто хочет углубить свои знания и навыки в маникюре.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
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
<td>🔰 Базовый маникюр</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Обработка, уход, классика</td>
</tr>
<tr>
<td>📈 Аппаратный маникюр</td>
<td><span class="price-highlight">9 ч / 2 урока</span></td>
<td>Техника, безопасность, выбор фрез</td>
</tr>
<tr>
<td>🎨 Дизайн и покрытие</td>
<td><span class="price-highlight">9 ч / 2 урока</span></td>
<td>Гель-лак, создание дизайна</td>
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
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Корректировать форму ногтей и обрабатывать кутикулу</li>
<li>🎨 Создавать разнообразные дизайны ногтей</li>
<li>🌸 Осуществлять уходовые процедуры для рук</li>
<li>📋 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы наращивания ногтей акрилом и полигелем" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы наращивания ногтей акрилом и полигелем</div>
<h2>Курсы наращивания ногтей акрилом и полигелем</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 300 ₽</span> <span class="rating-count"><del>20 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в условиях текущих акционных предложений</p>
<p><strong>📍 Адрес:</strong> Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/nail_extension" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей акрилом и полигелем»</strong> в <strong>Ярославле</strong> — идеальный вариант для тех, кто хочет освоить востребованную профессию.</p>
<p>Программа включает обучение техникам акрилового и полигелевого наращивания, декорированию и ремонту искусственных ногтей.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию в nail-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>4</strong> отработки на практике</span>
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
<td>🔰 Основы акрилового наращивания</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Технология наращивания, форма ногтей</td>
</tr>
<tr>
<td>📈 Полигелевое моделирование</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Использование PolyGel, техника "одной капли"</td>
</tr>
<tr>
<td>🎨 Дизайн и декор</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Объемный акриловый дизайн, декорирование</td>
</tr>
<tr>
<td>🛠️ Уход и коррекция</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Снятие, коррекция наращения</td>
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
<li>💅 Применять технику акрилового и полигелевого наращивания</li>
<li>🎨 Создавать интересные дизайны и декоры ногтей</li>
<li>🛠️ Ремонтировать и поддерживать искусственные ногти</li>
<li>📋 Добавлять различные эффекты в наращивание</li>
<li>🔧 Проводить коррекцию и снятие наращенных ногтей</li>
<li>🌟 Формировать качественное портфолио работ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 200 ₽</span> <span class="rating-count"><del>46 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках актуальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Ярославле</strong> — это отличный старт для начинающих мастеров и профессионалов, желающих расширить свои навыки в области ногтевого сервиса.</p>
<p>Программа включает салонный маникюр, эстетический педикюр, реконструкцию и сложный дизайн ногтей.</p>
<p>За <span class="price-highlight">88 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто уже работает в индустрии красоты и хочет повысить квалификацию.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический маникюр, машинный, комбинированная техника, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Нанесение и снятие покрытия, ремонт ногтя, выравнивание, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Тонкие линии, акварельная техника, декоративные элементы, геометрия, аэропуффинг</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Обрезная и европейская техники, типы аппаратного педикюра</td>
</tr>
<tr>
<td>🚀 Наращивание</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Основы наращивания, виды наращивания гелем, дизайн в наращивании</td>
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
<li>💅 Выполнять маникюр и педикюр различных техник</li>
<li>🎯 Снимать и наносить покрытия, делать ремонт ногтей</li>
<li>🧰 Осваивать различные техники дизайна ногтей</li>
<li>🌸 Проводить SPA-маникюр и уходовые процедуры</li>
<li>📋 Профессионально обрабатывать стопы и пальцы ног</li>
<li>🎓 Подтверждение квалификации дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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