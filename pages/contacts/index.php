<?php include "../../config/main.php" ;
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <?php 
        $colorClass = "";
        include "../../components/menu.php"; 
    ?>

    <section class="contact">
        <div class="container">
            <h2 class="contact__title fz-h2">СВЯЖИТЕСЬ С НАМИ</h2>
            <p class="contact__descr">Если у Вас есть какие-либо вопросы о нас или о наших услугах, пожалуйста, свяжитесь с нами.</p>
            <p class="contact__descr">Заполните форму заявки ниже или обратитесь к нам напрямую по номеру телефона & WhatsApp или электронной почте:</p>
            <p class="contact__descr">
                 <a href="tel:+" class="contact__descr">+90 (549) 373 25 25</a>
            </p>
            <p class="contact__descr">
                 <a href="mailto:" class="contact__descr">info@mrrocketcargo.com</a>
            </p>
            <p class="contact__descr">Центральный офис: Mesihpaşa mah. Aksaray cad. Saitefendi sok. No 17/4 Laleli, Fatih-İstanbul/ Türkiye</p>
            <a href="#" class="contact__link fz-h5">Политика конфиденциальности</a>
        </div>
    </section>

    <?php include "../../components/request.php"; ?>
    <?php include "../../components/map.php"; ?>    

    <?php include "../../components/footer.php"; ?>
</body>
</html>