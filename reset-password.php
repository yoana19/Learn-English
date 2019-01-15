<?php
    require "header.php";
?>

	<main>
		<div>
			<section>
				<p class="signupTxt">Забравена парола
					<p>
						<p class="resetPwdTxt">Ще получите e-mail с инструкции как да смените паролата си.</p>

						<form action="includes/reset-request.inc.php" method="post">
							<div class="signupDi">
							<input class="signup" type="text" name="email" placeholder="E-mail">
							</div>
							<div class="signupDiv">
								<button class="signupBtn" type="submit" name="reset-request-submit">Получи нова парола</button>
							</div>
						</form>
						<?php
							if (isset($_GET["reset"])) {
								if ($_GET["reset"] == "success") {
									echo '<p class="signupsuccess">Проверете вашия e-mail!</p>';
								}
							}
						?>

			</section>
		</div>
	</main>

	<?php
    require "footer.php";
?>
