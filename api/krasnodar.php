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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-art" target="_blank">Курс дизайна ногтей</a></td>
<td>Уникальные дизайны, акварель, вензеля</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>0</td>
<td>Диплом специалиста</td>
<td>6 800 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">Мастер маникюра и педикюра</a></td>
<td>Классический, аппаратный маникюр, SPA-уход</td>
<td>2-4 месяца</td>
<td>104</td>
<td>26</td>
<td>13</td>
<td>Диплом специалиста</td>
<td>27 900 ₽</td>
<td>50%</td>
<td>4 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-extensions" target="_blank">Курсы наращивания ногтей</a></td>
<td>Наращивание, коррекция ногтей с использованием геля</td>
<td>1 месяц</td>
<td>56</td>
<td>7</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>16 100 ₽</td>
<td>50%</td>
<td>2 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/pedicure" target="_blank">Курсы педикюра</a></td>
<td>Классический, аппаратный, SPA-педикюр</td>
<td>2 месяца</td>
<td>40</td>
<td>10</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>14 000 ₽</td>
<td>50%</td>
<td>4 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание</td>
<td>2-5 месяцев</td>
<td>176</td>
<td>40</td>
<td>21</td>
<td>Диплом специалиста</td>
<td>43 000 ₽</td>
<td>50%</td>
<td>4 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">Мастер маникюра и моделирования ногтей</a></td>
<td>Классический маникюр, наращивание, дизайн</td>
<td>2-4 месяца</td>
<td>136</td>
<td>30</td>
<td>10</td>
<td>Диплом специалиста</td>
<td>33 500 ₽</td>
<td>50%</td>
<td>3 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/manicure-master" target="_blank">Курс мастера маникюра</a></td>
<td>Гель-лак, френч, дизайн</td>
<td>1-2 месяца</td>
<td>64</td>
<td>16</td>
<td>8</td>
<td>Диплом мастера</td>
<td>15 400 ₽</td>
<td>50%</td>
<td>2 600 ₽/мес.</td>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>13 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в период действия специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-art" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-art" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Краснодаре</strong> — это идеальный старт для всех, кто хочет освоить искусство создания уникальных дизайнов ногтей.</p>
<p>Программа включает изучение популярных техник, таких как акварель, вензеля и эффект хрустальных камней.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет улучшить свои навыки и повысить свою конкурентоспособность в индустрии красоты.</p>
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
<td>Основы маникюра, гигиена</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Акварель, эффект хрустальных камней</td>
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
<li>💅 Выполнять уникальные дизайны в разных техниках</li>
<li>🎨 Создавать акварельные росписи на ногтях</li>
<li>🌌 Осваивать вензеля и стиль тату</li>
<li>💎 Работать с эффектом хрустальных камней</li>
<li>🖌️ Развивать собственный стиль дизайна</li>
<li>📋 Завести портфолио с яркими работами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-art" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">27 900 ₽</span> <span class="rating-count"><del>55 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в преддверии начала обучения.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и педикюра»</strong> в <strong>Краснодаре</strong> — отличный выбор для тех, кто хочет освоить востребованную профессию в beauty-индустрии.</p>
<p>Программа включает техники классического, аппаратного маникюра и педикюра, SPA-уход, а также навыки работы с гель-лаком и дизайном.</p>
<p>За <span class="price-highlight">104 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто хочет улучшить свои навыки и квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>104</strong> ак. часов</span> <span><strong>26</strong> уроков</span> <span><strong>13</strong> процедур</span> <span><strong>2-4</strong> месяца</span>
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
<td>Классический, аппаратный, покрытие, spa-маникюр</td>
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
<li>💅 Мастерство в выполнении различных видов маникюра</li>
<li>🎯 Работа с гель-лаком и создание стойкого покрытия</li>
<li>🧰 Умение проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 Создание уникальных дизайнов и SPA-уход</li>
<li>🌸 Выполнение различных видов педикюра</li>
<li>📋 Подтверждение квалификации дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">16 100 ₽</span> <span class="rating-count"><del>32 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в текущий период.</p>
<p><strong>📍 Адрес:</strong> Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-extensions" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-extensions" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей»</strong> в <strong>Краснодаре</strong> — это идеальный вариант для тех, кто хочет попробовать себя в индустрии красоты.</p>
<p>Программа включает в себя техники наращивания на нижние и верхние формы, работу с гелем и полигелем.</p>
<p>За <span class="price-highlight">56 академических часов</span> студенты получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет улучшить свои навыки и расширить клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>7</strong> уроков</span>
<span><strong>5</strong> отработок</span>
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
<td><span class="price-highlight">24 ч / 3 урока</span></td>
<td>Основы маникюра и наращивания</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">32 ч / 4 урока</span></td>
<td>Современные техники наращивания, коррекция, френч</td>
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
<li>💅 Наращивание ногтей с использованием геля и полигеля</li>
<li>🎯 Моделирование ногтей как на нижних, так и на верхних формах</li>
<li>🧰 Выполнение коррекции и ремонта ногтей</li>
<li>🎨 Создание френча и сложных форм ногтей</li>
<li>🌸 Работа с современными материалами для наращивания</li>
<li>📋 Подтверждение квалификации дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/nail-extensions" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 000 ₽</span> <span class="rating-count"><del>28 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/pedicure" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы педикюра»</strong> в <strong>Краснодаре</strong> — прекрасный выбор для начинающих и практикующих специалистов, желающих улучшить свои навыки в области педикюра.</p>
<p>Вы изучите профессиональные техники, включая SPA-педикюр и коррекцию формы ногтей.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный вариант для карьерного роста и повышения квалификации.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>Классический и SPA-педикюр</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Работа с инструментами и фрезами</td>
</tr>
<tr>
<td>🎨 Дизайн и покрытие</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Техники покрытия и экспресс-педикюр</td>
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
<li>🎯 Создавать стильные образы с помощью дизайна</li>
<li>🛠️ Работать с современными инструментами</li>
<li>🌟 Устранять микротрещины и натоптыши</li>
<li>📋 Получать диплом специалиста по окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 000 ₽</span> <span class="rating-count"><del>86 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период распродаж</p>
<p><strong>📍 Адрес:</strong> ул. Северная, д. 490, Краснодар</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-nail-service-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Краснодаре</strong> — идеальный старт для начинающих мастеров в индустрии красоты и тех, кто хочет расширить свои навыки в маникюре и педикюре.</p>
<p>Программа охватывает классические и современные техники маникюра и педикюра, включает наращивание ногтей, дизайн и SPA-уход.</p>
<p>За <span class="price-highlight">176 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто уже работает в сфере ногтевого сервиса.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>176</strong> ак. часов</span> <span><strong>40</strong> уроков</span> <span><strong>21</strong> процедур</span> <span><strong>2-5</strong> месяцев</span>
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
<td>Классический, аппаратный, Spa-маникюр и дизайн</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, стили тату и акварель, уникальный френч</td>
</tr>
<tr>
<td>👣 Педикюр</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Классический, аппаратный, дисковый и экспресс-педикюр</td>
</tr>
<tr>
<td>🛠️ Наращивание ногтей</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем, полигелем, моделирование и коррекция</td>
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
<li>💅 Выполнять маникюр и педикюр всех видов</li>
<li>🌈 Создавать уникальные дизайны ногтей в различных техниках</li>
<li>🔍 Работа с различными методами наращивания ногтей</li>
<li>🧴 Проводить SPA-процедуры для здоровья и красоты рук</li>
<li>📋 Подтвердить квалификацию дипломом после обучения</li>
<li>🏆 Открыть собственное дело или работать в салоне</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">33 500 ₽</span> <span class="rating-count"><del>67 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в данный период действует привлекательная акция.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и моделирования ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и моделирования ногтей»</strong> в <strong>Краснодаре</strong> — это идеальный старт для тех, кто хочет освоить востребованные техники маникюра и моделирования ногтей.</p>
<p>Программа обучения включает современные подходы к маникюру, наращиванию и дизайну ногтей.</p>
<p>За <span class="price-highlight">136 академических часов</span> студенты получают практические навыки на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто уже работает в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>136</strong> ак. часов</span>
<span><strong>30</strong> уроков</span>
<span><strong>10</strong> процедур</span>
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
<td>🔰 Основы маникюра</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический и аппаратный маникюр, Spa-маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, стиль тату, акварель</td>
</tr>
<tr>
<td>🔧 Наращивание ногтей</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем и полигелем, моделирование</td>
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
<li>🎯 Работать с гелем и полигелем для наращивания ногтей</li>
<li>🧰 Создавать уникальные дизайны ногтей разной сложности</li>
<li>🎨 Владеть различными техниками дизайна: акварель, френч</li>
<li>🌸 Оказывать услуги SPA-маникюра и парафинотерапии</li>
<li>📋 Получить диплом, подтверждающий квалификацию мастер-маникюра</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс мастера маникюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс мастера маникюра</div>
<h2>Курс мастера маникюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часа</span> (1-2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 400 ₽</span> <span class="rating-count"><del>30 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> по акции.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/manicure-master" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/manicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс мастера маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс мастера маникюра»</strong> в <strong>Краснодаре</strong> — отличный выбор для тех, кто хочет стать профессионалом в индустрии красоты.</p>
<p>Приобретите навыки работы с гель-лаком, френчем и дизайном для создания уникальных образов.</p>
<p>За <span class="price-highlight">64 академических часа</span> участники получают практику на реальных клиентах и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс идеально подходит для новичков и тех, кто желает углубить свои знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часов</span>
<span><strong>16</strong> уроков</span>
<span><strong>8</strong> процедур</span>
<span><strong>1-2</strong> месяца</span>
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
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Классический, European и аппаратный маникюр</td>
</tr>
<tr>
<td>📈 Техники дизайна</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Ремонт ногтей, френч, сложные дизайны</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>SPA-маникюр, парафинотерапия, уход</td>
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
<li>🎯 Работать с гель-лаком и выполнять сложный дизайн</li>
<li>🧰 Ремонт и укрепление ногтей</li>
<li>🎨 Создавать уникальные образы и выполнять маникюр под кутикулу</li>
<li>🌸 Общаться с клиентами и грамотно продавать услуги</li>
<li>📋 Получить диплом мастера в сфере красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/manicure-school/manicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
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