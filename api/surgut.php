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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курсы маникюра для начинающих</a></td>
<td>Классический и аппаратный маникюр</td>
<td>1 месяц</td>
<td>24</td>
<td>6</td>
<td>4</td>
<td>Сертификат</td>
<td>10 300 ₽</td>
<td>50%</td>
<td>Обсуждается с менеджером</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">Мастер маникюра</a></td>
<td>Классический, аппаратный маникюр, дизайн, гель-лак</td>
<td>3–7 недель</td>
<td>56</td>
<td>14</td>
<td>7</td>
<td>Диплом специалиста</td>
<td>21 900 ₽</td>
<td>50%</td>
<td>3 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курсы педикюра</a></td>
<td>Классический, аппаратный, SPA-педикюр</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>2</td>
<td>Сертификат</td>
<td>8 700 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Техники наращивания ногтей, дизайн</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>9 400 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/nail-design" target="_blank">Курс дизайна ногтей</a></td>
<td>Акварель, френч, уникальный дизайн</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>6 700 ₽</td>
<td>50%</td>
<td>2 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">Курс аппаратного маникюра и педикюра</a></td>
<td>Современные техники маникюра и педикюра</td>
<td>3-7 недель</td>
<td>12</td>
<td>4</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>8 300 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание</td>
<td>2–3 месяца</td>
<td>88</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>31 200 ₽</td>
<td>50%</td>
<td>3 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">Мастер по наращиванию ногтей</a></td>
<td>Наращивание гелем и акрилом</td>
<td>1-3 месяца</td>
<td>72</td>
<td>18</td>
<td>11</td>
<td>Диплом специалиста</td>
<td>33 200 ₽</td>
<td>50%</td>
<td>3 700 ₽/мес.</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
<!--startblok-->
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы повышения квалификации по маникюру</div>
<h2>Курсы повышения квалификации по маникюру</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 300 ₽</span> <span class="rating-count"><del>16 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период максимальных акций</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, д. 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462360051">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы повышения квалификации по маникюру»</strong> в <strong>Сургуте</strong> — отличная возможность для тех, кто хочет повысить свои навыки в маникюре.</p>
<p>Программа включает в себя классические и современные техники маникюра, которые позволят вам развивать свою карьеру.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Идеальный выбор как для новичков, так и для опытных специалистов.</p>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классический маникюр, выравнивание покрытия</td>
</tr>
<tr>
<td>📈 Французский маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техника выполнения французского маникюра</td>
</tr>
<tr>
<td>🎨 Спа-маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Уходовые процедуры для рук и ногтей</td>
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
<li>💅 Уход за ногтями и руками</li>
<li>🎯 Выполнение красивого маникюра</li>
<li>🧰 Освоение французского маникюра</li>
<li>🌼 Проведение спа-процедур для клиентов</li>
<li>📋 Расширение спектра предлагаемых услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 900 ₽</span> <span class="rating-count"><del>43 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, д. 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462151149">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Сургуте</strong> — это отличный старт для желающих освоить востребованную профессию в beauty-сфере.</p>
<p>Вы научитесь выполнять классические и современные техники маникюра, включая покрытие гель-лаком и уникальный дизайн.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и начать зарабатывать в индустрии.</p>
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
<td>Классический, аппаратный, комбинированный маникюр, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, выравнивание ногтевой пластины, френч</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Тонкие линии, акварельная техника, геометрия, акваппинг</td>
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
<li>🎯 Работать с гель-лаком для создания качественного покрытия</li>
<li>🧰 Проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 Создавать уникальный дизайн: френч, геометрию, акварель</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Подтвердить свою квалификацию дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>17 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период привлекательных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, д. 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462351149">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Сургуте</strong> — отличный старт для желающих освоить профессию в beauty-индустрии.</p>
<p>Программа охватывает классический, аппаратный, SPA и экспресс-педикюр, давая необходимые навыки для работы.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет улучшить свои навыки в области педикюра.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> отработки</span> <span><strong>2 недели</strong></span>
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
<td>🔰 Основы педикюра</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классический и аппаратный педикюр, работа с инструментами</td>
</tr>
<tr>
<td>📈 SPA и экспресс-педикюр</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники SPA, уходовые процедуры, массаж</td>
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
<li>💅 Делать классический и аппаратный педикюр</li>
<li>🌟 Выполнять SPA-педикюр и массаж</li>
<li>🎯 Работать с современными инструментами и технологиями</li>
<li>🧰 Безопасно устранять повреждения на коже стоп</li>
<li>🎨 Создавать комфорт для клиентов во время процедур</li>
<li>📋 Получить сертификат по завершению курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 400 ₽</span> <span class="rating-count"><del>18 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462151449">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Сургуте</strong> — это отличный выбор для тех, кто хочет освоить профессию в индустрии красоты.</p>
<p>Программа включает изучение техник наращивания ногтей, работу с гелем, создание дизайна и восстановление повреждений.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит начинающим или тем, кто хочет повысить свою квалификацию и развить карьеру в нейл-индустрии.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Формы ногтей, особенности работы с искусственными ногтями</td>
</tr>
<tr>
<td>📈 Виды наращивания гелем</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники наращивания на типсе и на форме</td>
</tr>
<tr>
<td>🎨 Дизайн в наращивании</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Творческие возможности и применение декоративных элементов</td>
</tr>
<tr>
<td>🔧 Ремонт искусственного ногтя</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Безопасное удаление покрытия и исправление дефектов</td>
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
<li>💅 Качественно наращивать ногти</li>
<li>🔍 Восстанавливать повреждения на ногтях</li>
<li>🎉 Применять декор в наращивании</li>
<li>🧰 Работать с профессиональным оборудованием</li>
<li>🎨 Разрабатывать индивидуальный стиль для клиентов</li>
<li>📋 Получать диплом и развивать карьеру в beauty-сфере</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 700 ₽</span> <span class="rating-count"><del>13 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> по специальным предложениям</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, д. 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462260000">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/nail-design" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Дизайн ногтей»</strong> в <strong>Сургуте</strong> — отличный вариант для тех, кто хочет освоить азы нейл-арта и повысить свою квалификацию.</p>
<p>Программа охватывает популярные техники, такие как акварель, вензеля и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет улучшить свои навыки.</p>
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
<td>🎨 Дизайн</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Акварель, вензеля, хрустальные камни</td>
</tr>
<tr>
<td>🌟 Уникальный френч</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техника уникального френча и стиль тату</td>
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
<li>🎯 Выполнять дизайн тонкими линиями</li>
<li>🎨 Использовать различные элементы для декорирования</li>
<li>✏️ Создавать собственный дизайн с уникальными техниками</li>
<li>🌟 Работать с акварельной техникой и мраморным дизайном</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс аппаратного маникюра и педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс аппаратного маникюра и педикюра</div>
<h2>Курс аппаратного маникюра и педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 300 ₽</span> <span class="rating-count"><del>16 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, д. 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462151449">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс аппаратного маникюра и педикюра»</strong> в <strong>Сургуте</strong> — идеальный выбор для тех, кто хочет стать специалистом в области ногтевого сервиса.</p>
<p>Программа включает изучение технологий выполнения маникюра и педикюра, а также работу с современным оборудованием.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет повысить свою квалификацию и уверенно работать с клиентами.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Введение в аппаратный маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Рабочие инструменты, безопасность, техника выполнения</td>
</tr>
<tr>
<td>📈 Выполнение маникюра</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Насадки, обработка ногтей, риски и методы</td>
</tr>
<tr>
<td>🎨 Выполнение педикюра</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Обработка стоп, безопасность, уходовые процедуры</td>
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
<li>💅 Профессионально выполнять аппаратный маникюр</li>
<li>🌟 Создавать качественное покрытие</li>
<li>🧰 Обрабатывать повреждения и риски на ногтях</li>
<li>👣 Проводить безопасные процедуры педикюра</li>
<li>🎯 Работать с клиентами и предоставлять консультации</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Обсуждается с менеджером</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 300 ₽</span> <span class="rating-count"><del>20 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках акций</p>
<p><strong>📍 Адрес:</strong> город Сургут, ул. 30 лет Победы, 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462251449">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы маникюра для начинающих»</strong> в <strong>Сургуте</strong> — идеальный старт для новых специалистов в beauty-индустрии.</p>
<p>В программе рассмотрены классические и современные техники маникюра, включая гель-лак и уход за ногтями.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдёт для начинающих и тех, кто хочет расширить свои навыки в области маникюра.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Классический и аппаратный маникюр</td>
</tr>
<tr>
<td>📈 Техники покрытия</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Гель-лак, дизайн ногтей</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Отработка навыков на реальных клиентах</td>
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
<li>💅 Овладевать классическим и аппаратным маникюром</li>
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Проводить уход за ногтевой пластиной</li>
<li>🎨 Разрабатывать основные дизайны ногтей</li>
<li>🌸 Отрабатывать навыки на моделях</li>
<li>📋 Получать сертификат по окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">31 200 ₽</span> <span class="rating-count"><del>62 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках специальных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, д. 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462151449">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Сургуте</strong> — это идеальный старт для начинающих мастеров и профессионалов, желающих расширить свои навыки в маникюре и педикюре.</p>
<p>Вы изучите салонные процедуры, включая наращивание, дизайн и восстановление ногтей.</p>
<p>За <span class="price-highlight">88 академических часов</span> вы получите практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для опытных мастеров, которые стремятся повысить свою квалификацию и расширить спектр услуг.</p>
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
<td>🔰 Базовый маникюр</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, аппаратный, комбинированный маникюр, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, ремонт ногтя, выравнивание, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Тонкие линии, акварельная техника, декоративные элементы, геометрия, аэропуффинг</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический, аппаратный, комбинированный педикюр</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Основы наращивания, виды наращивания, дизайн в наращивании</td>
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
<li>💅 Выполнять качественный маникюр и педикюр</li>
<li>🎨 Создавать сложные дизайны ногтей и рисовать в различных техниках</li>
<li>🧰 Работать с аппаратным маникюром и снятием покрытия</li>
<li>👣 Проводить педикюрные процедуры на высоком уровне</li>
<li>🌟 Укреплять и наращивать ногти с использованием разных техник</li>
<li>📃 Получить диплом о квалификации специалиста в области ногтевого сервиса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">33 200 ₽</span> <span class="rating-count"><del>66 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в текущий период распродаж</p>
<p><strong>📍 Адрес:</strong> г. Сургут, ул. 30 лет Победы, 44б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73462351149">+7 (3462) 51-14-49</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">surgut.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Сургуте</strong> — отличная возможность для начинающих и опытных мастеров, желающих повысить свою квалификацию и доход.</p>
<p>Программа включает в себя обучение современным техникам наращивания ногтей гелем и акрилом, а также созданию дизайна.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет расширить свои навыки и увеличит клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>🔰 Маникюр</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, аппаратный, комбинированный маникюр, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Наращивание гелем</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Основы, виды, дизайн в наращивании</td>
</tr>
<tr>
<td>🎨 Наращивание акрилом</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Моделирование, наращивание "одной каплей", тренды дизайна</td>
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
<li>💅 Освоите классический, аппаратный и комбинированный маникюр</li>
<li>🎯 Научитесь делать наращивание ногтей гелем и акрилом</li>
<li>🧰 Создавать сложные формы ногтей, включая стилет и балерину</li>
<li>🎨 Овладеете навыками дизайна наращенных ногтей</li>
<li>🌸 Сможете проводить коррекцию и ремонт ногтей клиентов</li>
<li>📋 Подтвердите квалификацию дипломом специалиста 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://surgut.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
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