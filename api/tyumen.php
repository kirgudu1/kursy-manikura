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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Классический и аппаратный маникюр, работа с гель-лаком</td>
<td>1 месяц</td>
<td>24</td>
<td>6</td>
<td>4</td>
<td>Диплом мастера красоты</td>
<td>9 900 ₽</td>
<td>50%</td>
<td>Подходит</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail-design" target="_blank">Курс дизайна ногтей</a></td>
<td>Создание оригинального дизайна ногтей</td>
<td>2-3 недели</td>
<td>16</td>
<td>5</td>
<td>3</td>
<td>Диплом</td>
<td>5 400 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">Мастер маникюра</a></td>
<td>Классический, аппаратный маникюр, гель-лак</td>
<td>3–7 недель</td>
<td>56</td>
<td>14</td>
<td>7</td>
<td>Диплом специалиста</td>
<td>17 700 ₽</td>
<td>50%</td>
<td>3 000 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Наращивание, уход за ногтями</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>2</td>
<td>Диплом специалиста</td>
<td>8 300 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курсы наращивания ногтей акрилом и полигелем</a></td>
<td>Моделирование ногтей</td>
<td>1 месяц</td>
<td>32</td>
<td>8</td>
<td>4</td>
<td>Сертификат</td>
<td>14 700 ₽</td>
<td>50%</td>
<td>4 900 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курс педикюра</a></td>
<td>Классический, аппаратный, SPA-педикюр</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Сертификат</td>
<td>7 400 ₽</td>
<td>50%</td>
<td>Удобные условия оплаты</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">Курсы повышения квалификации по маникюру</a></td>
<td>Работа с гель-лаком, дизайн</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом</td>
<td>8 300 ₽</td>
<td>50%</td>
<td>4 150 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание</td>
<td>2-3 месяца</td>
<td>88</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>26 400 ₽</td>
<td>50%</td>
<td>4 400 ₽/мес.</td>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 месяц</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Подходит</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 900 ₽</span> <span class="rating-count"><del>19 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в особые периоды</p>
<p><strong>📍 Адрес:</strong> Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Тюмени</strong> — отличное начало для тех, кто хочет освоить профессию в индустрии красоты.</p>
<p>Программа обучения охватывает основные техники работы с гель-лаком, коррекцию ногтей и уход за ними.</p>
<p>За <span class="price-highlight">24 ак. часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит для тех, кто желает быстро начать карьеру и получить базу знаний для дальнейшего роста.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
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
<td>Классический маникюр</td>
</tr>
<tr>
<td>📈 Технологии</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Аппаратный маникюр</td>
</tr>
<tr>
<td>🎨 Гель-лак</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Нанесение и снятие гель-лака</td>
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
<li>🎯 Работать с гель-лаком, создавать стойкие покрытия</li>
<li>🧰 Осуществлять коррекцию и укладку ногтей</li>
<li>🎨 Создавать дизайн ногтей на основе основных техник</li>
<li>🌸 Проводить уходовые процедуры за ногтями</li>
<li>📋 Подтверждать квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2–3 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 400 ₽</span> <span class="rating-count"><del>10 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в определённые периоды.</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail-design" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Дизайн ногтей»</strong> в <strong>Тюмени</strong> — идеальное обучение для тех, кто хочет освоить современные техники маникюра.</p>
<p>Учебная программа включает в себя создание более 20 уникальных дизайнов, таких как акварель, вензеля и эффект хрустальных камней.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт как начинающим, так и мастерам, желающим повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
<span><strong>3</strong> процедур</span>
<span><strong>2–3</strong> недели</span>
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
<td>Классический маникюр, подготовка ногтей</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Акварель, эффект мрамора, вензеля</td>
</tr>
<tr>
<td>💎 Эффекты и декор</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Фольга, стразы, втирка</td>
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
<li>💅 Создавать оригинальный дизайн ногтей</li>
<li>🎯 Работать с акварельными техниками</li>
<li>🧰 Использовать различные элементы декора</li>
<li>🎨 Заниматься трудоёмкими дизайн-техниками</li>
<li>🌸 Повышать свою стоимость услуг</li>
<li>📋 Оформлять портфолио для работы</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">17 700 ₽</span> <span class="rating-count"><del>35 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на период ограниченной акции</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Тюмени</strong> — отличный выбор для тех, кто хочет начать карьеру в beauty-индустрии.</p>
<p>В программе включены основы классического и современного маникюра, покрытие гель-лаком и дизайн ногтей.</p>
<p>За <span class="price-highlight">56 академических часов</span> студенты получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для мастеров с опытом, желающих повысить квалификацию.</p>
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
<span><strong>3-7</strong> недель</span>
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
<td>Выравнивание, френч, SPA-маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Геометрические рисунки, акварель, декорирования ногтей</td>
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
<li>🎨 Создавать дизайн: геометрию, акварель, втирку, фольгу</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 300 ₽</span> <span class="rating-count"><del>16 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период максимальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Тюмени</strong> — идеальный выбор для тех, кто хочет освоить востребованную профессию в индустрии красоты.</p>
<p>Программа охватывает техники наращивания ногтей с использованием геля, предложения по дизайну, уходу за ногтевой пластиной и кутикулой.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет усовершенствовать свои навыки и занять стабильную позицию в индустрии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> отработки на практике</span>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники наращивания, работа с гелем</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Создание дизайна искусственных ногтей</td>
</tr>
<tr>
<td>🔧 Уход за ногтями</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Уход за ногтевой пластиной и кутикулой</td>
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
<li>💅 Моделировать длинные ногти</li>
<li>🎯 Осваивать полимеризацию</li>
<li>🧰 Качественно удалять покрытие</li>
<li>🎨 Создавать дизайн наращённых ногтей</li>
<li>🌸 Ухаживать за ногтевой пластиной и кутикулой</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки: На страницу курса -->
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
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 700 ₽</span> <span class="rating-count"><del>29 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail_extension" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей акрилом и полигелем»</strong> в <strong>Тюмени</strong> — идеальный выбор для желающих стать мастерами ногтевого сервиса.</p>
<p>Программа охватывает современные техники наращивания ногтей и их коррекции, включая использование акрила и полигеля.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки в наращивании ногтей.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>4</strong> отработки</span>
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
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Основы наращивания, акрил, полигель</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Наращивание на моделях</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Декорирование, френч, аквадизайн</td>
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
<li>💅 Моделировать ногти акрилом и полигелем</li>
<li>🎯 Работать с необходимыми материалами в различных техниках</li>
<li>🧰 Выполнять интересный дизайн и коррекцию</li>
<li>🎨 Создавать нужные формы ногтей</li>
<li>🌈 Производить ремонт и восстановление ногтей</li>
<li>📋 Правильно снимать наращенные ногти</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 200 ₽</span> <span class="rating-count"><del>60 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в текущем предложении.</p>
<p><strong>📍 Адрес:</strong> Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Тюмени</strong> — идеальный выбор для новичков и действующих специалистов, желающих повысить свою квалификацию.</p>
<p>В программе изучаются техники наращивания ногтей гелем и акрилом, а также создание дизайна.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет тем, кто хочет начать карьеру в nail-индустрии или повысить свою ценность на рынке труда.</p>
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
<td>🔰 Базовый маникюр</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Классический, аппаратный, комбинированный маникюр</td>
</tr>
<tr>
<td>📈 Наращивание гелем</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Основы наращивания, дизайн ногтей</td>
</tr>
<tr>
<td>🎨 Наращивание акрилом</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Техника наращивания, коррекция формы</td>
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
<li>🎯 Осваивать наращивание ногтей гелем и акрилом</li>
<li>🖌️ Создавать уникальные дизайны для ногтей</li>
<li>🔧 Проводить коррекцию и ремонт ногтей</li>
<li>🌼 Работать с реальными клиентами</li>
<li>📋 Получить диплом специалиста, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 150 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 300 ₽</span> <span class="rating-count"><del>16 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452260000">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы повышения квалификации по маникюру»</strong> в <strong>Тюмени</strong> — отличная возможность для мастеров провести обновление знаний и освоить современные техники ухода за ногтями.</p>
<p>Программа включает работу с гель-лаком, создание стильных бликов и уход за ногтями "под кутикулу".</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">документ об окончании курса</span>.</p>
<p>Идеально подходит как начинающим, так и опытным мастерам, которые хотят повысить свою квалификацию.</p>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с гель-лаком, создание бликов</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Выравнивание ногтевой пластины, маникюр "под кутикулу"</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Французский маникюр, SPA маникюр</td>
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
<li>💅 Работа с гель-лаком</li>
<li>🎯 Создание стильных бликов</li>
<li>🧰 Выравнивание ногтевой пластины</li>
<li>🖌️ Маникюр "под кутикулу"</li>
<li>🌸 Выполнение французского маникюра</li>
<li>📋 Подтверждение квалификации дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 400 ₽</span> <span class="rating-count"><del>52 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период специальных предложений</p>
<p><strong>📍 Адрес:</strong> ул. Республики 157/1, Тюмень</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Тюмени</strong> — отличный выбор для начинающих и опытных мастеров, желающих развить свои навыки в маникюре и педикюре.</p>
<p>Программа включает изучение современных техник маникюра, педикюра и дизайна ногтей, адаптированных под потребности клиентов.</p>
<p>За <span class="price-highlight">88 академических часов</span> слушатели получают обширную практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт не только новичкам, но и мастерам, желающим расширить свои профессиональные горизонты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>88</strong> ак. часов</span> <span><strong>22</strong> урока</span> <span><strong>14</strong> процедур</span> <span><strong>2-3</strong> месяца</span>
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
<td>Классический, аппаратный, комбинированный маникюр, работа с шеллаком</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Выравнивание, французский маникюр, SPA-маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Акварельная техника, декорирование, геометрические рисунки</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Обрезной и европейский педикюр, комбинированные техники</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Способы наращивания, дизайн нарощенных ногтей</td>
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
<li>🎯 Создавать сложные дизайны и нейл-арт</li>
<li>🧰 Осваивать техники наращивания и укрепления ногтей</li>
<li>🎨 Проводить SPA-процедуры для рук и ног</li>
<li>🌸 Работать с реальными клиентами и создавать портфолио</li>
<li>📋 Получить диплом специалиста, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Удобные условия оплаты</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 400 ₽</span> <span class="rating-count"><del>14 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Тюмени</strong> — это отличная возможность для всех, кто хочет научиться выполнять эстетический педикюр и освоить востребованные техники.</p>
<p>В программе обучение классическому, аппаратному, SPA- и экспресс-педикюру, с максимальным количеством практики на реальных клиентах.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет повысить свою квалификацию в области педикюра.</p>
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
<td>Классический и аппаратный педикюр</td>
</tr>
<tr>
<td>📈 SPA-педикюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>SPA-техники и экспресс-педикюр</td>
</tr>
<tr>
<td>🎨 Комбинированные техники</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Сочетание разных подходов к педикюру</td>
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
<li>💅 Выполнять классический, аппаратный и комбинированный педикюр</li>
<li>🎯 Работать с педикюрным аппаратом и фрезами</li>
<li>🧰 Применять SPA-техники для ног</li>
<li>🎨 Создавать качественный дизайн ногтей и стоп</li>
<li>🌸 Осваивать особенности работы с моделями</li>
<li>📋 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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