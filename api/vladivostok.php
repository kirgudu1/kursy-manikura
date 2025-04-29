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
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">Курс педикюра</a></td>
<td>Классические и аппаратные техники педикюра</td>
<td>3 недели</td>
<td>13</td>
<td>3</td>
<td>4</td>
<td>Диплом специалиста</td>
<td>10 500 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">Курс повышения квалификации по маникюру</a></td>
<td>Классический, аппаратный, френч и SPA маникюр</td>
<td>1 месяц</td>
<td>16</td>
<td>4</td>
<td>3</td>
<td>Диплом о повышении квалификации</td>
<td>4 300 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">Курсы наращивания ногтей гелем</a></td>
<td>Создание ногтей любой длины и формы</td>
<td>2 недели</td>
<td>16</td>
<td>4</td>
<td>4</td>
<td>Диплом</td>
<td>6 500 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">Мастер маникюра</a></td>
<td>Классические и современные техники маникюра</td>
<td>3–7 недель</td>
<td>48</td>
<td>14</td>
<td>7</td>
<td>Диплом специалиста</td>
<td>13 900 ₽</td>
<td>40%</td>
<td>4 700 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">Мастер по наращиванию ногтей</a></td>
<td>Наращивание ногтей гелем и акрилом</td>
<td>1–3 месяца</td>
<td>67</td>
<td>18</td>
<td>11</td>
<td>Диплом специалиста</td>
<td>20 400 ₽</td>
<td>40%</td>
<td>3 400 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">Мастер-универсал ногтевого сервиса</a></td>
<td>Маникюр, педикюр, наращивание</td>
<td>2–3 месяца</td>
<td>77</td>
<td>22</td>
<td>14</td>
<td>Диплом специалиста</td>
<td>21 200 ₽</td>
<td>40%</td>
<td>3 600 ₽/мес.</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail_extension" target="_blank">Курс наращивания ногтей акрилом и полигелем</a></td>
<td>Работа с акрилом и полигелем</td>
<td>1 месяц</td>
<td>32</td>
<td>8</td>
<td>4</td>
<td>Диплом мастера красоты</td>
<td>10 900 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">Курсы аппаратного маникюра и педикюра</a></td>
<td>Аппаратные техники маникюра и педикюра</td>
<td>2 недели</td>
<td>12</td>
<td>3</td>
<td>2</td>
<td>Диплом</td>
<td>5 400 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">Курс маникюра одной фрезой</a></td>
<td>Быстрая техника маникюра</td>
<td>1 неделя</td>
<td>3</td>
<td>3</td>
<td>1</td>
<td>Диплом специалиста</td>
<td>3 400 ₽</td>
<td>40%</td>
<td>Доступна</td>
</tr>
<tr>
<td><a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">Курс маникюра для начинающих</a></td>
<td>Основы маникюра, работа с инструментами</td>
<td>3–5 недель</td>
<td>19</td>
<td>7</td>
<td>4</td>
<td>Диплом</td>
<td>4 300 ₽</td>
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
<!-- Главная карточка "Курс педикюра" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс педикюра</div>
<h2>Курс педикюра</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">13 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 500 ₽</span> <span class="rating-count"><del>17 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период ограниченных предложений</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Приморская, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-pedikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс педикюра»</strong> в <strong>Владивостоке</strong> — программа, предназначенная для желающих освоить профессии в области ухода за ногами и создания эстетичного вида.</p>
<p>В программе изучаются классические, аппаратные, Spa- и экспресс-техники педикюра.</p>
<p>За <span class="price-highlight">13 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих обновить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>13</strong> ак. часов</span>
<span><strong>3</strong> урока</span>
<span><strong>4</strong> процедуры</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Классический, аппаратный педикюр</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Комбинированный педикюр, Spa-уход</td>
</tr>
<tr>
<td>🎨 Проект</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Создание индивидуального проекта</td>
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
<li>💅 Выполнять эстетичный и аккуратный педикюр</li>
<li>⚙️ Использовать аппараты для педикюра</li>
<li>🌺 Работать с проблемными зонами и кутикулой</li>
<li>✂️ Применять комбинированные техники</li>
<li>🧖‍♀️ Проводить Spa-процедуры для ног</li>
<li>📋 Получить диплом специалиста после завершения курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-pedikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом о повышении квалификации<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 300 ₽</span> <span class="rating-count"><del>7 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций и специальных предложений</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Приморская, д. 45</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по маникюру" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс повышения квалификации по маникюру»</strong> в <strong>Владивостоке</strong> — идеальный выбор для специалистов, стремящихся улучшить свои навыки и освоить новые техники.</p>
<p>Программа охватывает самые актуальные подходы в маникюре, включая классические и аппаратные техники, френч и SPA процедуры.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом о повышении квалификации</span>.</p>
<p>Подойдёт как начинающим мастерам, так и тем, кто хочет повысить свою квалификацию и расширить свои возможности.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>3</strong> процедуры</span> <span><strong>1 месяц</strong></span>
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
<td>Классический маникюр, аппаратный маникюр</td>
</tr>
<tr>
<td>📈 Техники</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Френч, представление дизайнерских решений</td>
</tr>
<tr>
<td>🎨 SPA-процедуры</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Уход за руками и ногтями, SPA маникюр</td>
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
<li>🎯 Овладеть техникой френча и SPA маникюра</li>
<li>🧰 Создавать идеальное покрытие с использованием гель-лака</li>
<li>🎨 Работать с дизайном ногтей и созданием эффектов</li>
<li>🌸 Поддерживать высокое качество обслуживания клиентов</li>
<li>📋 Изготовить портфолио для соц. сетей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 500 ₽</span> <span class="rating-count"><del>10 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение!</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы наращивания ногтей гелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы наращивания ногтей гелем»</strong> в <strong>Владивостоке</strong> — это отличный старт для всех желающих освоить профессию мастера по наращиванию ногтей.</p>
<p>Программа включает изучение различных техник гелевого наращивания, включая коррекцию формы и длины ногтевой пластины.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на живых моделях и <span class="price-highlight">диплом</span>.</p>
<p>Идеально подходит для начинающих и тех, кто желает улучшить свои навыки в nail-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> процедуры</span>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Типы наращивания, подготовка материала</td>
</tr>
<tr>
<td>📈 Техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Наращивание на типсах и формах</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Декор и украшение наращенных ногтей</td>
</tr>
<tr>
<td>🔧 Уход</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Снятие и восстановление ногтей</td>
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
<li>💅 Создавать ногти любой длины и формы</li>
<li>🛠️ Работа с современным оборудованием</li>
<li>🌈 Корректировка формы и длины ногтевой пластины</li>
<li>🔍 Безболезненное снятие наращивания</li>
<li>⚒️ Ремонт поврежденных ногтей</li>
<li>🎨 Создание дизайна наращенных ногтей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-narashhivaniya-nogtej" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (3–7 недель)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 900 ₽</span> <span class="rating-count"><del>23 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при быстром бронировании мест</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Приморская, д. 12</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-manicurist" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-manicurist" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер маникюра»</strong> в <strong>Владивостоке</strong> — идеальный старт для тех, кто хочет развить карьеру в beauty-сфере.</p>
<p>Программа охватывает классические и современные техники маникюра, включая гель-лак и дизайн, подходящие как для новичков, так и для профессионалов.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и овладеть новыми техниками.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span> <span><strong>14</strong> уроков</span> <span><strong>7</strong> процедур</span> <span><strong>3–7</strong> недель</span>
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
<td><span class="price-highlight">19 ч / 6 уроков</span></td>
<td>Классический маникюр, аппаратный, комбинированный, использование гель-лака</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, ремонт ногтей, французский маникюр, СПА маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн</td>
<td><span class="price-highlight">13 ч / 4 урока</span></td>
<td>Тонкие линии, акварельная техника, элементы декора, геометрический дизайн, аэропуффинг</td>
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
<li>💅 делать классический, аппаратный и комбинированный маникюр</li>
<li>🎯 работать с гель-лаком и создавать стойкое покрытие</li>
<li>🧰 проводить ремонт и выравнивание ногтевой пластины</li>
<li>🎨 создавать уникальный дизайн ногтей</li>
<li>🌸 выполнять процедуры СПА-маникюра</li>
<li>📋 подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-manicurist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">13 ак. часов</span> (примерно 1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (2 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в команды в максимальные акции.</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Ленина, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail-design" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail-design" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс дизайна ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс дизайна ногтей»</strong> в <strong>Владивостоке</strong> — отличная возможность для всех, кто хочет освоить популярные техники нейл-арта и повысить свою квалификацию.</p>
<p>В программе курса вы изучите более 20 дизайнов в таких техниках, как акварель, вензеля и уникальный френч.</p>
<p>За <span class="price-highlight">13 академических часов</span> слушатели получают практику на клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет укрепить свои навыки и повысить ценность своих услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>13</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
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
<td>🎨 Акварельная техника</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание акварельных дизайнов</td>
</tr>
<tr>
<td>💍 Элементы декора</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Работа с фольгой, втиркой и стразами</td>
</tr>
<tr>
<td>🖌️ Тонкие линии и вензеля</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание узоров и красивых линий</td>
</tr>
<tr>
<td>🌀 Геометрический дизайн</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Особенности нанесения геометрических фигур</td>
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
<li>💅 Создавать уникальные дизайны для клиентов</li>
<li>🎨 Работать в популярных техниках ненадолго</li>
<li>🖌️ Применять технику тонких линий</li>
<li>🌼 Использовать декоративные элементы в дизайне</li>
<li>💎 Создавать акварельные и мраморные дизайны</li>
<li>🌟 Реализовывать идеи клиентов с индивидуальным подходом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail-design" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 400 ₽</span> <span class="rating-count"><del>34 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на курс</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Академическая, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_nail" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_nail" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер по наращиванию ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по наращиванию ногтей»</strong> в <strong>Владивостоке</strong> — отличный старт для начинающих мастеров и тех, кто хочет расширить свои навыки в nail-индустрии.</p>
<p>Вы научитесь наращивать ногти гелем и акрилом, а также освоите актуальные техники дизайна.</p>
<p>За <span class="price-highlight">67 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный выбор для начинающих и профессионалов, стремящихся повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>67</strong> ак. часов</span>
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
<td>🔰 Маникюр для начинающих</td>
<td><span class="price-highlight">19 ч / 6 уроков</span></td>
<td>Классическая техника, аппаратный маникюр, комби-маникюр, использование гель-лака</td>
</tr>
<tr>
<td>📈 Наращивание ногтей гелем</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Особенности наращивания, типы гелевого наращивания, украшения, восстановление поврежденного ногтя</td>
</tr>
<tr>
<td>🎨 Наращивание ногтей акрилом и полигелем</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Работа с акрилом и полигелем, техника “одна капля”, тренды оформления, коррекция и снятие ногтей</td>
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
<li>🎯 Научитесь наращивать ногти гелем и акрилом</li>
<li>🧰 Создавать сложные формы ногтей: стилет, балерина, квадрат</li>
<li>🎨 Разрабатывать уникальные дизайны ногтей</li>
<li>🌸 Выполнять коррекцию и снятие ногтей с минимальным риском для здоровья клиента</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_nail" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>🎓 Школа маникюра Эколь</strong> — <span class="price-highlight">Лицензированное учебное заведение</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес. (6 месяцев)</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 200 ₽</span> <span class="rating-count"><del>35 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в пределах акции</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Центральная, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_of_nail_service" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Мастер-универсал ногтевого сервиса" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер-универсал ногтевого сервиса»</strong> в <strong>Владивостоке</strong> — это уникальная возможность стать специалистом в индустрии красоты.</p>
<p>Программа включает в себя обучение основам маникюра, педикюра и дизайна ногтей, включая сложные техники наращивания и укрепления.</p>
<p>За <span class="price-highlight">77 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходил как для начинающих мастеров, так и для специалистов, желающих расширить свои возможности на рынке труда.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>77</strong> ак. часов</span> <span><strong>22</strong> урока</span> <span><strong>14</strong> процедур</span> <span><strong>2-3</strong> месяца</span>
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
<td><span class="price-highlight">19 ч / 6 уроков</span></td>
<td>Классическая техника, аппаратный маникюр, комбинированный, использование гель-лака</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Снятие покрытия, французский маникюр, спа-маникюр</td>
</tr>
<tr>
<td>🎨 Дизайн ногтей</td>
<td><span class="price-highlight">13 ч / 4 урока</span></td>
<td>Тонкие линии, акварельная техника, элементы декора, геометрический дизайн</td>
</tr>
<tr>
<td>🦶 Педикюр</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Обработка стопы, классический, европейский, комбинированный педикюр</td>
</tr>
<tr>
<td>💅 Наращивание ногтей</td>
<td><span class="price-highlight">13 ч / 4 урока</span></td>
<td>Особенности наращивания, виды наращивания, уход за ногтями</td>
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
<li>🎯 Создавать сложные дизайны ногтей</li>
<li>🧰 Использовать современные материалы и инструменты</li>
<li>🌸 Осуществлять наращивание и укрепление ногтей</li>
<li>📋 Получить диплом, подтверждающий вашу квалификацию</li>
<li>🚀 Начать карьеру с высоким доходом в бьюти-сфере</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/programm-master_of_nail_service" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом о сертификации<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 400 ₽</span> <span class="rating-count"><del>5 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение, когда действуют специальные предложения.</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Светлана, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/courses-gradient-manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы градиентного маникюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы градиентного маникюра»</strong> в <strong>Владивостоке</strong> — идеальный выбор для тех, кто хочет освоить популярную технику маникюра за короткий срок.</p>
<p>Вы изучите основы градиентного маникюра, сочетания цветов и создание уникальных дизайнов.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">диплом о сертификации</span>.</p>
<p>Курс подходит как новичкам, так и специалистам, желающим расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Сочетание цветов</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы колористики, модные цветовые сочетания</td>
</tr>
<tr>
<td>📈 Переходы цвета</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Техника плавного перехода между цветами</td>
</tr>
<tr>
<td>🎨 Создание градиента</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Практика создания градиента гель-лаком</td>
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
<li>💅 Создавать градиентный маникюр</li>
<li>🎨 Выбирать и сочетать цвета</li>
<li>🖌️ Избегать распространенных ошибок</li>
<li>📈 Работа с клиентами</li>
<li>📷 Создание портфолио</li>
<li>📜 Получение диплома о сертификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/courses-gradient-manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 400 ₽</span> <span class="rating-count"><del>5 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках акционных предложений</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Нейбута, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/drawing_nails" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/drawing_nails" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс росписи ногтей" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс росписи ногтей»</strong> в <strong>Владивостоке</strong> — идеальный выбор для желающих освоить популярные техники росписи ногтей.</p>
<p>В курсе изучаются техники вензельной росписи, декорирования и создания воздушных композиций.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдет как для новичков, так и для опытных мастеров, желающих расширить свои навыки.</p>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Техники вензелей, акриловый лак</td>
</tr>
<tr>
<td>🎨 Декорирование</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Комбинирование техник, создание узоров</td>
</tr>
<tr>
<td>🖌️ Практика на клиенте</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Приемы и работа с моделями</td>
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
<li>💖 Использовать интересные техники дизайна</li>
<li>✨ Выполнять вензельные узоры и элементы декора</li>
<li>🌼 Создавать нежные и воздушные композиции</li>
<li>🎉 Комбинировать различные техники в дизайне</li>
<li>🚀 Повышать квалификацию и расширять список услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/drawing_nails" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 400 ₽</span> <span class="rating-count"><del>9 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Чехова, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/hardware_manicure" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/hardware_manicure" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курсы аппаратного маникюра и педикюра" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курсы аппаратного маникюра и педикюра»</strong> в <strong>Владивостоке</strong> — идеальный выбор для тех, кто хочет стать профессионалом в nail-индустрии.</p>
<p>Студенты изучат аппаратные техники маникюра и педикюра, работу с аппаратурой и выбор фрез.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>3</strong> уроков</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Введение в аппаратный маникюр</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Теория, выбор аппарата и фрез</td>
</tr>
<tr>
<td>📈 Практика маникюра</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Выполнение машинного маникюра</td>
</tr>
<tr>
<td>🎨 Практика педикюра</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Выполнение машинного педикюра</td>
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
<li>💅 Выполнять аппаратный маникюр на профессиональном уровне</li>
<li>📏 Правильно выбирать фрезы для работы</li>
<li>🛠️ Работать с аппаратами для маникюра и педикюра</li>
<li>🌟 Обрабатывать ногти и стопы с блестящими результатами</li>
<li>👩‍🎤 Работать с клиентами и достигать их восторга</li>
<li>📋 Получить диплом о квалификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/hardware_manicure" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">3 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 400 ₽</span> <span class="rating-count"><del>5 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Ленина, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра одной фрезой" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра одной фрезой»</strong> в <strong>Владивостоке</strong> — идеальный выбор для начинающих специалистов, стремящихся освоить быструю технику маникюра.</p>
<p>Программа охватывает выбор фрез для маникюра, основы аппаратного маникюра и тренировку на реальных клиентах.</p>
<p>За <span class="price-highlight">3 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">доказательство квалификации</span>.</p>
<p>Курс подходит для тех, кто хочет увеличить свою клиентскую базу и оптимизировать время работы.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>3</strong> ак. часа</span> <span><strong>3</strong> урока</span> <span><strong>1</strong> процедура</span> <span><strong>1</strong> неделя</span>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Выбор фрез, основы стерильности</td>
</tr>
<tr>
<td>📈 Техника быстрого маникюра</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Скорость выполнения и избегание ошибок</td>
</tr>
<tr>
<td>🎨 Практика с клиентами</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Отработка навыков на реальных клиентах</td>
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
<li>💅 Выбирать нужную фрезу для маникюра</li>
<li>⏱️ Выполнять маникюр всего за 12 минут</li>
<li>🌟 Работать с различными типами ногтей</li>
<li>📈 Расширять свою клиентскую базу</li>
<li>📋 Подтверждать квалификацию дипломом</li>
<li>🔧 Обеспечивать стерильность во время процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/manicure-courses-in-one-mill" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">19 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 300 ₽</span> <span class="rating-count"><del>7 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Ленина, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс маникюра для начинающих" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс маникюра для начинающих»</strong> в <strong>Владивостоке</strong> — идеальный старт для новичков в мире маникюра.</p>
<p>Вы изучите популярные техники работы, включая классический, европейский и аппаратный маникюр.</p>
<p>За <span class="price-highlight">19 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">документ о завершении курса</span>.</p>
<p>Курс подходит для всех, кто хочет начать карьеру в индустрии красоты или просто научиться делать маникюр для себя.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>19</strong> ак. часов</span>
<span><strong>7</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
<span><strong>3–5</strong> недель</span>
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
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Основы работы с инструментами, организация рабочего места</td>
</tr>
<tr>
<td>📈 Техники маникюра</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Классический, европейский, аппаратный маникюр</td>
</tr>
<tr>
<td>🎨 Работа с гель-лаком</td>
<td><span class="price-highlight">7 ч / 2 урока</span></td>
<td>Нанесение, сушка, снятие гель-лака</td>
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
<li>💅 Делать классический и аппаратный маникюр</li>
<li>🎨 Наносить и снимать гель-лак</li>
<li>🏆 Моделировать форму ногтевой пластины</li>
<li>🌟 Работать с клиентами и создавать комфортную атмосферу</li>
<li>🛠️ Использовать инструменты и материалы в nail-индустрии</li>
<li>📋 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/kursy-manikyura" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 900 ₽</span> <span class="rating-count"><del>18 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Приморская, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail_extension" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail_extension" class="order-button" target="_blank">💬 Смотреть отзывы</a>
</div>
</div>
<!-- Главная карточка "Курс наращивания ногтей акрилом и полигелем" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Курс наращивания ногтей акрилом и полигелем»</strong> в <strong>Владивостоке</strong> — идеальное решение для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Курс охватывает техники наращивания ногтей акрилом и полигелем, а также различные методики декора.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдёт как начинающим, так и тем, кто хочет усовершенствовать свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техника работы с акрилом и полигелем</td>
</tr>
<tr>
<td>📈 Декор ногтей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники декора и художественного оформления</td>
</tr>
<tr>
<td>🎨 Коррекция и снятие</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Коррекция, снятие и уход за ногтями</td>
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
<li>💅 Научиться наращиванию ногтей акрилом и полигелем</li>
<li>🎯 Создавать оригинальный дизайн ногтей</li>
<li>🧰 Корректировать и снимать наращивание без вреда</li>
<li>🎨 Использовать арт-декор и современные техники оформления</li>
<li>🌟 Работать с реальными клиентами под руководством опытных мастеров</li>
<li>📋 Завести профессиональное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avck.ws/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/manicure-school/nail_extension" target="_blank" class="order-button">📘 На страницу курса</a>
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