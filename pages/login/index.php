<?php include "../../config/main.php" ;
    session_start();

    $errorMessageReg = '';
    $errorMessageLog = '';

    // Регистрация
    if(!empty($_POST['reg'])) {
        $login = $_POST['login'];
        $pass = md5($_POST['pass']);
        $repass = md5($_POST['repass']);
        
        $getEmail = mysqli_query($connection, "select * from users where email='$login'");
        if($getEmail->num_rows > 0) {
            $errorMessageReg = 'Почта уже зарегистирована';
        } else {
            if($pass == $repass) {
                $addUser = mysqli_query($connection, "INSERT INTO `users`(`email`, `password`, `role`) VALUES ('$login','$pass', '0')");

                $getUserInfo = mysqli_query($connection, "select * from users where email='$login'");
                while($row = $getUserInfo -> fetch_assoc()) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login'] = $row['email'];
                    $_SESSION['role'] = $row['role'];
                }

                header('Location: ../account/');
            } else {
                $errorMessageReg = 'Пароли не совпадают';
            }
        }
    }

    //Авторизация
    if(!empty($_POST['log'])) {
        $login = $_POST['login'];
        $pass = md5($_POST['pass']);

        $getEmail = mysqli_query($connection, "select * from users where email='$login'");
        if ($getEmail->num_rows > 0) {
            $getPass = mysqli_query($connection, "select * from users where password='$pass' AND email='$login'");
            if ($getPass->num_rows > 0) {
                $getUserInfo = mysqli_query($connection, "select * from users where email='$login'");
                while ($row = $getUserInfo -> fetch_assoc()) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login'] = $row['email'];
                    $_SESSION['role'] = $row['role'];
                }

                header('Location: ../account/');
            } else {
                $errorMessageLog = 'Введён некоректный пароль';
            }
        } else {
            $errorMessageLog = 'Введена некоректная почта';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Вход в аккаунт</title>
</head>
<body>
    <?php include "../../components/menu.php"; ?>

    <section class="enter">
        <div class="container">
            <div class="enter__wrapper">
                <button class="enter__title fz-h3 active">Регистрация</button>
                <button class="enter__title fz-h3">Авторизация</button>
            </div>

            <form class="enter__form active" method="post">
                <input type="email" class="enter__input" name="login" placeholder="Введите почту" required>
                <input type="password" class="enter__input" minlength="8" name="pass" placeholder="Введите пароль" required>
                <input type="password" class="enter__input" name="repass" placeholder="Подтвердите пароль" required>
                <?=$errorMessageReg?>

                <input type="submit" value="Зарегистрироваться" class="enter__btn btn" name="reg">
            </form>
            <form class="enter__form" method="post">
                <input type="email" class="enter__input" name="login" placeholder="Введите почту" required>
                <input type="password" class="enter__input" name="pass" placeholder="Введите пароль" required>
                <?=$errorMessageLog?>

                <input type="submit" value="Войти" class="enter__btn btn" name="log">
            </form>
        </div>
    </section>

    <?php include "../../components/footer.php"; ?>

    <script type="module" src="js/script.js"></script>
</body>
</html>