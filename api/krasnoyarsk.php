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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/pedicure" target="_blank">Курс педикюра</a></td>
<td>Современные техники SPA-педикюра</td>
<td>2 месяца</td>
<td>40</td>
<td>10</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>16 200 ₽</td>
<td>50%</td>
<td>2 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-art" target="_blank">Курс дизайна ногтей</a></td>
<td>Акварель, уникальный френч, вензеля</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>0</td>
<td>Диплом специалиста</td>
<td>7 200 ₽</td>
<td>50%</td>
<td>3 600 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-extensions" target="_blank">Курсы наращивания ногтей</a></td>
<td>Технологии по наращиванию и коррекции</td>
<td>1 месяц</td>
<td>56</td>
<td>7</td>
<td>5</td>
<td>Диплом мастера красоты</td>
<td>18 600 ₽</td>
<td>50%</td>
<td>3 100 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/manicure-master" target="_blank">Курс мастера маникюра</a></td>
<td>Работы с гель-лаком и френчем</td>
<td>1-2 месяца</td>
<td>64</td>
<td>16</td>
<td>8</td>
<td>Диплом мастера</td>
<td>22 600 ₽</td>
<td>50%</td>
<td>3 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">Мастер маникюра и педикюра</a></td>
<td>SPA-педикюр и маникюр</td>
<td>2-4 месяца</td>
<td>104</td>
<td>26</td>
<td>13</td>
<td>Диплом специалиста</td>
<td>34 800 ₽</td>
<td>50%</td>
<td>3 900 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр и дизайн</td>
<td>2-5 месяцев</td>
<td>176</td>
<td>40</td>
<td>21</td>
<td>Диплом специалиста</td>
<td>51 700 ₽</td>
<td>50%</td>
<td>5 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">Мастер маникюра и моделирования ногтей</a></td>
<td>Классический и аппаратный маникюр</td>
<td>2-4 месяца</td>
<td>136</td>
<td>30</td>
<td>15</td>
<td>Диплом специалиста</td>
<td>41 200 ₽</td>
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
<!-- Главная карточка "Курс педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс педикюра</div>
<h2>Курс педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">16 200 ₽</span> <span class="rating-count"><del>32 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение при записи в ближайшие группы</p>
<p><strong>📍 Адрес:</strong> г. Красноярск, ул. Батурина, 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/pedicure" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Красноярске</strong> — идеальный выбор для тех, кто хочет освоить профессиональные навыки в области педикюра.</p>
<p>В программе обучения вы изучите современные техники SPA-педикюра, коррекцию формы и уход за ногами.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс поможет вам стать квалифицированным мастером и расширить спектр услуг для клиентов.</p>
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
<td>🔰 Основы педикюра</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Классический педикюр, SPA-педикюр, уход</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Работа с фрезами, уход за огрубевшей кожей</td>
</tr>
<tr>
<td>🎨 Дизайн и покрытие</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Гель-лак, френч, секреты качественного покрытия</td>
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
<li>🧷 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>👣 Проводить SPA-педикюр и уходовые процедуры</li>
<li>📋 Оформить квалификацию дипломом специалиста</li>
<li>💼 Стартовать карьеру мастера педикюра</li>
<li>✨ Давать грамотные рекомендации клиентам</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Лицензированное учебное заведение</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (2 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в данный период.</p>
<p><strong>📍 Адрес:</strong> г. Красноярск, ул. Батурина, 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-art" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-art" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Красноярске</strong> — отличный выбор для всех, кто хочет развить навыки в сфере nail-art.</p>
<p>Программа включает популярные техники, такие как акварель, вензеля, уникальный френч и эффект хрустальных камней.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный курс для новичков и тех, кто желает улучшить свои навыки в дизайне ногтей.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>0</strong> процедур</span>
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
<td>Основы дизайна, техника акварель</td>
</tr>
<tr>
<td>🎨 Дизайны</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Вензеля, стиль тату</td>
</tr>
<tr>
<td>✨ Эффекты</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
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
<li>💅 Выполнять акварельный дизайн</li>
<li>🎨 Создавать вензеля на ногтях</li>
<li>✨ Работать с эффектом хрустальных камней</li>
<li>🖌️ Делать стильный френч и его вариации</li>
<li>🌈 Разрабатывать авторские дизайны для клиентов</li>
<li>📋 Получить сертификат специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-art" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">56 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 600 ₽</span> <span class="rating-count"><del>37 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> - привлекательное предложение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Красноярск, ул. Батурина, д. 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-extensions" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-extensions" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей»</strong> в <strong>Красноярске</strong> — это идеальный вариант для желающих стать востребованным мастером ногтевого сервиса.</p>
<p>Программа включает изучение современных методик моделирования, ремонта и коррекции ногтей с акцентом на практические навыки.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет повысить свою квалификацию и расширить клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>7</strong> уроков</span>
<span><strong>5</strong> отработок на практике</span>
<span><strong>1</strong> месяц</span>
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
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Работа с гелем и полигелем, моделирование на нижних формах</td>
</tr>
<tr>
<td>📈 Технологии моделирования</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Наращивание на верхних формах, френч</td>
</tr>
<tr>
<td>🎨 Коррекция</td>
<td><span class="price-highlight">24 ч / 7 уроков</span></td>
<td>Методы коррекции, сложные формы ногтей</td>
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
<li>💅 Моделировать ногти на нижних и верхних формах</li>
<li>🎯 Работать с гелем и полигелем</li>
<li>🧰 Выполнять идеальную выкладку френча</li>
<li>🎨 Применять методы коррекции наращенных ногтей</li>
<li>🌸 Овладевать навыками создания сложных форм: стилет, балерина и другие</li>
<li>📋 Подтвердить квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/nail-extensions" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастера маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастера маникюра</div>
<h2>Курс мастера маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 600 ₽</span> <span class="rating-count"><del>45 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в период акций</p>
<p><strong>📍 Адрес:</strong> Красноярск, ул. Батурина, д. 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/manicure-master" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/manicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастера маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс мастера маникюра»</strong> в <strong>Красноярске</strong> — идеальный старт для желающих освоить профессию маникюриста.</p>
<p>Программа включает техники гель-лака, френч и различные дизайны ногтей.</p>
<p>За <span class="price-highlight">64 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс подойдёт как начинающим, так и тем, кто хочет укрепить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часов</span>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический, аппаратный маникюр, гель-лак</td>
</tr>
<tr>
<td>📈 Продвинутый маникюр</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Френч, дизайн, текстуры</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Акварель, втирка, фольга</td>
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
<li>💅 Овладеете всеми техниками маникюра</li>
<li>🎯 Научитесь работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Освоите профессиональное выполнение дизайна ногтей</li>
<li>📋 Получите диплом мастера, подтверждающий вашу квалификацию</li>
<li>🌈 Научитесь общению с клиентами и продвижению своих услуг</li>
<li>🌸 Укрепите навыки в обслуживании и удовлетворении потребностей клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/manicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 900 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">34 800 ₽</span> <span class="rating-count"><del>69 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Красноярск, ул. Батурина, 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и педикюра»</strong> в <strong>Красноярске</strong> — отличный выбор для начинающих и тех, кто хочет повысить квалификацию в beauty-сфере.</p>
<p>На курсе вы изучите техники гель-лака, SPA-педикюра и работу с профессиональными инструментами.</p>
<p>За <span class="price-highlight">104 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и профессионалов, стремящихся расширить свои навыки.</p>
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
<td>🔰 Маникюр</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический, аппаратный, SPA, дизайн ногтей</td>
</tr>
<tr>
<td>📈 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический, аппаратный, дисковый, экспресс-педикюр</td>
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
<li>💅 Делать все виды маникюра, включая SPA</li>
<li>🎯 Работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 Проводить эстетический педикюр различных видов</li>
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🌸 Выполнять диагностику стоп и подбирать виды педикюра</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">176 ак. часов</span> (2-5 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 800 ₽/мес.</span> (на 9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">51 700 ₽</span> <span class="rating-count"><del>103 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на регулярной основе</p>
<p><strong>📍 Адрес:</strong> г. Красноярск, ул. Батурина, д. 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-nail-service-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Красноярске</strong> — отличное решение для начинающих мастеров и специалиста, желающих расширить свои навыки.</p>
<p>Программа охватывает классические и современные техники маникюра и педикюра, наращивание ногтей, дизайн и SPA-уход.</p>
<p>За <span class="price-highlight">176 академических часов</span> слушатели получают практические навыки на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для всех, кто хочет стать универсальным мастером и найти работу в салоне или начать частную практику.</p>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический маникюр, аппаратный маникюр, покрытие и ремонт ногтей</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, стили тату, уникальный френч, эффект хрустальных камней</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический педикюр, аппаратный педикюр, экспресс-педикюр</td>
</tr>
<tr>
<td>💪 Наращивание ногтей</td>
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
<li>🎯 Создавать уникальный дизайн ногтей</li>
<li>🧰 Работать с различными материалами для наращивания ногтей</li>
<li>🎨 Выполнять pedicure различными техниками</li>
<li>🌸 Оказывать Spa-уход за руками и ногами</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 600 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">41 200 ₽</span> <span class="rating-count"><del>82 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в предстоящем наборе</p>
<p><strong>📍 Адрес:</strong> г. Красноярск, ул. Батурина, д. 38а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73919867754">+7 (391) 986-77-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">krasnoyarsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и моделирования ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и моделирования ногтей»</strong> в <strong>Красноярске</strong> — идеальный выбор для начинающих и опытных специалистов, желающих освоить востребованные техники и дизайны в ногтевом сервисе.</p>
<p>Программа охватывает классический и аппаратный маникюр, наращивание ногтей, а также современные технологии дизайна, включая френч и акварель.</p>
<p>За <span class="price-highlight">136 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих мастеров и тех, кто хочет расширить спектр своих услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>136</strong> ак. часов</span>
<span><strong>30</strong> уроков</span>
<span><strong>15</strong> процедур</span>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический, аппаратный маникюр, Spa-маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, уникальный френч</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем и полигелем, моделирование на верхних и нижних формах</td>
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
<li>🎨 Создавать уникальные дизайны ногтей в различных техниках</li>
<li>🛠️ Работать с гелем, полигелем и другими материалами для наращивания</li>
<li>🌈 Усовершенствовать навыки дизайна, включая акварель и френч</li>
<li>🧖‍♀️ Проводить Spa-процедуры и ухаживать за кожей рук</li>
<li>📜 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnoyarsk.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank" class="order-button">📘 На страницу курса</a>
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