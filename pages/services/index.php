<?php include "../../config/main.php" ;
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши услуги</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <?php 
        $colorClass = "";
        include "../../components/menu.php"; 
    ?>

    <section class="about">
            <div class="container">
                <div class="about__transportation">
                    <img class="about__img about__img-transportation" src="img/transportation-img.png" alt="image">
                    <div class="about__text">
                        <h2 class="about__title about__title-transportation fz-h2">О перевозках</h2>
                        <p class="about__descr">Мы перевозим грузы авиа и автотранспортом. Выбирайте способ доставки, который лучше всего подходит для вашего бизнеса. Логистическая компания TranzWay ориентирована на клиента. Для выгоды заказчика мы можем предоставить комбинацию из нескольких услуг в соответствии с индивидуальными потребностями клиента. Срочные посылки доставляются авиатранспортом вместе с нашим курьером. Также авиа доставку чаще всего выбирают клиенты, которые ценят своё время и желают получить товар в максимально короткие сроки.</p>
                    </div>
                </div> 
            </div>
    </section>

    <section class="countries">
        <div class="container">
            <div class="countries__wrapper">
                <button data-tab="#tab1" class="countries__btn countries__btn1 fz-h3 active">Казахстан</button>
                <button data-tab="#tab2" class="countries__btn fz-h3 ">Россия</button>
                <button data-tab="#tab3" class="countries__btn fz-h3">Беларусь</button>
            </div>

            <ul class="countries__list">
                <li id="tab1" class="countries__item active">
                    <div class="countries__info">
                        <h4 class="countries__subtitle fz-h4">Куда?</h4>
                        <p class="countries__descr">TranzWay с гарантией перевезёт Ваши отправления из Турции в любой город Казахстана. Для этого достаточно привезти вещи на центральный склад TranzWay в Стамбуле, а если Вы совершаете оптовые закупки в магазинах Стамбула – достаточно сообщить магазину название Вашей карго компании TranzWay и Ваш клиентский номер, который мы открываем для каждого своего покупателя при заказе услуги перевозки.</p>
                        <p class="countries__descr">Также при необходимости за дополнительную плату можем организовать доставку товара из любого города Турции к нам на склад. Мы самостоятельно упаковываем каждое отправление, взвешиваем, присваиваем номер отслеживания и погружаем на транспорт для отправки в Казахстан.</p>
                        <p class="countries__descr">Как только Ваш заказ поступит в Казахстан, с Вами свяжется наш менеджер для того, чтобы уточнить адрес доставки. Также Вы можете самостоятельно забрать своё отправление с нашего склада.</p>
                    </div>
                    <div class="countries__info">
                        <h4 class="countries__subtitle fz-h4">Страхование</h4>
                        <p class="countries__descr">Работая с целью 100%-го удовлетворения клиентов и таким образом оптимизируя все свои процессы, TranzWay гарантирует своевременную и безопасную доставку Ваших коммерческих и личных отправлений в любой город Казахстана.</p>
                        <p class="countries__descr">В случае возможного повреждения, недостачи, потери или задержки Вашего груза, Ваша продукция находится под гарантией TranzWay, и Вам будет возвращена разница в обслуживании или сумма страховки.</p>
                        <p class="countries__descr">Все грузы TranzWay застрахованы. Для уточнения суммы и деталей страховки для Вашего отправления, пожалуйста, свяжитесь с нашими менеджерами.</p>
                    </div>
                </li>
                <li id="tab2" class="countries__item">
                    <div class="countries__info">
                        <h4 class="countries__subtitle fz-h4">Куда?</h4>
                        <p class="countries__descr">TranzWay с гарантией перевезёт Ваши отправления из Турции в любой город России. Для этого достаточно привезти вещи на центральный склад TranzWay в Стамбуле, а если Вы совершаете оптовые закупки в магазинах Стамбула – достаточно сообщить магазину название Вашей карго компанииTranzWay и Ваш клиентский номер, который мы открываем для каждого своего покупателя при заказе услуги перевозки.</p>
                        <p class="countries__descr">Также при необходимости за дополнительную плату можем организовать доставку товара из любого города Турции к нам на склад. Мы самостоятельно упаковываем каждое отправление, взвешиваем, присваиваем номер отслеживания и погружаем на транспорт для отправки в Россию.</p>
                        <p class="countries__descr">Как только Ваш заказ поступит в Россию, с Вами свяжется наш менеджер для того, чтобы уточнить адрес доставки в России. Также Вы можете самостоятельно забрать своё отправление с нашего склада в Москве.</p>
                    </div>
                    <div class="countries__info">
                        <h4 class="countries__subtitle fz-h4">Страхование</h4>
                        <p class="countries__descr">Работая с целью 100%-го удовлетворения клиентов и таким образом оптимизируя все свои процессы, TranzWay гарантирует своевременную и безопасную доставку Ваших коммерческих и личных отправлений в любой город России.</p>
                        <p class="countries__descr">В случае возможного повреждения, недостачи, потери или задержки Вашего груза, Ваша продукция находится под гарантией TranzWay, и Вам будет возвращена разница в обслуживании или сумма страховки.</p>
                        <p class="countries__descr">Все грузы TranzWay застрахованы. Для уточнения суммы и деталей страховки для Вашего отправления, пожалуйста, свяжитесь с нашими менеджерами.</p>
                    </div>
                </li>
                <li id="tab3" class="countries__item">
                    <div class="countries__info">
                        <h4 class="countries__subtitle fz-h4">Куда?</h4>
                        <p class="countries__descr">TranzWay с гарантией перевезёт Ваши отправления из Турции в любой город Беларуси. Для этого достаточно привезти вещи на центральный склад TranzWay в Стамбуле, а если Вы совершаете оптовые закупки в магазинах Стамбула – достаточно сообщить магазину название Вашей карго компании TranzWay и Ваш клиентский номер, который мы открываем для каждого своего покупателя при заказе услуги перевозки.</p>
                        <p class="countries__descr">Также при необходимости за дополнительную плату можем организовать доставку товара из любого города Турции к нам на склад. Мы самостоятельно упаковываем каждое отправление, взвешиваем, присваиваем номер отслеживания и погружаем на транспорт для отправки в Беларусь.</p>
                        <p class="countries__descr">Как только Ваш заказ поступит в Беларусь, с Вами свяжется наш менеджер для того, чтобы уточнить адрес доставки в Беларуси. Также Вы можете самостоятельно забрать своё отправление с нашего склада.</p>
                    </div>
                    <div class="countries__info">
                        <h4 class="countries__subtitle fz-h4">Страхование</h4>
                        <p class="countries__descr">Работая с целью 100%-го удовлетворения клиентов и таким образом оптимизируя все свои процессы, TranzWay гарантирует своевременную и безопасную доставку Ваших коммерческих и личных отправлений в любой город Беларуси.</p>
                        <p class="countries__descr">В случае возможного повреждения, недостачи, потери или задержки Вашего груза, Ваша продукция находится под гарантией TranzWay , и Вам будет возвращена разница в обслуживании или сумма страховки.</p>
                        <p class="countries__descr">Все грузы TranzWay застрахованы. Для уточнения суммы и деталей страховки для Вашего отправления, пожалуйста, свяжитесь с нашими менеджерами.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <?php include "../../components/request.php"; ?>

    <?php include "../../components/footer.php"; ?>
    
    <script src="js/script.js"></script>
</body>
</html>