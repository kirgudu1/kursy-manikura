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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">Мастер маникюра и педикюра</a></td>
<td>Все виды маникюра и педикюра</td>
<td>2-4 месяца</td>
<td>104</td>
<td>20</td>
<td>13</td>
<td>Диплом специалиста</td>
<td>46 900 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/pedicure" target="_blank">Курс педикюра</a></td>
<td>SPA-педикюр, коррекция ногтей</td>
<td>2 месяца</td>
<td>40</td>
<td>10</td>
<td>5</td>
<td>Диплом специалиста</td>
<td>19 500 ₽</td>
<td>50%</td>
<td>3 200 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание</td>
<td>2-5 месяцев</td>
<td>176</td>
<td>34</td>
<td>21</td>
<td>Диплом специалиста</td>
<td>75 500 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">Мастер маникюра и моделирования ногтей</a></td>
<td>Наращивание ногтей, Spa-маникюр</td>
<td>2-4 месяца</td>
<td>136</td>
<td>30</td>
<td>8</td>
<td>Диплом специалиста</td>
<td>57 600 ₽</td>
<td>50%</td>
<td>4 800 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-extensions" target="_blank">Курс наращивания ногтей</a></td>
<td>Работа с гелем и полигелем</td>
<td>1 месяц</td>
<td>56</td>
<td>8</td>
<td>5</td>
<td>Диплом мастера красоты</td>
<td>35 200 ₽</td>
<td>50%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-art" target="_blank">Курс дизайна ногтей</a></td>
<td>Создание уникальных дизайнов</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>0</td>
<td>Сертификат</td>
<td>8 700 ₽</td>
<td>50%</td>
<td>2 900 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/manicure-master" target="_blank">Курс мастера маникюра</a></td>
<td>Классический, аппаратный маникюр</td>
<td>1-2 месяца</td>
<td>64</td>
<td>16</td>
<td>8</td>
<td>Диплом мастера</td>
<td>24 000 ₽</td>
<td>50%</td>
<td>4 000 ₽/мес.</td>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">46 900 ₽</span> <span class="rating-count"><del>93 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> во время акций</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и педикюра»</strong> в <strong>Мытищах</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа включает в себя техники маникюра, SPA-педикюра и работу с профессиональными инструментами.</p>
<p>За <span class="price-highlight">104 академических часов</span> слушатели получают практическую отработку навыков и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для новичков, так и для специалистов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>104</strong> ак. часов</span>
<span><strong>20</strong> уроков</span>
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
<td>🔰 Блок маникюра</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический, аппаратный, SPA-маникюр; покрытие гель-лаком</td>
</tr>
<tr>
<td>🔰 Блок педикюра</td>
<td><span class="price-highlight">40 ч / 4 урока</span></td>
<td>Классический, аппаратный, дисковый, экспресс-педикюр</td>
</tr>
<tr>
<td>🔰 Дополнительные материалы</td>
<td><span class="price-highlight">0 ч / 0 уроков</span></td>
<td>Гайды и пособия в подарок</td>
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
<li>💅 Выполнять все виды маникюра и педикюра</li>
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🧰 Работать с гель-лаком и обеспечивать идеальное покрытие</li>
<li>📋 Диагностировать состояние стоп и подбирать подходящий педикюр</li>
<li>🌟 Уверенно взаимодействовать с клиентами и повышать свою компетенцию</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-manicure-pedicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 500 ₽</span> <span class="rating-count"><del>39 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в условиях текущих акций.</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23, БЦ "Айсберг"</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/pedicure" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/pedicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Мытищах</strong> — идеальный выбор для начинающих специалистов в индустрии красоты.</p>
<p>Программа охватывает SPA-педикюр, коррекцию формы ногтей, работу с современными инструментами.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подойдет для тех, кто хочет освоить профессии педикюриста и создать индивидуальные образы для клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>5</strong> отработок</span>
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
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классический и SPA-педикюр, диагностика стопы</td>
</tr>
<tr>
<td>📈 Аппаратный педикюр</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Использование фрез и аппаратные техники</td>
</tr>
<tr>
<td>🎨 Декор и дизайн</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Френч, гель-лак, экспресс-педикюр</td>
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
<li>💅 Проводить классический и аппаратный педикюр</li>
<li>🎯 Работать с современными инструментами и фрезами</li>
<li>🧰 Выполнять коррекцию формы ногтей</li>
<li>🎨 Создавать красивые образы с использованием дизайна</li>
<li>🌸 Обеспечивать уход за ногами и решить проблемы со стопами</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/pedicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">75 500 ₽</span> <span class="rating-count"><del>151 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> - специальное предложение.</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23, БЦ "Айсберг"</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-nail-service-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Мытищах</strong> — отличный старт для тех, кто хочет развиваться в индустрии красоты.</p>
<p>Программа охватывает как классические, так и современные техники маникюра и педикюра, включая наращивание и дизайн.</p>
<p>За <span class="price-highlight">176 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим мастерам, так и тем, кто хочет расширить свои навыки и стать универсальным специалистом.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>176</strong> ак. часов</span> <span><strong>34</strong> урока</span> <span><strong>21</strong> процедур</span> <span><strong>2-5</strong> месяцев</span>
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
<td>Классический, аппаратный маникюр, Spa-маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, уникальный френч</td>
</tr>
<tr>
<td>📦 Педикюр</td>
<td><span class="price-highlight">40 ч / 4 урока</span></td>
<td>Классический, аппаратный, экспресс-педикюр</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем, моделирование ногтей</td>
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
<li>🎨 Создавать уникальные дизайны ногтей в различных техниках</li>
<li>🦶 Проводить различные виды педикюра</li>
<li>🌟 Научитесь наращивать ногти и работать с различными материалами</li>
<li>📝 Подтвердите квалификацию дипломом специалиста</li>
<li>🌍 Найдите работу или откройте собственный бизнес</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-nail-service-master" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (12 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">57 600 ₽</span> <span class="rating-count"><del>115 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в ходе текущих предложений</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра и моделирования ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра и моделирования ногтей»</strong> в <strong>Мытищах</strong> — это идеальное решение для начинающих и опытных специалистов, желающих углубить свои знания в маникюре и наращивании ногтей.</p>
<p>Студенты изучают современные тренды, востребованные техники и профессиональные дизайны ногтей.</p>
<p>За <span class="price-highlight">136 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для мастеров, желающих расширить свои услуги в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>136</strong> ак. часов</span>
<span><strong>30</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">64 ч / 16 уроков</span></td>
<td>Классический и аппаратный маникюр, Spa-маникюр и дизайн</td>
</tr>
<tr>
<td>🌈 Дизайн</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Имитация камня, акварель, уникальный френч</td>
</tr>
<tr>
<td>🛠️ Наращивание</td>
<td><span class="price-highlight">56 ч / 10 уроков</span></td>
<td>Работа с гелем и полигелем, моделирование</td>
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
<li>🎨 Создавать уникальные дизайны ногтей</li>
<li>🧰 Моделировать ногти с использованием геля и полигеля</li>
<li>🌟 Проводить Spa-маникюр и парафинотерапию</li>
<li>🎯 Работать с разными техниками дизайна, включая акварель и френч</li>
<li>📋 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/programm-master-manikyura-i-modelirovaniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">56 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">35 200 ₽</span> <span class="rating-count"><del>70 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в данный период</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23, БЦ "Айсберг"</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-extensions" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-extensions" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс наращивания ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс наращивания ногтей»</strong> в <strong>Мытищах</strong> — это идеальная возможность для начинающих и тех, кто желает повысить квалификацию в ногтевом сервисе.</p>
<p>Программа включает в себя техники наращивания ногтей на нижние и верхние формы, работу с гелем и полигелем, а также современные материалы.</p>
<p>За <span class="price-highlight">56 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит для тех, кто хочет стать востребованным специалистом в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>56</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>5</strong> отработок на практике</span>
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
<td>🔰 Моделирование с гелем</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Основы работы с гелем и полигелем, наращивание на нижних формах</td>
</tr>
<tr>
<td>📈 Моделирование верхними формами</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Технологии наращивания на верхних формах</td>
</tr>
<tr>
<td>🎨 Выкладка френча</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Архитектура ногтевого ложа, симметрия френча</td>
</tr>
<tr>
<td>🔧 Методы коррекции</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Коррекция и перенаращивание ногтей</td>
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
<li>💅 Выполнять наращивание ногтей на нижние и верхние формы</li>
<li>💎 Работать с гелем и полигелем, создавать стойкие покрытия</li>
<li>🎯 Изготавливать френч с четкой линией улыбки</li>
<li>🔧 Проводить коррекцию и перенаращивание ногтей</li>
<li>✏️ Применять современные техники моделирования</li>
<li>📋 Подтвердить квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-extensions" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 900 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>17 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в ограниченный период времени</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, 23, БЦ "Айсберг"</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-art" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-art" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Мытищах</strong> — идеальное начало для тех, кто хочет создавать уникальные дизайны маникюра.</p>
<p>Программа охватывает современные техники: акварель, вензеля, эффект хрустальных камней и уникальный френч.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Подходит для начинающих и опытных мастеров, желающих расширить свои навыки в дизайне ногтей.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>💅 Техники дизайна</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Акварель, вензеля, хрустальные камни</td>
</tr>
<tr>
<td>🎨 Уникальный френч</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Френч-градиент, цветной и двойной френч</td>
</tr>
<tr>
<td>🌟 Эффекты</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Совмещение стилей, новые подходы к дизайну</td>
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
<li>💅 Создавать уникальные дизайны ногтей</li>
<li>🎨 Работать с акварельными техниками</li>
<li>🖌️ Применять вензеля и эксклюзивные узоры</li>
<li>✨ Использовать фольгу, стразы и втирку</li>
<li>🌈 Осваивать уникальный френч различных видов</li>
<li>🌟 Создавать праздничные и тематические дизайны</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/nail-art" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часов</span> (1-2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 000 ₽</span> <span class="rating-count"><del>48 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в данный период</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23, БЦ "Айсберг"</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/manicure-master" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/manicure-master" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс мастера маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс мастера маникюра»</strong> в <strong>Мытищах</strong> — это идеальное решение для всех, кто хочет начать карьеру в индустрии красоты.</p>
<p>В ходе обучения вы освоите различные техники маникюра, такие как классический, аппаратный и комбинированный, а также сможете создавать уникальные дизайны.</p>
<p>За <span class="price-highlight">64 академических часа</span> слушатели получают обширную практику на моделях и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свои навыки и уверенность в работе с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часов</span>
<span><strong>16</strong> уроков</span>
<span><strong>8</strong> отработок на практике</span>
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
<td>🔰 Базовый маникюр</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Классический, европейский маникюр, техника работы с инструментами</td>
</tr>
<tr>
<td>📈 Аппаратный маникюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Работа с маникюрным аппаратом, комбинированный маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн и покрытие</td>
<td><span class="price-highlight">28 ч / 7 уроков</span></td>
<td>Техники дизайна, покрытия гель-лаком, SPA-маникюр</td>
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
<li>🧰 Проводить ремонт и укрепление ногтей</li>
<li>🎨 Создавать уникальные дизайны на ногтях</li>
<li>🌸 Выполнять SPA-маникюр и уходовые процедуры</li>
<li>📋 Общаться с клиентами и продавать свои услуги</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/manicure-school/manicure-master" target="_blank" class="order-button">📘 На страницу курса</a>
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