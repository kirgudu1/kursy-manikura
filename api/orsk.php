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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">Мастер по наращиванию ногтей</a></td>
<td>Наращивание гелем и акрилом</td>
<td>1–3 месяца</td>
<td>72</td>
<td>18</td>
<td>11</td>
<td>Диплом специалиста</td>
<td>19 800 ₽</td>
<td>40%</td>
<td>3 300 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Создание желаемой формы, восстановление поврежденных ногтей</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>7 100 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/medical-pedicure" target="_blank">Курсы медицинского педикюра</a></td>
<td>Диагностика, лечение вросших ногтей</td>
<td>1 месяц</td>
<td>24</td>
<td>3</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>41 900 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Классический и аппаратный маникюр</td>
<td>1 месяц</td>
<td>24</td>
<td>6</td>
<td>4</td>
<td>Сертификат</td>
<td>16 600 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курсы наращивания ногтей акрилом и полигелем</a></td>
<td>Работа с акрилом и полигелем</td>
<td>1 месяц</td>
<td>32</td>
<td>8</td>
<td>4</td>
<td>Сертификат</td>
<td>11 000 ₽</td>
<td>40%</td>
<td>3 000 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курс педикюра</a></td>
<td>Классический, аппаратный, СПА-педикюр</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>11 000 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail-design" target="_blank">Курс дизайна ногтей</a></td>
<td>Акварель, вензеля, френч</td>
<td>2-3 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>6 600 ₽</td>
<td>40%</td>
<td>2 200 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">Курсы аппаратного маникюра и педикюра</a></td>
<td>Аппаратный маникюр, работа с кутикулой</td>
<td>1 месяц</td>
<td>12</td>
<td>3</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>11 000 ₽</td>
<td>40%</td>
<td>4 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">Мастер маникюра</a></td>
<td>Классический и аппаратный маникюр, дизайн</td>
<td>3–7 недель</td>
<td>56</td>
<td>14</td>
<td>7</td>
<td>Диплом специалиста</td>
<td>22 100 ₽</td>
<td>40%</td>
<td>4 500 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курсы повышения квалификации по маникюру</a></td>
<td>Современные техники маникюра и SPA процедуры</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом</td>
<td>6 600 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 300 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 800 ₽</span> <span class="rating-count"><del>33 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного периода</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Орске</strong> — это возможность освоить востребованную профессию и начать карьеру в nail-индустрии.</p>
<p>Программа включает в себя техники наращивания ногтей гелем и акрилом, а также создание различных дизайнов.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто уже работает в сфере красоты и хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>72</strong> ак. часов</span> <span><strong>18</strong> уроков</span> <span><strong>11</strong> процедур</span> <span><strong>1-3</strong> месяца</span>
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
<td>Создание красивой формы, восстановление сломанного ногтя, наращивание длины</td>
</tr>
<tr>
<td>🎨 Наращивание акрилом и полигелем</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Скоростное наращивание, создание сложной формы, коррекция формы ногтей</td>
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
<li>🖌️ Создавать сложные формы ногтей: стилет, балерина, сквоовал</li>
<li>🔧 Выполнять коррекцию формы и длины ногтей</li>
<li>🌈 Разрабатывать уникальные дизайны на ногтях</li>
<li>📋 Подтверждать квалификацию дипломом 4-го разряда</li>
<li>🎉 Начинать карьеру в nail-индустрии и открывать свои салоны</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 100 ₽</span> <span class="rating-count"><del>11 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Орске</strong> — отличный выбор для тех, кто хочет освоить новые навыки в бьюти-индустрии.</p>
<p>Программа включает технологии наращивания, восстановление поврежденных ногтей и создание желаемой формы и длины.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
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
<td>💅 Базовый</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Создание красивой формы, работа с гелем</td>
</tr>
<tr>
<td>🔧 Восстановление</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Восстановление сломанных ногтей, покрытие</td>
</tr>
<tr>
<td>📈 Наращивание длины</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Добавление длины ногтей с помощью техник наращивания</td>
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
<li>🎯 Работать с длиной и корректировать её</li>
<li>✏️ Придавать маникюру желаемую форму</li>
<li>🔧 Восстанавливать поврежденные ногти без травм</li>
<li>💎 Использовать современные материалы для наращивания</li>
<li>🌟 Работать с клиентами и формировать портфолио</li>
<li>📋 Завершать курс с получением сертификата</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы медицинского педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы медицинского педикюра</div>
<h2>Курсы медицинского педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">до 6 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">41 900 ₽</span> <span class="rating-count"><del>69 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период доступных предложений</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/medical-pedicure" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/medical-pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы медицинского педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы медицинского педикюра»</strong> в <strong>Орске</strong> — это идеальный выбор для людей, желающих освоить современные методы работы с проблемной кожей ног.</p>
<p>Программа включает диагностику, лечение вросших ногтей и консультирование по грибковым заболеваниям.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и опытным мастерам, желающим повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
<span><strong>3</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>🔰 Диагностика</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Профессиональная диагностика, заболевания стоп</td>
</tr>
<tr>
<td>📈 Лечение вросших ногтей</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Профилактика и лечение врастания</td>
</tr>
<tr>
<td>🎨 Грибковые поражения</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Консультирование о грибковых заболеваниях</td>
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
<li>💡 Проводить грамотную диагностику заболеваний стоп</li>
<li>🦶 Работать с вросшими ногтями и их профилактикой</li>
<li>🌱 Консультировать по вопросам грибковых заболеваний</li>
<li>🔧 Применять различные техники лечения</li>
<li>📑 Создавать портфолио для будущей практики</li>
<li>🏆 Получить диплом о квалификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/medical-pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">16 600 ₽</span> <span class="rating-count"><del>27 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в определенные периоды</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Орске</strong> — это отличный старт для тех, кто хочет овладеть профессией мастера маникюра.</p>
<p>Программа охватывает базовые техники маникюра, качество работы с кутикулой и ногтями.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет развить свои навыки в нейл-индустрии.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классический маникюр, коммуникация с клиентами</td>
</tr>
<tr>
<td>📈 Аппаратный</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с фрезами, безопасность</td>
</tr>
<tr>
<td>🎨 Гель-лак</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Правильное нанесение и удаление гель-лака</td>
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
<li>💅 Осваивать классический и аппаратный маникюр</li>
<li>🎯 Работать с гель-лаком на высоком уровне</li>
<li>🧰 Следовать стандартам безопасности</li>
<li>🎨 Выполнять покраску ногтей без повреждений</li>
<li>🌸 Общаться с клиентами для удовлетворения их потребностей</li>
<li>📋 Получать сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (4 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 000 ₽</span> <span class="rating-count"><del>18 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период специальных акций</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail_extension" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей акрилом и полигелем»</strong> в <strong>Орске</strong> — идеальный вариант для тех, кто хочет получить востребованную профессию в nail-индустрии.</p>
<p>Программа включает изучение техник наращивания ногтей с использованием акрила и полигеля, а также коррекции ногтей.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для новичков, так и для уже работающих мастеров, желающих повысить квалификацию.</p>
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
<td>🔰 Основы наращивания</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Техники наращивания, выбор материалов</td>
</tr>
<tr>
<td>📈 Коррекция и снятие</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Работа с поврежденными ногтями, безопасное снятие</td>
</tr>
<tr>
<td>🎨 Форма и дизайн</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Создание сложных форм, декоративные техники</td>
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
<li>💅 Наращивать ногти акрилом и полигелем</li>
<li>🛠️ Исправлять поврежденные ногти</li>
<li>✂️ Работать с различными формами ногтей</li>
<li>🎨 Создавать уникальный дизайн ногтей</li>
<li>📋 Оформлять портфолио работ</li>
<li>🌟 Проводить процедуры снятия ногтей безопасно</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 600 ₽</span> <span class="rating-count"><del>11 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> сейчас доступна</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс повышения квалификации по маникюру»</strong> в <strong>Орске</strong> — идеальный выбор для повышения мастерства в маникюре.</p>
<p>Программа охватывает современные техники маникюра, включая французский маникюр и СПА процедуры.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных мастеров, желающих улучшить свои навыки и найти больше клиентов в нейл-индустрии.</p>
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
<td>🔰 Снятие покрытия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Принципы грамотного удаления покрытия и ремонт ногтевой пластины</td>
</tr>
<tr>
<td>📈 Выравнивание</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Методы выравнивания ногтевой пластины</td>
</tr>
<tr>
<td>🎨 Французский маникюр и СПА</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника французского маникюра и уходовые процедуры</td>
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
<li>💅 Правильно диагностировать состояние ногтя</li>
<li>🎯 Работа с различными составами и средствами для покрытия</li>
<li>🧰 Корректировать форму ногтя и обрабатывать поверхность</li>
<li>🎨 Создавать эффектные блики на гель-лаке</li>
<li>🌸 Поддерживать востребованность среди клиентов</li>
<li>📋 Понимать карьерные перспективы в нейл-индустрии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">27 600 ₽</span> <span class="rating-count"><del>46 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в рамках акции.</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Орске</strong> — идеальный старт для начинающих и опытных мастеров, желающих расширить свои навыки в маникюре и педикюре.</p>
<p>Программа охватывает обучение салонным маникюру, эстетическому педикюру и наращиванию ногтей.</p>
<p>За <span class="price-highlight">88 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет тем, кто хочет начать карьеру в бьюти-сфере или повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>Классический, аппаратный, комбинированный, покрытие гель-лаком</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, ремонт, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварельная техника, декоративные элементы, геометрия</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический, аппаратный, комбинированный</td>
</tr>
<tr>
<td>💅 Наращивание</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Создание формы, восстановление ногтей</td>
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
<li>💅 Выполнять маникюр и педикюр разных техник</li>
<li>🎯 Создавать сложные дизайны ногтей</li>
<li>🧰 Работать с гель-лаком и материалами для наращивания</li>
<li>🎨 Применять акварельные техники в дизайне</li>
<li>🌸 Проводить SPA-процедуры</li>
<li>📋 Получить диплом специалиста 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 800 ₽</span> <span class="rating-count"><del>14 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра одной фрезой" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра одной фрезой»</strong> в <strong>Орске</strong> — это идеальный выбор для начинающих и действующих мастеров маникюра.</p>
<p>Вы освоите техники быстрого маникюра и научитесь грамотно выбирать фрезы в зависимости от состояния ногтей клиента.</p>
<p>За <span class="price-highlight">4 академических часа</span> вы получите практику на моделях и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдет тем, кто хочет значительно увеличить количество клиентов и доходы.</p>
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
<td>🔰 Выбор фрезы</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Диагностика состояния рук, выбор фрезы</td>
</tr>
<tr>
<td>📈 Скорость маникюра</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Ошибки начинающих мастеров, техника быстрого маникюра</td>
</tr>
<tr>
<td>🎨 Отработка техники</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Правила безопасности и отработка на моделях</td>
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
<li>💎 Грамотно выбирать фрезы</li>
<li>⚡ Ускорять проведение процедуры</li>
<li>📈 Увеличивать число клиентов</li>
<li>🚀 Работать быстро и профессионально</li>
<li>🛠️ Организовывать рабочие инструменты</li>
<li>🔒 Соблюдать правила безопасности</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 000 ₽</span> <span class="rating-count"><del>18 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в условиях акционных предложений</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы аппаратного маникюра и педикюра»</strong> в <strong>Орске</strong> — отличное предложение для желающих освоить профессию мастера маникюра с нуля.</p>
<p>Программа включает изучение аппаратного маникюра, педикюра и работы с специальной техникой.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто желает повысить компетенции в сфере красоты.</p>
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
<td>🔰 Введение</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы работы с аппаратом, санитарные нормы</td>
</tr>
<tr>
<td>📈 Маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Аппаратный маникюр, работа с кутикулой</td>
</tr>
<tr>
<td>🎨 Педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Аппаратный педикюр, работа с ногтями и кожей стоп</td>
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
<li>💅 Грамотно использовать аппаратуру</li>
<li>🎯 Выполнять аппаратный маникюр и педикюр</li>
<li>🧰 Работать без травм и повреждений</li>
<li>🎨 Создавать уникальные дизайны</li>
<li>🌸 Проводить полные процедуры для клиентов</li>
<li>📋 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 100 ₽</span> <span class="rating-count"><del>36 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках специального предложения</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Орске</strong> — отличный старт для тех, кто хочет войти в beauty-сферу.</p>
<p>Программа охватывает классические и современные техники маникюра, включая гель-лак и дизайн.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет повысить квалификацию.</p>
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
<td>Снятие покрытия, ремонт ногтей, выравнивание, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварель, геометрия, изготовление декоративных элементов, сезонные тренды</td>
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
<li>💅 Делать классический, аппаратный и комбинированный маникюр</li>
<li>🎯 Работать с гель-лаком, создавать стойкое покрытие</li>
<li>🧰 Проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 Создавать дизайн: геометрию, акварель, элементы</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 000 ₽</span> <span class="rating-count"><del>18 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в период акций</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Орске</strong> — идеальное решение для начинающих в beauty-индустрии.</p>
<p>В программе: классический, аппаратный, SPA и экспресс-педикюр, а также работа с реальными клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Подходит для тех, кто хочет начать карьеру или повысить свою квалификацию.</p>
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
<td>🔰 Основы педикюра</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Классический и европейский педикюр</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Техники работы с аппаратами и фрезами</td>
</tr>
<tr>
<td>🎨 Комбинированный подход</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Сочетание различных техник педикюра</td>
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
<li>💼 Аккуратная обработка ступней</li>
<li>🛠️ Выполнение разных видов педикюра</li>
<li>🔒 Работа в соответствии со стандартами безопасности</li>
<li>🌟 Создание гладкой и ухоженной кожи ног</li>
<li>📅 Сочетание ручных и аппаратных техник</li>
<li>🤝 Работа с реальными клиентами под руководством мастеров</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2-3 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 200 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 600 ₽</span> <span class="rating-count"><del>11 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при записи</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail-design" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Орске</strong> — идеальный выбор для начинающих мастеров и тех, кто хочет расширить свои навыки в дизайне ногтей.</p>
<p>Вы изучите более 20 популярных техник, таких как акварель, вензеля и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет для всех, кто хочет расширить свои возможности и повысить доход.</p>
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
<span><strong>2-3</strong> недели</span>
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
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварель, вензеля, френч, эффект хрустальных камней</td>
</tr>
<tr>
<td>🌟 Практика</td>
<td><span class="price-highlight">0 ч / 3 процедуры</span></td>
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
<li>🎨 Создавать интересные эскизы дизайна</li>
<li>💅 Работать с различными техниками и инструментами</li>
<li>✨ Выполнять уникальные и модные дизайны по запросу клиентов</li>
<li>🖌️ Осваивать технику аэропуффинга</li>
<li>🔷 Управлять различными стилями и направлениями в дизайне</li>
<li>🌈 Создавать композиции с использованием декоративных элементов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orsk.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
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