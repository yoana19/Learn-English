<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

</head>

<body>
    <header>
        <div class="container">
            <div class="logo-box">
                <a href="index.php">
                    <img src="img/englishko.jpg">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Начална страница</a></li>
                    <li><a href="levelchoosing.php">Нива</a></li>
                    <li><a href="a1colors.html">Лексика</a></li>
                    <li><a href="about.html">За нас</a></li>
                    <li><a href="contact.html">Контакти</a></li>
                </ul>
                <div>
                    <?php

                     if(isset($_SESSION['userId'])) {

                        echo '<form action="includes/logout.inc.php" method="post">
                        <button class="signbtn" type="submit" name="logout-submit">Излез</button>
                        </form>';

                     } else {

                        echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Потребителско име/E-mail..">
                        <input type="password" name="pwd" placeholder="Парола..">
                        <button class="signbtn" type="submit" name="login-submit">Влез</button>
                        </form>
                        <form action="signup.php" method="post">
                        <button class="signbtn" type="submit" name="signup">Регистрация</button>
                        </form>';

                    }

                    ?>

                </div>
            </nav>
        </div>


    </header>
