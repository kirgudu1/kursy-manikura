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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/drawing_nails" target="_blank">Курс росписи ногтей</a></td>
<td>Техники художественной росписи ногтей</td>
<td>1 день</td>
<td>4</td>
<td>2</td>
<td>3</td>
<td>Диплом</td>
<td>4 600 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курс педикюра</a></td>
<td>Классический и аппаратный педикюр</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>6 900 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">Курсы градиентного маникюра</a></td>
<td>Создание градиентного покрытия ногтей</td>
<td>1 день</td>
<td>4</td>
<td>3</td>
<td>1</td>
<td>Диплом специалиста</td>
<td>5 200 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Классический и аппаратный маникюр</td>
<td>1 месяц</td>
<td>24</td>
<td>6</td>
<td>4</td>
<td>Диплом специалиста</td>
<td>9 500 ₽</td>
<td>50%</td>
<td>2 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курс наращивания ногтей гелем</a></td>
<td>Наращивание и ремонт ногтей</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>6 600 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курс наращивания ногтей акрилом и полигелем</a></td>
<td>Работа с акрилом и полигелем</td>
<td>1 месяц</td>
<td>32</td>
<td>8</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>11 200 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">Мастер по наращиванию ногтей</a></td>
<td>Наращивание ногтей и коррекция</td>
<td>1–3 месяца</td>
<td>72</td>
<td>18</td>
<td>11</td>
<td>Диплом специалиста</td>
<td>19 200 ₽</td>
<td>50%</td>
<td>3 200 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание</td>
<td>2–3 месяца</td>
<td>88</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>30 700 ₽</td>
<td>50%</td>
<td>3 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">Курсы аппаратного маникюра и педикюра</a></td>
<td>Техника аппаратного маникюра и педикюра</td>
<td>2 недели</td>
<td>12</td>
<td>3</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>6 000 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
<!--startblok-->
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс росписи ногтей</div>
<h2>Курс росписи ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 600 ₽</span>
<span class="rating-count"><del>9 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в специальный период</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/drawing_nails" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/drawing_nails" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс росписи ногтей»</strong> в <strong>Челябинске</strong> — идеальный выбор для желающих освоить навыки художественной росписи ногтей на практике.</p>
<p>Вы изучите различные техники росписи, включая создание узоров, вензелей и свадебного маникюра.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получат практический опыт и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет повысить свою квалификацию в сфере nail-дизайна.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
<span><strong>3</strong> процедуры</span>
<span><strong>1</strong> день</span>
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
<td>Техника рисования узоров, использование кистей</td>
</tr>
<tr>
<td>🎨 Продвинутые техники</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Создание сложных дизайнов и свадебного маникюра</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Ч чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💅 Рисовать вензеля и узоры на ногтях</li>
<li>🎨 Использовать акриловые краски и специальные кисти</li>
<li>🌸 Офорлять френч с оригинальными элементами</li>
<li>✨ Создавать праздничные дизайны для маникюра</li>
<li>🌟 Работать с реальными клиентами на практике</li>
<li>📋 Получать сертификат по окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/drawing_nails" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>13 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в течение определенного периода</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Челябинске</strong> — идеальное решение для тех, кто хочет освоить искусство педикюра.</p>
<p>Программа охватывает техники от классической и аппаратной до СПА и экспресс-педикюра.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет расширить свои знания в данной области.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Классический педикюр, уход за стопами</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Аппаратный педикюр, SPA-техники</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Экспресс-педикюр, комбинированные техники</td>
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
<li>🎯 Работать с фрезами и инструментами для педикюра</li>
<li>🧰 Осуществлять уход за стопами и ногтевой пластиной</li>
<li>🎨 Применять различные техники педикюра в зависимости от потребностей клиента</li>
<li>🌸 Совмещать инструменты для достижения профессиональных результатов</li>
<li>📋 Получить диплом специалиста после прохождения курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы градиентного маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы градиентного маникюра</div>
<h2>Курсы градиентного маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 200 ₽</span> <span class="rating-count"><del>10 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение, доступная в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/courses-gradient-manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы градиентного маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы градиентного маникюра»</strong> в <strong>Челябинске</strong> — уникальная возможность изучить технику градиентного маникюра всего за одно занятие.</p>
<p>В программе курса — работа с градиентными покрытиями, использование гель-лаков и освоение необходимых инструментов.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для новичков, так и для тех, кто хочет расширить свои навыки в маникюре.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>3</strong> урока</span>
<span><strong>1</strong> процедура</span>
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
<td>🔰 Основы градиентного маникюра</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Техника плавного перехода цветов, использование инструментов</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Создание градиента на ногтях с помощью гель-лака</td>
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
<li>💅 Выполнять градиентное покрытие ногтей</li>
<li>🎨 Создавать интересные переходы оттенков</li>
<li>🖌️ Работать с цветами и колористическими приемами</li>
<li>📋 Использовать профессиональные инструменты и материалы</li>
<li>🌈 Подбирать актуальные цвета для клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (4 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 500 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> данная акция действует регулярно!</p>
<p><strong>📍 Адрес:</strong> Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Челябинске</strong> — это идеальный старт для тех, кто хочет войти в индустрию красоты.</p>
<p>Программа охватывает основные техники маникюра, педикюра и покрытие ногтей.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет освежить свои знания и повысить квалификацию.</p>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Классический и аппаратный маникюр, работа с инструментами</td>
</tr>
<tr>
<td>📈 Педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы педикюра, уход за ногами</td>
</tr>
<tr>
<td>🎨 Гель-лак</td>
<td><span class="price-highlight">10 ч / 4 урока</span></td>
<td>Нанесение и снятие гель-лака, создание дизайна</td>
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
<li>💅 Владеть основами маникюра и педикюра</li>
<li>🎯 Работать с гель-лаком и выполнять качественное покрытие</li>
<li>🧰 Осуществлять уходовые процедуры для ногтей</li>
<li>🎨 Использовать различные техники дизайна</li>
<li>🌸 Работать с инструментами согласно требованиям безопасности</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс наращивания ногтей гелем" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс наращивания ногтей гелем</div>
<h2>Курс наращивания ногтей гелем</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 600 ₽</span> <span class="rating-count"><del>13 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс наращивания ногтей гелем»</strong> в <strong>Челябинске</strong> — подходит для начинающих, желающих овладеть востребованной профессией в beauty-индустрии.</p>
<p>Программа включает изучение основ наращивания, техники работы с гелем и декоративными элементами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс станет отличным стартом для тех, кто хочет начать карьеру в мастерах ногтевого сервиса.</p>
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
<td>🔰 Основы наращивания</td>
<td><span class="price-highlight">4 ак. часа</span></td>
<td>Материалы, инструменты, свойства натурального ногтя</td>
</tr>
<tr>
<td>📈 Виды наращивания гелем</td>
<td><span class="price-highlight">4 ак. часа</span></td>
<td>Техника выкладывания, микрокоррекция</td>
</tr>
<tr>
<td>🎨 Дизайн в наращивании</td>
<td><span class="price-highlight">4 ак. часа</span></td>
<td>Декорирование, творческие приемы</td>
</tr>
<tr>
<td>⚒️ Ремонт ногтей</td>
<td><span class="price-highlight">4 ак. часа</span></td>
<td>Коррекция, снятие покрытия</td>
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
<li>💅 Наращивать ногти гелем на разных формах</li>
<li>🎯 Использовать декоративные элементы в дизайне</li>
<li>🧰 Проводить коррекцию и ремонт искусственных ногтей</li>
<li>🎨 Реализовывать креативные идеи клиентов</li>
<li>🌸 Снимать покрытие без вреда для натурального ногтя</li>
<li>📋 Подтвердить квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы маникюра одной фрезой" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы маникюра одной фрезой</div>
<h2>Курсы маникюра одной фрезой</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Нет рассрочки</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 600 ₽</span> <span class="rating-count"><del>9 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в рамках текущей акции</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы маникюра одной фрезой" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы маникюра одной фрезой»</strong> в <strong>Челябинске</strong> — идеальное предложение для желающих обучиться быстрому и качественному маникюру.</p>
<p>Вы научитесь использовать одну специально подобранную фрезу для обработки ногтей, а также освоите технику высокоскоростного маникюра.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки и работать быстрее и качественнее.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>1</strong> урок</span>
<span><strong>1</strong> процедура</span>
<span><strong>1</strong> день</span>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Техника безопасности, выбор фрезы</td>
</tr>
<tr>
<td>📈 Основы маникюра</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Скоростной маникюр, работа на моделях</td>
</tr>
<tr>
<td>🎨 Качество работы</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Обработка ногтей и ногтевого валика</td>
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
<li>💅 Выполнять скоростной маникюр с одной фрезой</li>
<li>🎯 Оценивать состояние ногтей клиента</li>
<li>🧰 Чисто и аккуратно обрабатывать ногти</li>
<li>🎨 Использовать различные фрезы для маникюра</li>
<li>🌸 Работать с реальными клиентами</li>
<li>📋 Получить диплом после успешного окончания курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс наращивания ногтей акрилом и полигелем" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс наращивания ногтей акрилом и полигелем</div>
<h2>Курс наращивания ногтей акрилом и полигелем</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>22 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail_extension" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс наращивания ногтей акрилом и полигелем»</strong> в <strong>Челябинске</strong> — оптимальный вариант для желающих освоить популярные техники наращивания ногтей.</p>
<p>Программа включает в себя различные техники работы с акрилом и полигелем, основы моделирования и дизайн.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подойдёт как новичкам, так и тем, кто хочет расширить свои навыки в области маникюра.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td>🔰 Основы наращивания</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Подготовка ногтей, техника "одной каплей", френч</td>
</tr>
<tr>
<td>📈 Дизайн ногтей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Объёмное оформление, использование декоративных элементов</td>
</tr>
<tr>
<td>🎨 Итоговый проект</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Комплексное применение навыков, работа на реальных клиентах</td>
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
<li>💅 Работать с акрилом и полигелем</li>
<li>🎯 Создавать различные виды дизайна ногтей</li>
<li>🧰 Проводить коррекцию и снятие покрытия</li>
<li>🎨 Использовать декоративные элементы в работе</li>
<li>🌸 Создавать красивую форму и натуральный изгиб ногтя</li>
<li>📋 Получить диплом о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>13 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период проведения акций</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы повышения квалификации по маникюру»</strong> в <strong>Челябинске</strong> — это отличная возможность для специалистов, стремящихся расширить свои знания и повысить квалификацию в области маникюра.</p>
<p>Программа включает практическое обучение на реальных клиентах и знакомство с современными технологиями маникюра.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных мастеров, желающих усовершенствовать свои навыки и повысить доход.</p>
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
<td>Техники маникюра, инструменты и материалы</td>
</tr>
<tr>
<td>📈 Углубленный маникюр</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Гель-лак, процедура восстановления ногтей</td>
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
<li>💅 Осуществлять классический и аппаратный маникюр</li>
<li>🎯 Использовать гель-лак для создания стойкого покрытия</li>
<li>🧰 Ремонтировать и восстанавливать ногтевую пластину</li>
<li>🎨 Исполнять различные техники дизайна</li>
<li>🌸 Выполнять процедуры SPA маникюра</li>
<li>📋 Подтверждать квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 200 ₽</span> <span class="rating-count"><del>38 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Челябинске</strong> — идеальный старт для желающих заняться nail-индустрией.</p>
<p>Программа включает изучение наращивания ногтей гелем и акрилом, а также дизайна.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим мастерам, так и тем, кто уже работает в сфере красоты и хочет повысить квалификацию.</p>
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
<span><strong>1-3 месяца</strong></span>
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
<td>Основы наращивания, виды наращивания гелем, ремонт искусственного ногтя</td>
</tr>
<tr>
<td>🎨 Наращивание акрилом и полигелем</td>
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
<li>💅 Наращивать ногти гелем и акрилом</li>
<li>🎨 Создавать уникальные дизайны на ногтях</li>
<li>🔧 Выполнять коррекцию и ремонт ногтей</li>
<li>📋 Работать с разными техниками маникюра</li>
<li>📸 Собирать портфолио работ</li>
<li>📜 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы дизайна ногтей" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы дизайна ногтей</div>
<h2>Курсы дизайна ногтей</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Нет</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 600 ₽</span> <span class="rating-count"><del>13 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в весенний сезон</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail-design" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы дизайна ногтей»</strong> в <strong>Челябинске</strong> — идеальный выбор для желающих освоить искусство ногтевого дизайна.</p>
<p>Участники изучат более 20 уникальных техник, включая акварель, вензеля и стильный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> уроков</span>
<span><strong>3</strong> процедур</span>
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
<td>Основы маникюра, подготовка ногтевой пластины</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Акварель, вензеля, стильный френч</td>
</tr>
<tr>
<td>⚙️ Практика</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с реальными клиентами</td>
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
<li>💅 Создавать уникальные дизайны ногтей</li>
<li>🎨 Использовать различные техники ногтевого творчества</li>
<li>🌈 Работать с декоративными материалами: фольга, стразы, втирки</li>
<li>🖌️ Рисовать флористические и абстрактные композиции</li>
<li>💪 Повышать квалификацию в индустрии красоты</li>
<li>📋 Получать сертификат по окончанию курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 000 ₽</span> <span class="rating-count"><del>12 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в определенные акционные периоды</p>
<p><strong>📍 Адрес:</strong> Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы аппаратного маникюра и педикюра»</strong> в <strong>Челябинске</strong> — это идеальный выбор для будущих мастеров, желающих освоить безопасные и быстрое техники обработки рук и ног.</p>
<p>Программа включает в себя использование аппарата для маникюра и педикюра, обработку проблемных зон и техники шлифовки кожи.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, которые хотят расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>3</strong> урока</span>
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
<td>🔰 Основы аппаратного маникюра</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Техника безопасности, использование аппарата, выбор насадок</td>
</tr>
<tr>
<td>📈 Педикюр</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Обработка стоп, шлифовка кожи, методы работы</td>
</tr>
<tr>
<td>🎓 Практика на клиентах</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа на реальных клиентах под наставничеством</td>
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
<li>💅 Выполнять аппаратный маникюр и педикюр</li>
<li>🎯 Использовать фрезы для обработки ногтей</li>
<li>🧰 Обрабатывать проблемные зоны без дискомфорта</li>
<li>🎨 Шлифовать кожу эффективно и быстро</li>
<li>🌸 Работать с клиентами на практике</li>
<li>📋 Получать диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 200 ₽</span> <span class="rating-count"><del>40 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках действующих акций</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Челябинске</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа охватывает современные и классические техники маникюра, включая гель-лак и дизайн.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span> <span><strong>14</strong> уроков</span> <span><strong>7</strong> процедур</span> <span><strong>3–7</strong> недель</span>
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
<td>Снятие покрытия, выравнивание, французский маникюр</td>
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
<li>💅 Выполнять различные виды маникюра</li>
<li>🎯 Работать с гель-лаком и создать качественное покрытие</li>
<li>🧰 Проводить ремонт ногтевой пластины</li>
<li>🎨 Разрабатывать уникальный дизайн ногтей</li>
<li>🌸 Выполнять уходовые процедуры и SPA-маникюр</li>
<li>📋 Подтвердить квалификацию дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 700 ₽</span> <span class="rating-count"><del>61 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на курс в данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Челябинске</strong> — идеальное начало для тех, кто хочет освоить профессию в beauty-сфере.</p>
<p>Программа включает маникюр, педикюр, дизайн и наращивание ногтей, что позволит вам стать универсальным специалистом.</p>
<p>За <span class="price-highlight">88 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих расширить свои навыки.</p>
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
<span><strong>2–3</strong> месяца</span>
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
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, аппаратный, комбинированный маникюр, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие, ремонт ногтей, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварельная техника, геометрия, аэропуффинг и декоративные элементы</td>
</tr>
<tr>
<td>🦶 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический и аппаратный педикюр</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Основы и виды наращивания гелем</td>
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
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🛠️ Уметь выполнять наращивание и укрепление ногтей</li>
<li>🔍 Знать современные тренды в дизайне ногтей</li>
<li>👥 Работать с реальными клиентами и на моделях</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://chelyabinsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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