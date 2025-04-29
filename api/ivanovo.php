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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Классический и европейский маникюр, работа с гель-лаком</td>
<td>1 месяц</td>
<td>24</td>
<td>6</td>
<td>4</td>
<td>Диплом специалиста</td>
<td>5 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">Курс маникюра одной фрезой</a></td>
<td>Быстрая техника маникюра, работа с аппаратом</td>
<td>1 неделя</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>5 300 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">Курс повышения квалификации по маникюру</a></td>
<td>Техники восстановления ногтей, идеальный блеск покрытия</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>4 800 ₽</td>
<td>50%</td>
<td>4 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/drawing_nails" target="_blank">Курс росписи ногтей</a></td>
<td>Наносить уникальные дизайны, создавать вензеля</td>
<td>1 неделя</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>5 300 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курс педикюра</a></td>
<td>Классический и SPA-педикюр</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом специалиста</td>
<td>5 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Наращивание, восстановление длины</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом мастера</td>
<td>5 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Полный курс маникюра, педикюра и наращивания ногтей</td>
<td>2-3 месяца</td>
<td>88</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>20 900 ₽</td>
<td>50%</td>
<td>3 500 ₽/мес.</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Сравнительная таблица курсов -->
<br>
<!--startblok-->
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс маникюра для начинающих</div>
<h2>Курс маникюра для начинающих</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 800 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение на текущий момент</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Иваново</strong> — отличный старт для тех, кто хочет войти в мир красоты и маникюра.</p>
<p>Программа охватывает классические и современные техники маникюра, включая работу с гель-лаком.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит тем, кто хочет стать уверенным мастером ногтевого сервиса.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Классический и европейский маникюр, работа с кутикулой</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Нанесение и снятие гель-лака, базовые техники дизайна</td>
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
<li>💅 Делать классический и европейский маникюр</li>
<li>🎯 Работать с аппаратным маникюром</li>
<li>🧰 Наносить и снимать гель-лак</li>
<li>🎨 Применять элементы дизайна при маникюре</li>
<li>🌸 Ухаживать за ногтями и кожей рук</li>
<li>📋 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 300 ₽</span> <span class="rating-count"><del>10 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в настоящее время.</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра одной фрезой" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра одной фрезой»</strong> в <strong>Иваново</strong> — это идеальное решение для тех, кто хочет научиться делать маникюр быстро и качественно.</p>
<p>Программа включает изучение быстрой техники маникюра одной фрезой, что позволяет существенно сократить время работы.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных мастеров, желающих повысить свою квалификацию.</p>
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
<span><strong>1</strong> неделя</span>
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
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Выбор фрезы и техники дезинфекции</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Техника выполнения маникюра одной фрезой</td>
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
<li>💅 Правильно выбирать фрезу для маникюра</li>
<li>⏱️ Быстро выполнять маникюр за рекордные сроки</li>
<li>📈 Оказывать дополнительные услуги клиентам</li>
<li>🤝 Повышать поток клиентов и свою востребованность</li>
<li>📋 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 800 ₽</span> <span class="rating-count"><del>9 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на данный курс в акционной период.</p>
<p><strong>📍 Адрес:</strong> г. Иваново, ул. Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс повышения квалификации по маникюру»</strong> в <strong>Иванове</strong> — это идеальный выбор для тех, кто хочет привести свои навыки в индустрии красоты на новый уровень.</p>
<p>В программе изучаются техники по восстановлению ногтей, идеальному блеску покрытия, и работе с кутикулой.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как начинающим мастерам, так и тем, кто уже имеет опыт и хочет повысить свою квалификацию.</p>
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
<td>Снятие покрытия, ремонт ногтя, укрепление</td>
</tr>
<tr>
<td>📈 Выравнивание</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Выравнивание ногтевой пластины, создание идеального блеска</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Французский маникюр, SPA-процедуры</td>
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
<li>💅 Делать ровные ногти с идеальным блеском</li>
<li>🎯 Восстанавливать ногтевую пластину</li>
<li>🧰 Работать с кутикулой и покрывать ноготь гель-лаком под кутикулой</li>
<li>🎨 Создавать классический френч и проводит SPA-маникюр</li>
<li>🌸 Укреплять ногти и выполнять все необходимые процедуры</li>
<li>📋 Подтверждать квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 300 ₽</span> <span class="rating-count"><del>10 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/drawing_nails" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/drawing_nails" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс росписи ногтей»</strong> в <strong>Иваново</strong> — отличный выбор для тех, кто хочет развить свои навыки в маникюре и стать профессионалом.</p>
<p>Здесь изучаются техники росписи вензелями, создание уникального дизайна и сочетание различных стилей.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для мастеров, желающих расширить свои знания и умения.</p>
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
<span><strong>1</strong> неделя</span>
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
<td>Создание вензелей, использование акриловых красок</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Отработка навыков на реальных клиентах</td>
</tr>
<tr>
<td>✍️ Создание уникального дизайна</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Комбинирование техник, разработка авторского узора</td>
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
<li>💅 Делать красивую роспись ногтей</li>
<li>🎨 Создавать уникальный дизайн с вензелями</li>
<li>🌟 Комбинировать разные техники в маникюре</li>
<li>👰 Чаще выполнять маникюр для невест</li>
<li>📈 Стать востребованным специалистом в индустрии красоты</li>
<li>🖌️ Оформить качественное портфолио для соц. сетей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/drawing_nails" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Можно оформить рассрочку</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 800 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> временно доступна для новых студентов.</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Иваново</strong> — идеальный вариант для желающих освоить востребованную профессию в сфере beauty.</p>
<p>Выучите класические и современные техники педикюра, включая аппаратный и SPA-педикюр.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для повышения квалификации действующих мастеров.</p>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Классический и европейский педикюр</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Использование аппарата и фрез</td>
</tr>
<tr>
<td>🎨 SPA-педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники SPA-педикюра</td>
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
<li>🎯 Устранять проблемы с ногтями и кожей стоп</li>
<li>🧰 Работать с современным оборудованием</li>
<li>🎨 Проводить SPA-процедуры для ног</li>
<li>🌸 Подготавливать рабочее место к приему клиента</li>
<li>📋 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 800 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Иваново</strong> — идеальный старт для начинающих мастеров маникюра, желающих освоить наращивание ногтей гелем.</p>
<p>Программа включает в себя изучение техник наращивания, восстановления длины и формы ногтей.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и уверенно работать в салонах красоты.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Создание красивой формы, выбор материалов</td>
</tr>
<tr>
<td>⚒️ Практика</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Наращивание и восстановление сломанных ногтей</td>
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
<li>💅 Делать длинные ногти и восстанавливать их форму</li>
<li>🔧 Придать ногтям разнообразную форму: квадратную и миндальную</li>
<li>🛠️ Ремонтировать сломанные ногти и восстанавливать длину</li>
<li>📏 Работать с гелем для наращивания</li>
<li>🌟 Создавать качественное портфолио для трудоустройства</li>
<li>👩‍🏫 Получить уверенность в своих навыках</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 300 ₽</span> <span class="rating-count"><del>10 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение при ранней записи</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/courses-gradient-manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы градиентного маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы градиентного маникюра»</strong> в <strong>Иваново</strong> — идеальный выбор для всех, кто хочет освоить красивую технику градиентного маникюра.</p>
<p>Программа охватывает создание плавных переходов цвета и сочетания модных оттенков.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдет как для новичков, так и для опытных мастеров, желающих повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span> <span><strong>1</strong> урок</span> <span><strong>1</strong> процедура</span> <span><strong>1 день</strong></span>
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
<td>Теория создания градиента, законы колористики</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
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
<li>💅 Создавать градиентные эффекты на ногтях</li>
<li>🎨 Работать с модными оттенками и сочетаниями</li>
<li>🌟 Повышать профессиональные навыки в nail-дизайне</li>
<li>🧰 Применять техники на реальных клиентах</li>
<li>📋 Составлять качественное портфолио для соц. сетей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">56 ак. часов</span> (3-7 недель)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 900 ₽</span> <span class="rating-count"><del>27 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в рамках акций</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Иваново</strong> — идеальный старт для начинающих в индустрии красоты.</p>
<p>Программа включает в себя изучение классических и современных техник маникюра, включая покрытие гель-лаком и создание дизайна.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для новичков, так и для профессионалов, стремящихся повысить свои навыки.</p>
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
<td>Классический, аппаратный, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Ремонт, выравнивание, французский маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Создание акварельных и геометрических дизайнов, втирки, декоративные элементы</td>
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
<li>🎯 Работать с гель-лаком и создавать долговечное покрытие</li>
<li>🧰 Проводить ремонт ногтей и выравнивать ногтевую пластину</li>
<li>🎨 Создавать уникальный дизайн, включая геометрию и флористику</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Получить диплом, подтверждающий квалификацию 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>41 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> при акциях на обучение</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Иваново</strong> — идеальный вариант для начинающих мастеров в индустрии красоты.</p>
<p>Вы освоите салонные процедуры маникюра и дизайна ногтей, а также педикюр.</p>
<p>За <span class="price-highlight">88 ак. часов</span> слушатели получают обширную практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет расширить свои навыки в сфере красоты.</p>
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
<td>🔰 Блок маникюра</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классическая, аппаратный, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Блок повышения квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, ремонт ногтя, французский маникюр</td>
</tr>
<tr>
<td>🎨 Блок дизайна ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварельная техника, декоративные элементы, геометрия, аэропуффинг</td>
</tr>
<tr>
<td>🦶 Блок педикюра</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический и европейский педикюр, аппаратный, комбинированный</td>
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
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🦾 Наращивать и восстанавливать ногти</li>
<li>🧴 Проводить SPA-маникюр и уходовые процедуры</li>
<li>📋 Получить диплом, подтверждающий вашу квалификацию</li>
<li>💰 Заработок от 40 000 рублей в месяц в салоне или на себя</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 800 ₽</span> <span class="rating-count"><del>9 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> ограниченное предложение</p>
<p><strong>📍 Адрес:</strong> г. Иваново, ул. Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/nail-design" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Иваново</strong> — отличный выбор для всех, кто хочет освоить актуальные техники ногтевого дизайна.</p>
<p>Программа охватывает акварель, вензеля, эффект хрустальных камней, стиль тату и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и расширить свои возможности.</p>
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
<td>🔰 Основы дизайна</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники акварели, вензеля, стиль тату</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Эффект хрустальных камней, уникальный френч</td>
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
<li>🎯 Применять различные техники оформления</li>
<li>🖌️ Работать с профессиональными материалами</li>
<li>🎉 Разрабатывать трендовые маникюры для клиентов</li>
<li>🌈 Создавать праздничный маникюр с элементами фольги и страз</li>
<li>📑 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">72 ак. часа</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 000 ₽</span> <span class="rating-count"><del>40 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в рамках текущей акции</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Иваново</strong> — это отличный старт для тех, кто хочет освоить nail-индустрию.</p>
<p>Программа включает в себя обучение самым современным техникам наращивания ногтей гелем и акрилом, а также созданию уникальных дизайнов.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели проходят практику с реальными клиентами и получают <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для мастеров, желающих повысить свою квалификацию.</p>
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
<td>🔰 Маникюр</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классическая и аппаратная техника, комбинированный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Наращивание гелем</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Создание формы, восстановление, наращивание длины</td>
</tr>
<tr>
<td>🎨 Наращивание акрилом и полигелем</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Скоростное наращивание, создание сложной формы, коррекция</td>
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
<li>🎯 Осваивать наращивание ногтей гелем и акрилом</li>
<li>🧰 Создавать и корректировать сложные формы ногтей</li>
<li>🎨 Выполнять индивидуальный дизайн на ногтях</li>
<li>🌸 Работать с реальными клиентами и создавать портфолио</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 500 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> действует на ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/nail_extension" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей акрилом и полигелем»</strong> в <strong>Иваново</strong> — идеальный старт для тех, кто хочет освоить мастерство наращивания ногтей.</p>
<p>Программа включает изучение скоростного наращивания, коррекции формы nails и создание сложных форм.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет расширить свои навыки в сфере ногтевого сервиса.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часа</span>
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
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Скоростное наращивание, акрил и полигель</td>
</tr>
<tr>
<td>📈 Коррекция</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Коррекция формы ногтей, работа с поврежденными ногтями</td>
</tr>
<tr>
<td>🎨 Сложная форма</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Создание сложных форм: скво-овал, стилет, балерина</td>
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
<li>💅 Быстро наращивать ногти с использованием различных техник</li>
<li>🔍 Устранять погрешности и исправлять форму ногтей</li>
<li>🎯 Применять сложные формы наращивания для различных клиентов</li>
<li>🛠️ Работать с акрилом и полигелем для достижения идеального результата</li>
<li>📋 Вести свою клиентскую базу и поддерживать профессиональные стандарты</li>
<li>🌟 Создавать качественное портфолио для привлечения клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 900 ₽</span> <span class="rating-count"><del>11 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в ограниченный срок</p>
<p><strong>📍 Адрес:</strong> г. Иваново, Шереметевский пр-т, д. 153а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74932528508">+7 (4932) 528-508</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">ivanovo.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс аппаратного маникюра и педикюра»</strong> в <strong>Иваново</strong> — идеальный выбор для тех, кто стремится стать профессионалом в beauty-индустрии.</p>
<p>Программа курса охватывает современный подход к маникюру и педикюру с использованием аппарата и методов устранения распространенных проблем.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Этот курс подходит как новичкам, так и тем, кто хочет улучшить свои навыки в оспользовании аппаратного способа.</p>
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
<span><strong>3 недели</strong></span>
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
<td>Техника работы с аппаратом, безопасность, дезинфекция</td>
</tr>
<tr>
<td>📈 Маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Процесс обработки ногтя и кутикулы, фрезы</td>
</tr>
<tr>
<td>🎨 Педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Обработка трещин, мозолей, вросших ногтей</td>
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
<li>💅 Ориентироваться в технике обработки ногтей</li>
<li>⚙️ Выполнять маникюр с помощью аппарата</li>
<li>👣 Оказывать услуги аппаратного педикюра</li>
<li>🛠️ Работать с кутикулой и ногтевым валиком</li>
<li>🔍 Понимать использование профессионального оборудования</li>
<li>🌟 Создавать качественное портфолио для соц. сетей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ivanovo.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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