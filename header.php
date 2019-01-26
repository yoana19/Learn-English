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

    <header class="main_header">
        <nav>
            <ul class="main-nav">
                <li><a href="index.php">Начална страница</a></li>
                <li><a href="levelchoosing.php">Нива</a></li>
                <li><a href="vocabulary.php">Лексика</a></li>
                <li><a href="about.php">За нас</a></li>
                <li><a href="contact.php">Контакти</a></li>
            </ul>
            <div class="menu-button">
                <a href="#"><span class="text">&nbsp;Меню</span></a>
            </div>
        </nav>
        <a class="logo" href="index.php">EnglishKo</a>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">

        </script>

        <script>
            $().ready(function() {
                // menu button for top nav
                $('.menu-button a').click(function(e) {
                    e.preventDefault();
                    $('nav ul.main-nav').toggleClass('active');
                });
                // # links
                $('a[href="#"]').click(function(e) {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'slow');
                });
            });

        </script>

        <?php

                     if(isset($_SESSION['userId'])) {

                        echo '<form action="includes/logout.inc.php" method="post">
                        <button class="signbtn" type="submit" name="logout-submit">Излез</button>
                        </form>';

                     } else {

                        echo '<form action="includes/login.inc.php" method="post">
                        <input class="login" type="text" name="mailuid" placeholder="Потребителско име/E-mail..">
                        <input class="login" type="password" name="pwd" placeholder="Парола..">
                        <button class="signbtn" type="submit" name="login-submit">Влез</button>
                        </form>
                        <form action="signup.php" method="post">
                        <button class="signbtn" type="submit" name="signup">Регистрация</button>
						<a class="forgPwd" href="reset-password.php">Забравена парола</a>
						</form>';

                    }

                    ?>

        <?php

				if (isset($_GET['newpwd'])) {
					if ($_GET['newpwd'] == "passwordupdated") {
						alert("Паролата Ви беше обновена!");
					}
				}

				?>

    </header>
