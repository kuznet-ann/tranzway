<script type="module" src="/js/script.js"></script>

<header class="menu">
    <div class="container">
        <ul class="menu__list">
            <li class="menu__item">
                <a href="/" class="menu__link-logo">
                    <?php 
                        if ($colorClass == "white") {
                            echo '<img src="/img/logo.png" alt="Логотип компании" class="menu__logo">';
                        } else {
                            echo '<img src="/img/logo-black.png" alt="Логотип компании" class="menu__logo">';
                        }
                    ?>
                </a>
            </li>
            <li class="menu__item">
                <nav class="menu__navigation">
                    <a href="/" class="menu__link fz-h4 <?=$colorClass?>">Главная</a>
                    <a href="/pages/about/" class="menu__link fz-h4 <?=$colorClass?>">О нас</a>
                    <a href="/pages/services/" class="menu__link fz-h4 <?=$colorClass?>">Наши услуги</a>
                    <a href="/pages/form/" class="menu__link fz-h4 <?=$colorClass?>">Оформить заявку</a>
                    <a href="/pages/contacts/" class="menu__link fz-h4 <?=$colorClass?>">Контакты</a>
                </nav>
            </li>
            <li class="menu__item">
                <a href="tel:+79943332525" class="menu__phone">
                    <?php 
                        if ($colorClass == "white") {
                            echo '<img src="/icon/general/phone.png" alt="Иконка телефона" class="menu__icon">';
                        } else {
                            echo '<img src="/icon/general/phone-black.png" alt="Иконка телефона" class="menu__icon">';
                        }
                    ?>    
                </a>
                <?php if(!empty($_SESSION['login'])) {
                    echo '<a class="menu__btn" href="/pages/account/">';
                } else {
                    echo '<a class="menu__btn" href="/pages/login/">';
                } ?>
                    <?php 
                            if ($colorClass == "white") {
                                echo '<img src="/icon/general/Аккацнт.png" alt="Иконка флага России" class="menu__language">';
                            } else {
                                echo '<img src="/icon/general/Аккацнт-black.png" alt="Иконка флага России" class="menu__language">';
                            }
                        ?>  
                </a>
                <button class="menu__hamburger">
                    <span class="menu__line <?=$colorClass?>"></span>
                    <span class="menu__line <?=$colorClass?>"></span>
                    <span class="menu__line <?=$colorClass?>"></span>
            </button>
            </li>
        </ul>
    </div>

    <div class="menu__overlay">
        <button class="menu__close"><img src="/icon/map/close.svg" alt="image" class="map__img"></button>
        <nav class="menu__navigation menu__navigation-overlay">
            <a href="/index.php" class="menu__link fz-h4 white">Главная</a>
            <a href="/pages/about/" class="menu__link fz-h4 white">О нас</a>
            <a href="/pages/services/" class="menu__link fz-h4 white">Наши услуги</a>
            <a href="/pages/form/" class="menu__link fz-h4 white">Оформить заявку</a>
            <a href="/pages/contacts/" class="menu__link fz-h4 white">Контакты</a>
            <a href="tel:+79943332525" class="menu__phone"><img src="/icon/general/phone.png" alt="Иконка телефона" class="menu__icon"></a>
        </nav>
    </div>
</header>