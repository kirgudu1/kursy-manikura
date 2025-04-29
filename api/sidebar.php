<!-- ======== Боковое меню (sidebar.php) ======== -->
<aside class="sidebar" id="sidebar">
<button class="close-btn">&times;</button>
    <nav class="side-menu">
        <h3>Выберите курс</h3>
        <ul id="top-list">
            <?php
            // Получаем все блоки ТОП-доставок, если они есть
            if (isset($sushiBlocks) && is_array($sushiBlocks)) {
                foreach ($sushiBlocks as $rank => $title) {
                    echo '<li><a href="#top-' . ($rank + 1) . '">Курс ' . ($rank + 1) . ' - ' . htmlspecialchars($title) . '</a></li>';
                }
            }
            ?>
        </ul>
    </nav>
</aside>
