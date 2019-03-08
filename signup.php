<?php
    require "header.php";
?>

	<main>
		<div>
			<section>
					<br>
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
                    
                } else if (isset($_GET["signup"]) == "success") {
                    
                    echo '<p class="signupsuccess">Регистрацията е успешна!</p>';
                    
                }
            
            ?>

							<div class="user">
								<header class="user__header">
									<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
								</header>

								<form class="form" action="includes/signup.inc.php" method="post">
									<div class="form__group">
										<input type="text" name="uid" placeholder="Потребителско име" class="form__input" />
									</div>

									<div class="form__group">
										<input type="email" name="mail" placeholder="E-mail" class="form__input" />
									</div>

									<div class="form__group">
										<input type="password" name="pwd" placeholder="Парола" class="form__input" />
									</div>
									
									<div class="form__group">
										<input type="password" name="pwd-repeat" placeholder="Повтори парола" class="form__input" />
									</div>

									<button class="btnsignup" type="sumbit" name="signup-submit">Регистрация</button>
								</form>
							</div>
			</section>
		</div>
	</main>

	<?php
    require "footer.php";
?>
