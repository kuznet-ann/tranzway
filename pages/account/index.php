<?php include "../../config/main.php" ;
    session_start();

    if (empty($_SESSION['id'])) {
        header('Location: /');
    }

    // Удаление записи
    if (isset($_POST['delete'])) {
        $deleteRow = mysqli_query($connection, "DELETE FROM `users` WHERE id=" . $_POST['id']);
    }

    // Изменение записи
    if (isset($_POST['change'])) {
        $changeRow = mysqli_query($connection, "UPDATE `users` SET `email`='" . $_POST['login'] . "',`role`='" . $_POST['role'] . "' WHERE id=" . $_POST['id']);

        $getUserInfo = mysqli_query($connection, "select * from users");
            while ($row = $getUserInfo -> fetch_assoc()) {
                $_SESSION['login'] = $row['email'];
                $_SESSION['role'] = $row['role'];
            }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Личный кабинет</title>
</head>
<body>
    <?php include "../../components/menu.php"; ?>

    <section class="user">
        <div class="container">
            <ul class="user__info">
                <li class="user__item">
                    <span class="fz-h4">Почта:</span>
                    <?=$_SESSION['login']?>
                </li>
                <li class="user__item">
                    <span class="fz-h4">Статус:</span>
                    <?php
                        if ($_SESSION['role'] == '0') {
                            echo 'Пользователь';
                        }
                        if ($_SESSION['role'] == '1') {
                            echo 'Администратор';
                        }
                    ?>

                </li>
                <li class="user__info">
                    <a href="exit.php" class="user__btn btn-a">Выйти</a>
                </li>
            </ul>

            <?php if($_SESSION['role'] == '1'): ?>
            <table class="user__data">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>user</td>
                        <td>role</td>
                        <td></td>
                    </tr>
                </thead>

                <?php
                    $getUserInfo = mysqli_query($connection, "select * from users");
                    while ($row = $getUserInfo -> fetch_assoc()):
                ?>
                    <tr>
                        <form method="post">
                            <td><input class="user__input" name="id" type="text" value="<?=$row['id']?>"></td>
                            <td><input class="user__input" name="login" type="email" value="<?=$row['email']?>"></td>
                            <td><input class="user__input" name="role" type="text" value="<?=$row['role']?>"></td>
                            <td>
                                <input class="user__icon user__icon-change" type="submit" name="change" value="">
                                <input class="user__icon user__icon-del" type="submit" name="delete" value="">
                            </td>
                        </form>
                    </tr>
                <?php endwhile;?>
            </table>
            <?php endif;?>
        </div>
    </section>

    <?php include "../../components/footer.php"; ?>
</body>
</html> 