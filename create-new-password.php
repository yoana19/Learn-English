<?php
    require "header.php";
?>

	<main>
		<div>
			<section>
				
						<?php
							$selector = isset($_GET["selector"]);
							$validator = isset($_GET["validator"]);
				
							if (empty($selector) || empty($validator)) {
								
								echo "<p class='signuperror'>Не можахме да валидираме вашата заявка!</p>";
								
							} else {
								if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
									?>
									
									<form action="includes/reset-password.inc.php" method="post">
										<input class="signup" type="hidden" name="selector" value="<?php echo $selector ?>">
										<input class="signup" type="hidden" name="validator" value="<?php echo $validator ?>">
										<input class="signup" type="password" placeholder="Нова парола">
										<input class="signup" type="password" placeholder="Повторете новата парола">
										<button class="signupBtn" type="submit" name="reset-password-submit">Обновете паролата си</button>
									</form>
									
									<?php
								}
							}
						?>

			</section>
		</div>
	</main>

	<?php
    require "footer.php";
?>
