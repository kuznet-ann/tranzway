<?php include "config/main.php" ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>

    <?php
        $colorClass = "white";
        include "components/menu.php"; 
    ?>

    <section class="promo">
        <div class="container">
            <h1 class="promo__title fz-h1">Логистика будущего</h1>
            <button class="promo__btn btn">Заказать доставку</button>
            <picture>
                <source media="(min-width: 426px) and (max-width: 1023px)" srcset="img/promo/promo-image-tablet.png">
                <source media="(max-width: 425px)" srcset="img/promo/promo-image-phone.png">
                <img  class="promo__img" src="img/promo/promo-image.png" alt="image">
            </picture>
            <div class="promo__icon">
                <img  class="promo__arrow" src="icon/arrow-down.svg" alt="image">
            </div>
        </div>
    </section>

    <section class="why_us">
        <div class="container">
            <h2 class="why_us__title fz-h2">Почему мы?</h2>
            <ul class="why_us__list">
                <li class="why_us__item">
                    <img class="why_us__img" src="icon/why_us/personal-approach.png" alt="image">
                    <h3 class="why_us__subtitle fz-h3">Индивидуальный подход</h3>
                </li>
                <li class="why_us__item">
                    <img class="why_us__img" src="icon/why_us/safety.png" alt="image">
                    <h3 class="why_us__subtitle fz-h3">Надежность и безопасность</h3>
                </li>
                <li class="why_us__item">
                    <img class="why_us__img" src="icon/why_us/intime.png" alt="image">
                    <h3 class="why_us__subtitle fz-h3">Своевременная доставка</h3>
                </li>
                <li class="why_us__item">
                    <img class="why_us__img" src="icon/why_us/support.png" alt="image">
                    <h3 class="why_us__subtitle fz-h3">Поддержка 24/7</h3>
                </li>
            </ul>
        </div>
    </section>

    <section class="achievements">
        <div class="container">
            <ul class="achievements__list">
                <li class="achievements__item">
                    <span class="achievements__decor">7000+</span>
                    <h2 class="achievements__title fz-h2">Тонн отправок в год</h2>
                </li>
                <li class="achievements__item">
                    <span class="achievements__decor">50000+</span>
                    <h2 class="achievements__title fz-h2">Отправлений в год</h2>
                </li>
                <li class="achievements__item">
                    <span class="achievements__decor">120+</span>
                    <h2 class="achievements__title fz-h2">Точек выдачи</h2>
                </li>
                <li class="achievements__item">
                    <span class="achievements__decor">7000+</span>
                    <h2 class="achievements__title fz-h2">Довольных клиентов</h2>
                </li>
            </ul>

            <picture class="achievements__lines achievements__lines-1">
                <source media="(min-width: 769px) and (max-width: 1044px)" srcset="icon/achievements/1-2-tablet.svg">
                <source media="(max-width: 768px)" srcset="icon/achievements/1-2-phone.svg">
                <img src="icon/achievements/1-2.svg" alt="lines">
            </picture>
            <picture class="achievements__lines achievements__lines-2">
                <source media="(min-width: 769px) and (max-width: 1044px)" srcset="icon/achievements/2-3-tablet.svg">
                <source media="(max-width: 768px)" srcset="icon/achievements/2-3-phone.svg">
                <img src="icon/achievements/2-3.svg" alt="lines">
            </picture>
            <picture class="achievements__lines achievements__lines-3">
                <source media="(min-width: 769px) and (max-width: 1044px)" srcset="icon/achievements/3-4-tablet.svg">
                <source media="(max-width: 768px)" srcset="icon/achievements/3-4-phone.svg">
                <img src="icon/achievements/3-4.svg" alt="lines">
            </picture>
        </div>
    </section>

    <?php include "components/request.php"; ?>
    <?php include "components/sponsors.php"; ?>
    <?php include "components/map.php"; ?>    

    <?php include "components/footer.php"; ?>
</body>
</html>