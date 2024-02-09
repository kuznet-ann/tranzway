<?php include "../../config/main.php" ;
    session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <?php 
        $colorClass = "";
        include "../../components/menu.php"; 
    ?>

    <section class="about">
        <div class="container">
            <div class="about__who">
                <div class="about__text">
                    <h2 class="about__title fz-h2">Кто мы?</h2>
                    <p class="about__descr">Служба доставки TranzWay – молодая, инновационная, динамично развивающаяся логистическая компания. Мы доставляем грузы для бизнеса, а также личные вещи и документы из Турции в другие страны. Приоритетные направления: Россия, Беларусь, Казахстан. А также совершаем отправления в другие страны.</p>
                    <p class="about__descr">Наша цель — стать лидером на рынке грузоперевозок из Турции.</p>
                    <p class="about__descr">Наши ценности — надёжность, честность и командный дух!</p>
                    <p class="about__descr">Наши преимущества — скорость и гарантии возврата денег в случае задержки груза.</p>
                    <p class="about__descr">TranzWay — 100%-ая гарантия своевременной доставки в пункт назначения. Мы доставим ваш груз в лучшем виде благодаря выгодным пакетам услуг. Мы уделим внимание Вашим посылкам, доставим их вовремя и безопасным способом.</p>
                </div>
                <div class="about__image">
                    <img class="about__img" src="img/who-img.png" alt="image">
                </div>
            </div>

            <div class="about__transportation">
                <img class="about__img about__img-transportation" src="img/transportation-img.png" alt="image">
                <div class="about__text">
                    <h2 class="about__title about__title-transportation fz-h2">О перевозках</h2>
                    <p class="about__descr">Мы перевозим грузы авиа и автотранспортом. Выбирайте способ доставки, который лучше всего подходит для вашего бизнеса. Логистическая компания TranzWay ориентирована на клиента. Для выгоды заказчика мы можем предоставить комбинацию из нескольких услуг в соответствии с индивидуальными потребностями клиента. Срочные посылки доставляются авиатранспортом вместе с нашим курьером. Также авиа доставку чаще всего выбирают клиенты, которые ценят своё время и желают получить товар в максимально короткие сроки.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dignities">
        <div class="container">
            <ul class="dignities__list">
                <li class="dignities__item">
                    <span class="dignities__decor">1</span>
                    <h2 class="dignities__title fz-h2">Надежность</h2>
                </li>
                <li class="dignities__item">
                    <span class="dignities__decor">2</span>
                    <h2 class="dignities__title fz-h2">Нацеленность на результат</h2>
                </li>
                <li class="dignities__item">
                    <span class="dignities__decor">3</span>
                    <h2 class="dignities__title fz-h2">Персональный подход</h2>
                </li>
                <li class="dignities__item">
                    <span class="dignities__decor">4</span>
                    <h2 class="dignities__title fz-h2">Честность</h2>
                </li>
            </ul>

            <picture class="dignities__lines dignities__lines-1">
                <source media="(min-width: 769px) and (max-width: 1044px)" srcset="img/lines/1-2-tablet.svg">
                <source media="(max-width: 768px)" srcset="img/lines/1-2-phone.svg">
                <img src="img/lines/1-2.svg" alt="lines">
            </picture>

            <picture class="dignities__lines dignities__lines-2">
                <source media="(min-width: 769px) and (max-width: 1044px)" srcset="img/lines/2-3-tablet.svg">
                <source media="(max-width: 768px)" srcset="img/lines/2-3-phone.svg">
                <img src="img/lines/2-3.svg" alt="lines">
            </picture>

            <picture class="dignities__lines dignities__lines-3">
                <source media="(min-width: 769px) and (max-width: 1044px)" srcset="img/lines/3-4-tablet.svg">
                <source media="(max-width: 768px)" srcset="img/lines/3-4-phone.svg">
                <img src="img/lines/3-4.svg" alt="lines">
            </picture>
        </div>
    </section>
    <?php include "../../components/sponsors.php"; ?>
    <?php include "../../components/request.php"; ?>

    <?php include "../../components/footer.php"; ?>
</body>
</html>