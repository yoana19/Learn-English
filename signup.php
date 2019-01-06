<?php
    require "header.php";
?>

<main>
    <div>
        <section>
            <h1>Регистрация</h1>
            <?php
            
                if (isset($_GET["error"])) {
                    
                    if($_GET["error"] == "emptyfields") {
                        
                        echo '<p class="signuperror">Попълнете всички полета!</p>';
                        
                    } else if ($_GET["error"] == "invaliduidmail") {
                        
                        echo '<p class="signuperror">Невалидно потребителско име и e-mail!</p>';
                        
                    } else if ($_GET["error"] == "invaliduid") {
                        
                        echo '<p class="signuperror">Невалидно потребителско име!</p>';
                        
                    } else if ($_GET["error"] == "invalidmail") {
                        
                        echo '<p class="signuperror">Невалиден e-mail!</p>';
                        
                    } else if ($_GET["error"] == "passwordcheck") {
                        
                        echo '<p class="signuperror">Паролите не съвпадат!</p>';
                        
                    } else if ($_GET["error"] == "usertaken") {
                        
                        echo '<p class="signuperror">Потребителското име е заето!</p>';
                        
                    } 
                    
                } else if ($_GET["signup"] == "success") {
                    
                    echo '<p class="signupsuccess">Регистрацията е успешна!</p>';
                    
                }
            
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Потребителско име">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Парола">
                <input type="password" name="pwd-repeat" placeholder="Повтори парола">
                <button type="submit" name="signup-submit">Регистрация</button>
            </form>
        </section>
    </div>
</main>

<?php
    require "footer.php";
?>
