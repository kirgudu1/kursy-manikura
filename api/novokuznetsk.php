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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">Курс градиентного маникюра</a></td>
<td>Создание градиентов и сочетание цветов</td>
<td>1 день</td>
<td>4</td>
<td>1</td>
<td>1</td>
<td>Персональный сертификат</td>
<td>3 700 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Основы наращивания, восстановление длины</td>
<td>16 часов</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>12 300 ₽</td>
<td>50%</td>
<td>4 100 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">Мастер по наращиванию ногтей</a></td>
<td>Наращивание и дизайн ногтей гелем и акрилом</td>
<td>1-3 месяца</td>
<td>72</td>
<td>18</td>
<td>11</td>
<td>Диплом специалиста</td>
<td>23 700 ₽</td>
<td>50%</td>
<td>4 000 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курсы педикюра</a></td>
<td>Классический и аппаратный педикюр</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>10 300 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">Курс аппаратного маникюра и педикюра</a></td>
<td>Техники аппаратного маникюра и педикюра</td>
<td>12 часов</td>
<td>12</td>
<td>3</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>7 100 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">Курс маникюра одной фрезой</a></td>
<td>Базовые техники маникюра с одной фрезой</td>
<td>1 день</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>Диплом</td>
<td>3 200 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Классические и аппаратные техники маникюра</td>
<td>1 месяц</td>
<td>24</td>
<td>6</td>
<td>4</td>
<td>Диплом</td>
<td>13 600 ₽</td>
<td>50%</td>
<td>4 600 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курсы наращивания ногтей акрилом и полигелем</a></td>
<td>Наращивание ногтей с использованием акрила и полигеля</td>
<td>4 недели</td>
<td>32</td>
<td>8</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>11 400 ₽</td>
<td>50%</td>
<td>4 000 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">Курс повышения квалификации по маникюру</a></td>
<td>Углубление знаний по маникюру и дизайну</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>8 200 ₽</td>
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
<!-- Главная карточка "Курс градиентного маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс градиентного маникюра</div>
<h2>Курс градиентного маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span> (1 занятие)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 700 ₽</span> <span class="rating-count"><del>7 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> сейчас в действии</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/courses-gradient-manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс градиентного маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс градиентного маникюра»</strong> в <strong>Новокузнецке</strong> — идеальный выбор для начинающих специалистов, желающих освоить популярную технику маникюра.</p>
<p>Вы изучите как создавать градиентные рисунки, сочетать модные цвета и применять навыки на практике.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит тем, кто хочет стать востребованным специалистом и повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Основы градиента</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Теория создания градиента, цветовые сочетания</td>
</tr>
<tr>
<td>🎨 Практика создания градиента</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Создание градиента на моделях, отработка навыков</td>
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
<li>💅 Создавать градиенты при выполнении маникюра</li>
<li>🎨 Сочетать модные цвета для создания интересного дизайна</li>
<li>🧰 Исключать распространенные ошибки в выполнении техники</li>
<li>🌈 Развивать собственный стиль и подход к дизайну</li>
<li>📋 Применять полученные знания на практике с реальными клиентами</li>
<li>🌟 Подтвердить свое обучение сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 100 ₽/мес.</span> (на 3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">12 300 ₽</span>
<span class="rating-count"><del>24 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на курс в ограниченный период.</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Новокузнецке</strong> — идеальный выбор для начинающих мастеров и тех, кто хочет расширить свои навыки в nail-индустрии.</p>
<p>Во время обучения вы освоите основы наращивания ногтей, восстановление длины и корректировку сколов.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получат бесценный практический опыт и <span class="price-highlight">сертификат</span>.</p>
<p>Этот курс поможет вам стать уверенным мастером и открывает двери в мир beauty-услуг.</p>
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
<td>Техники наращивания, выбор материалов</td>
</tr>
<tr>
<td>📈 Ремонт и поддержка</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Методы ремонта ногтей и коррекция формы</td>
</tr>
<tr>
<td>🎨 Дизайн наращивания</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Создание форм и уникальный стиль выполнения</td>
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
<li>💅 Делать наращивание ногтей разной длины</li>
<li>🎯 Придавать ногтям идеальную форму</li>
<li>🧰 Осуществлять ремонт и восстановление ногтей</li>
<li>🎨 Создавать уникальные дизайны и техники</li>
<li>🌸 Качественно работать с клиентами и их пожеланиями</li>
<li>📋 Определять подходящие материалы для разных техник</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 700 ₽</span> <span class="rating-count"><del>47 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Новокузнецке</strong> — отличное решение для начинающих и работающих мастеров, желающих усовершенствовать свои навыки и повысить доход.</p>
<p>Программа включает в себя техники наращивания ногтей гелем и акрилом, а также основы дизайна.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс полезен как для новичков, так и для мастеров, желающих расширить спектр услуг.</p>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, аппаратный, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Наращивание ногтей гелем</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Создание формы, восстановление, наращивание длины</td>
</tr>
<tr>
<td>🎨 Наращивание ногтей акрилом</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Скоростное наращивание, сложные формы, коррекция</td>
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
<li>💅 Выполнять классический и аппаратный маникюр</li>
<li>🔧 Наращивать ногти гелем и акрилом</li>
<li>🎨 Создавать красивый дизайн ногтей</li>
<li>🛠 Корректировать форму и длину ногтей</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 300 ₽</span> <span class="rating-count"><del>20 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в непрерывной акции</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы педикюра»</strong> в <strong>Новокузнецке</strong> — идеальный старт для начинающих мастеров, желающих освоить востребованные техники педикюра.</p>
<p>Программа включает классический, аппаратный и СПА-педикюр, а также современные техники обработки ногтей.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет повысить свои навыки и расширить услуги.</p>
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
<td>🔰 Основы педикюра</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Классический и европейский педикюр</td>
</tr>
<tr>
<td>💎 Аппаратный педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с фрезами и аппаратом</td>
</tr>
<tr>
<td>🌿 Спа и экспресс-педикюр</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Уходовые процедуры, работа с моделями</td>
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
<li>💅 Выполнять эстетический педикюр различными техниками</li>
<li>🔧 Использовать аппарат для педикюра</li>
<li>🧴 Применять уходовые процедуры для стоп</li>
<li>👌 Сочетать различные техники в одной процедуре</li>
<li>📋 Получать сертификат об окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 100 ₽</span> <span class="rating-count"><del>14 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс аппаратного маникюра и педикюра»</strong> в <strong>Новокузнецке</strong> — идеальный выбор для тех, кто хочет освоить актуальные техники ногтевого сервиса.</p>
<p>В программе курса изучаются различные методы аппаратного маникюра и педикюра, а также работа с качественными инструментами.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет для начинающих и профессионалов, желающих улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>🔰 Введение и техника</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы аппаратного маникюра, выбор насадок</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с клиентами, устранение мозолей</td>
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
<li>💅 Профессионально работать с аппаратами</li>
<li>🎯 Выполнять качественный маникюр разными способами</li>
<li>🧰 Устранять натоптыши и мозоли</li>
<li>🎨 Создавать стильные дизайны ногтей</li>
<li>🌸 Обеспечить качественный уход за ногтями и кожей</li>
<li>📋 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступная</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 200 ₽</span> <span class="rating-count"><del>6 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на время акции</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра одной фрезой" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра одной фрезой»</strong> в <strong>Новокузнецке</strong> — идеальный вариант для начинающих специалистов, желающих освоить маникюр всего за одну фрезу.</p>
<p>Участники изучают базовые и практические техники, которые позволяют эффективно работать с инструментом.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт тем, кто хочет увеличить скорость работы и предложить новое направление услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>3</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Выбор фрезы, подготовка инструментов</td>
</tr>
<tr>
<td>📈 Ускорение процесса</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Техника быстрого маникюра</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
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
<li>💅 Выбор фрезы для маникюра</li>
<li>⚡ Ускорение маникюра до 12 минут</li>
<li>📈 Составление клиентской базы</li>
<li>✨ Предложение новых услуг клиентам</li>
<li>🛠️ Правильная техника работы с аппаратом</li>
<li>📁 Создание портфолио для соц. сетей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 600 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 600 ₽</span> <span class="rating-count"><del>27 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Новокузнецке</strong> — это идеальный старт для тех, кто хочет стать профессиональным мастером маникюра.</p>
<p>Программа охватывает классические, европейские и аппаратные техники маникюра, предлагая много практики на реальных клиентах.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет улучшить свои навыки в маникюре.</p>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классический и европейский маникюр</td>
</tr>
<tr>
<td>📈 Аппаратный маникюр</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техника работы с аппаратами и фрезами</td>
</tr>
<tr>
<td>🎨 Гель-лак</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Нанесение и снятие гель-лака, работа с дизайном</td>
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
<li>💅 Проводить классический и европейский маникюр</li>
<li>🎯 Работать с аппаратом для маникюра</li>
<li>🧰 Наносить и снимать гель-лак</li>
<li>🎨 Создавать различные дизайны ногтей</li>
<li>🌸 Выбирать форму ногтей в зависимости от пожеланий клиента</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часа</span> (4 занятия)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступен</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>22 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на курс в текущий момент</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail_extension" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей акрилом и полигелем»</strong> в <strong>Новокузнецке</strong> — идеальный выбор для желающих начать карьеру в сфере маникюра.</p>
<p>Программа охватывает техники наращивания и коррекции ногтей, обучение на моделях и работу с реальными клиентами.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подарит вам уверенность в работе и знания, необходимые для успешного старта в индустрии красоты.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Основы наращивания, акрил и полигель</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Сложные техники формирования ногтей</td>
</tr>
<tr>
<td>🎨 Коррекция</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Коррекция форм ногтей, снятие покрытий</td>
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
<li>💅 Делать качественное наращивание ногтей</li>
<li>🎯 Работать с акрилом и полигелем</li>
<li>🧰 Осуществлять коррекцию ногтей</li>
<li>🎨 Создавать сложные формы ногтей</li>
<li>🌸 Консультировать клиентов по уходу за ногтями</li>
<li>📋 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по маникюру" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по маникюру</div>
<h2>Курс повышения квалификации по маникюру</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 200 ₽</span> <span class="rating-count"><del>16 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в определенный период</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс повышения квалификации по маникюру»</strong> в <strong>Новокузнецке</strong> — идеальное решение для мастеров, желающих углубить свои знания и навыки в маникюре.</p>
<p>Программа охватывает техники восстановления ногтевой пластины, нанесения покрытия под кутикулу и создания идеального блика.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для начинающих, так и для опытных мастеров, стремящихся повысить свою квалификацию и расширить услуги.</p>
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
<td>🔰 Введение в маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники снятия покрытия, ремонт ногтей</td>
</tr>
<tr>
<td>📈 Нанесение покрытия</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Покрытие под кутикулу, формирование архитектуры</td>
</tr>
<tr>
<td>🎨 Создание идеального блика</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Тонкости и секреты создания бликов</td>
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
<li>💅 Восстанавливать ногтевую пластину</li>
<li>🎯 Делать покрытие под кутикулу</li>
<li>🧰 Формировать идеальный блик на ногтях</li>
<li>🎨 Работать с различными формами ногтей</li>
<li>🌸 Проводить уходовые процедуры</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс медицинского педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс медицинского педикюра</div>
<h2>Курс медицинского педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">29 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">42%</span> в ходе специальных акций.</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78424114456">+7 (842) 411-44-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/medical-pedicure" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/medical-pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс медицинского педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс медицинского педикюра»</strong> в <strong>Новокузнецке</strong> — отличное решение для тех, кто хочет научиться профессиональной диагностике ногтей и уходу за стопами.</p>
<p>Программа охватывает техники диагностики, лечения вросших ногтей и ухода за кожей.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет углубить свои знания в области медицинского педикюра.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>3</strong> процедур</span>
<span><strong>6 недель</strong></span>
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
<td>🔰 Исследование</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Диагностика состояния ногтей и кожи, сбор анамнеза.</td>
</tr>
<tr>
<td>📈 Лечение</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Методы лечения вросших ногтей и мозолей.</td>
</tr>
<tr>
<td>🎨 Профилактика</td>
<td><span class="price-highlight">24 ч / 3 урока</span></td>
<td>Устранение воспалений и рекомендаций по уходу.</td>
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
<li>🔍 Проводить профессиональную диагностику ногтей</li>
<li>🦶 Лечить вросшие ногти и проблемы с кожей</li>
<li>⚕️ Устранить воспаления и давать рекомендации</li>
<li>📋 Работать с реальными клиентами под руководством преподавателя</li>
<li>📷 Формировать портфолио для социальных сетей</li>
<li>📜 Получить востребованный диплом в индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/medical-pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> на 9 месяцев</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">35 900 ₽</span> <span class="rating-count"><del>71 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение при записи до окончания акции</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Новокузнецке</strong> — идеальный выбор для начинающих и профессионалов в индустрии красоты.</p>
<p>Программа охватывает маникюр, педикюр, укрепление и дизайн ногтей любой сложности.</p>
<p>За <span class="price-highlight">88 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для тех, кто хочет стать успешным мастером и стабильно зарабатывать.</p>
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
<td>Классический, аппаратный, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие, ремонт, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварельная техника, декоративные элементы, геометрия</td>
</tr>
<tr>
<td>📅 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический, аппаратный, комбинированный педикюр</td>
</tr>
<tr>
<td>💅 Наращивание</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Создание формы, восстановление, наращивание длины</td>
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
<li>🎯 Создавать дизайн ногтей различными техниками</li>
<li>🧰 Научитесь нарощению и ремонту ногтевой пластины</li>
<li>🎨 Овладеете акварельной техникой и геометрическим дизайном</li>
<li>🌸 Проводить классические и европейские педикюры</li>
<li>📋 Получите диплом, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 100 ₽</span> <span class="rating-count"><del>50 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в актуальный период</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Новокузнецке</strong> — идеальный старт для начинающих в beauty-сфере.</p>
<p>Программа охватывает техники выполнения классического маникюра, покрытие гель-лак и уникальный дизайн.</p>
<p>За <span class="price-highlight">56 академических часов</span> студенты получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию.</p>
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
<td>Классический, аппаратный, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, выравнивание, френч</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварель, элементы, геометрия, аэропуффинг</td>
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
<li>🎯 Работать с гель-лаком и обеспечивать стойкость покрытия</li>
<li>🧰 Проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 Создавать уникальный дизайн: геометрию, акварель, втирку</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Получить диплом, подтверждающий квалификацию 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 400 ₽</span> <span class="rating-count"><del>8 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/drawing_nails" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/drawing_nails" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс росписи ногтей»</strong> в <strong>Новокузнецке</strong> — идеальный вариант для начинающих мастеров маникюра, желающих освоить искусство росписи ногтей.</p>
<p>В программе обучения — техники нанесения узоров и вензелей на ногти, а также создание уникальных дизайнов.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдет как новичкам, так и профессионалам, стремящимся обновить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>3</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Основы росписи</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Техники нанесения узоров, подготовка инструментов</td>
</tr>
<tr>
<td>🎨 Создание дизайна</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Создание уникальных узоров, вензелей</td>
</tr>
<tr>
<td>🖌️ Практика на моделях</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Работа с клиентами, отработка навыков</td>
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
<li>💅 Правильно расписывать ногти</li>
<li>🎯 Использовать вензели в дизайне</li>
<li>🧰 Создавать уникальные узоры и декор</li>
<li>🎨 Осваивать свадебный маникюр</li>
<li>🌸 Предлагать клиентам новые дизайны</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/drawing_nails" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail-design" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Новокузнецке</strong> — отличный выбор для тех, кто хочет развить свои навыки в nail-дизайне.</p>
<p>Программа охватывает популярные техники, такие как акварель, вензеля, эффект хрустальных камней и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет расширить свои возможности в индустрии красоты.</p>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Вводный курс, акварельная техника, геометрия</td>
</tr>
<tr>
<td>📱 Декорирование</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Элементы декора, работа с фольгой и стразами</td>
</tr>
<tr>
<td>🎨 Индивидуальный стиль</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Создание уникальных дизайнов под запрос клиента</td>
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
<li>💅 Создавать разнообразные дизайны ногтей</li>
<li>🎨 Осваивать акварельную и геометрическую технику</li>
<li>🧰 Использовать профессиональные инструменты и материалы</li>
<li>🌸 Работать с различными декоративными элементами</li>
<li>📈 Повышать квалификацию в nail-дизайне</li>
<li>💼 Создавать портфолио для дальнейшей работы</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://novokuznetsk.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
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