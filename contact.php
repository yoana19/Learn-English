<?php
   require "header.php";
 ?>

	<main al>
	
		<p class="signupTxt">Свържете се с нас</p>
		<form class="contact-form" action="contactform.php" method="post">
		<div class="signupDi">
			<input class="signup" type="text" name="name" placeholder="Име">
			<input class="signup" type="text" name="mail" placeholder="E-mail">
			<input class="signup" type="text" name="Subject" placeholder="Предмет">
			<textarea class="signup" name="message" placeholder="Съобщение"></textarea>
			</div>
			<div class="signupDiv">
			<button class="signupBtn" type="submit" name="submit">Изпрати</button>
			</div>
		</form>
		
	</main>


	<?php
    require "footer.php";
  ?>
