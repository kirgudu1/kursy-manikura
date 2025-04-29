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
<td><a href="https://cheboksary.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">Мастер маникюра и педикюра</a></td>
<td>Маникюр, педикюр, SPA-процедуры</td>
<td>2-4 месяца</td>
<td>104</td>
<td>26</td>
<td>13</td>
<td>Диплом специалиста</td>
<td>28 700 ₽</td>
<td>50%</td>
<td>4 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://cheboksary.ecolespb.ru/manicure-school/pedicure" target="_blank">Курс педикюра</a></td>
<td>Классический, аппаратный, SPA-педикюр</td>
<td>2 месяца</td>
<td>40</td>
<td>10</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>14 100 ₽</td>
<td>50%</td>
<td>4 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://cheboksary.ecolespb.ru/manicure-school/nail-extensions" target="_blank">Курс наращивания ногтей</a></td>
<td>Наращивание, коррекция ногтей</td>
<td>1-2 месяца</td>
<td>56</td>
<td>21</td>
<td>8</td>
<td>Сертификат</td>
<td>24 700 ₽</td>
<td>50%</td>
<td>4 200 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://cheboksary.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Все виды маникюра и педикюра</td>
<td>2-5 месяцев</td>
<td>176</td>
<td>40</td>
<td>21</td>
<td>Диплом специалиста</td>
<td>51 900 ₽</td>
<td>50%</td>
<td>5 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://cheboksary.ecolespb.ru/manicure-school/nail-art" target="_blank">Курс дизайна ногтей</a></td>
<td>Создание уникальных дизайнов ногтей</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>7 700 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://cheboksary.ecolespb.ru/manicure-school/manicure-master" target="_blank">Курсы мастера маникюра</a></td>
<td>Техники маникюра, в том числе гель-лак</td>
<td>1-3 месяца</td>
<td>64</td>
<td>16</td>
<td>8</td>
<td>Диплом мастера</td>
<td>18 700 ₽</td>
<td>50%</td>
<td>3 200 ₽/мес.</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">28 700 ₽</span> <span class="rating-count"><del>57 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Чебоксары, ул. Зои Яковлевой, д. 54</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78352480548">+7 (8352) 48-05-48</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://cheboksary.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">cheboksary.ecolespb.ru</a></p>
</div>
<a href="https://cheboksary.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и педикюра»</strong> в <strong>Чебоксарах</strong> — это возможность начать карьеру в индустрии красоты, освоив востребованные навыки маникюра и педикюра.</p>
<p>Вы изучите техники гель-лака, SPA-педикюра и работу с профессиональными инструментами.</p>
<p>За <span class="price-highlight">104 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
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
<td>🔰 Маникюр</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический маникюр, аппаратный маникюр, SPA-маникюр</td>
</tr>
<tr>
<td>📈 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический педикюр, аппаратный, дисковый, экспресс-педикюр</td>
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
<li>💅 Выполнять различные виды маникюра и педикюра</li>
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🧰 Работать с гель-лаком и заботиться о здоровье ногтевой пластины</li>
<li>🌼 Проводить процедуры SPA-маникюра и педикюра</li>
<li>📋 Подтверждать свою квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://cheboksary.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 100 ₽</span> <span class="rating-count"><del>28 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Чебоксары, ул. Зои Яковлевой, д. 54</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78352480548">+7 (8352) 48-05-48</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://cheboksary.ecolespb.ru/manicure-school/pedicure" target="_blank">cheboksary.ecolespb.ru</a></p>
</div>
<a href="https://cheboksary.ecolespb.ru/manicure-school/pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Чебоксарах</strong> — это идеальное решение для тех, кто хочет развиваться в индустрии красоты.</p>
<p>В рамках программы изучаются профессиональные техники, такие как SPA-педикюр, коррекция формы и уход.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практическое обучение на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для опытных мастеров, желающих повысить свою квалификацию.</p>
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
<td>🔰 Классический педикюр</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Обработка кутикулы, уходовые средства</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">8 ч / 2 уроки</span></td>
<td>Технология выполнения аппаратом, фрезы</td>
</tr>
<tr>
<td>🎨 Дизайн и покрытие</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Экспресс-педикюр, френч, гель-лак</td>
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
<li>💅 Правильно обрабатывать кутикулу и ногти</li>
<li>🎯 Выполнять аппаратный педикюр</li>
<li>🌸 Применять различные техники педикюра для удовлетворения потребностей клиентов</li>
<li>🎨 Создавать стильные образы и дизайн ногтей</li>
<li>📋 Получить диплом специалиста по окончанию курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://cheboksary.ecolespb.ru/manicure-school/pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">56 ак. часов</span> (1–2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 700 ₽</span> <span class="rating-count"><del>49 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в течение определенного периода</p>
<p><strong>📍 Адрес:</strong> г. Чебоксары, ул. Зои Яковлевой, д. 54</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78352480548">+7 (8352) 48-05-48</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://cheboksary.ecolespb.ru/manicure-school/nail-extensions" target="_blank">cheboksary.ecolespb.ru</a></p>
</div>
<a href="https://cheboksary.ecolespb.ru/manicure-school/nail-extensions" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс наращивания ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс наращивания ногтей»</strong> в <strong>Чебоксарах</strong> — идеальный выбор для тех, кто хочет стать востребованным специалистом в ногтевом сервисе.</p>
<p>Программа включает обучение наращиванию, коррекции и ремонту ногтей с использованием современных материалов.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практические навыки на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>21</strong> уроков</span>
<span><strong>8</strong> процедур</span>
<span><strong>1–2</strong> месяца</span>
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
<td><span class="price-highlight">16 ч / 5 уроков</span></td>
<td>Наращивание на нижние и верхние формы, работа с гелем</td>
</tr>
<tr>
<td>📈 Современные техники</td>
<td><span class="price-highlight">16 ч / 5 уроков</span></td>
<td>Коррекция и ремонт ногтей, сложные формы</td>
</tr>
<tr>
<td>🎨 Дизайн и френч</td>
<td><span class="price-highlight">24 ч / 11 уроков</span></td>
<td>Выкладка френча, архитектура ногтевого ложа</td>
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
<li>💅 Научитесь проводить наращивание ногтей на нижние и верхние формы</li>
<li>🎯 Освоите работу с гелем и полигелем</li>
<li>🧰 Выполнять корректировку и ремонт ногтей</li>
<li>🎨 Создавать идеальную выкладку френча и сложные формы</li>
<li>🌟 Разрабатывать портфолио с качественными работами</li>
<li>📋 Получите сертификат, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://cheboksary.ecolespb.ru/manicure-school/nail-extensions" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-5 месяцев</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 800 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">51 900 ₽</span> <span class="rating-count"><del>103 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> действующая на данный момент</p>
<p><strong>📍 Адрес:</strong> г. Чебоксары, ул. Зои Яковлевой, д. 54</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78352480548">+7 (8352) 48-05-48</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://cheboksary.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">cheboksary.ecolespb.ru</a></p>
</div>
<a href="https://cheboksary.ecolespb.ru/manicure-school/programm-nail-service-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Чебоксарах</strong> — идеальный выбор для начинающих и действующих мастеров, желающих повысить квалификацию.</p>
<p>Обучение охватывает классические и современные техники маникюра и педикюра, включая наращивание ногтей и дизайн.</p>
<p>За <span class="price-highlight">176 ак. часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс открывает перспективы трудоустройства в салонах и частной практике.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>Классический, аппаратный, Spa-маникюр и дизайн ногтей</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, стили тату и акварель, уникальный френч</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический, аппаратный, дисковый, экспресс-педикюр и покрытие</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем и полигелем, моделирование на формах</td>
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
<li>🔧 Уметь выполнять наращивание ногтей с использованием различных материалов</li>
<li>🧴 Проводить SPA-уход за кожей рук и ног</li>
<li>📋 Работать с клиентами и планировать свое время</li>
<li>🏆 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://cheboksary.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 700 ₽</span> <span class="rating-count"><del>15 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на данный момент</p>
<p><strong>📍 Адрес:</strong> Чебоксары, ул. Зои Яковлевой, д. 54</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78352480548">+7 (8352) 48-05-48</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://cheboksary.ecolespb.ru/manicure-school/nail-art" target="_blank">cheboksary.ecolespb.ru</a></p>
</div>
<a href="https://cheboksary.ecolespb.ru/manicure-school/nail-art" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Чебоксарах</strong> — идеальный выбор для тех, кто хочет научиться создавать уникальные дизайны ногтей и развивать свои навыки в индустрии красоты.</p>
<p>Вы изучите техники акварели, вензелей, эффект хрустальных камней и стиль тату, а также уникальные варианты френча.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию в nail-арте.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы дизайна ногтей, техники акварели</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Вензеля, эффект хрустальных камней</td>
</tr>
<tr>
<td>🎨 Творческий</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Стиль тату и уникальный френч</td>
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
<li>💅 Создавать более 20 уникальных дизайнов ногтей</li>
<li>🎯 Осваивать различные техники акварели и вензелей</li>
<li>🧰 Применять страз и фольгу в декорировании</li>
<li>🎨 Прорабатывать стиль тату и уникальный френч</li>
<li>🌸 Использовать эффект хрустальных камней</li>
<li>📋 Подтвердить квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://cheboksary.ecolespb.ru/manicure-school/nail-art" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часа</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 700 ₽</span> <span class="rating-count"><del>37 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение на этом курсе</p>
<p><strong>📍 Адрес:</strong> Чебоксары, ул. Зои Яковлевой, д. 54</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78352480548">+7 (8352) 48-05-48</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://cheboksary.ecolespb.ru/manicure-school/manicure-master" target="_blank">cheboksary.ecolespb.ru</a></p>
</div>
<a href="https://cheboksary.ecolespb.ru/manicure-school/manicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы мастера маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы мастера маникюра»</strong> в <strong>Чебоксарах</strong> — идеальный выбор для тех, кто хочет получить навыки работы в индустрии красоты.</p>
<p>Программа включает изучение техники маникюра, включая гель-лак, френч и дизайн.</p>
<p>За <span class="price-highlight">64 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часов</span> <span><strong>16</strong> уроков</span> <span><strong>8</strong> процедур</span> <span><strong>1-3</strong> месяца</span>
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
<td>Строение ногтевой пластины, классический и европейский маникюр</td>
</tr>
<tr>
<td>🛠️ Аппаратный маникюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Комбинированный маникюр, работа с аппаратом</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">20 ч / 8 уроков</span></td>
<td>Различные техники дизайна, SPA-маникюр</td>
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
<li>💅 Выполнять классический, европейский и аппаратный маникюр</li>
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Проводить ремонт и укрепление ногтей</li>
<li>🎨 Создавать уникальные дизайны маникюра</li>
<li>🌸 Проводить SPA-маникюр и уходовые процедуры</li>
<li>📋 Общаться с клиентами и продавать свои услуги</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://cheboksary.ecolespb.ru/manicure-school/manicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
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