<?php
    require "header.php";
?>

	<header>
		<div class="home_header">
			<img class="homeImg" src="img/home.jpg">
			<div class="centerHome">Учете английски език по лесен и достъпен начин</div>
			<div class="diagnostic">
				<form action="diagnostic-test.php">
				<button class="diagnosticBtn">Започни</button>	
				</form>
			</div>

		</div>
	</header>


	<article class="card">
		<div class="card__wrapper">

			<figure class="card__feature">
				<img src="https://www.dropbox.com/s/z7gp2vanse5djxf/waves.jpg?raw=1" class="card__img" alt="waves" width="275" height="240">
			</figure>

			<div class="card__box">

				<header class="card__item card__header">
					<h6 class="card__item card__item--small card__label">Featured</h6>
					<h2 class="card__item card__item--small card__title">Как да научим английски по-бързо</h2>
				</header>

				<hr class="card__item card__divider">

				<section class="card__item card__body">
					<p>Прочете съвети за ученето на английски, дадени от учители.</p>
				</section>

			</div>

		</div>
	</article>

	<article class="card">
		<div class="card__wrapper">

			<figure class="card__feature">
				<img src="https://www.dropbox.com/s/r06tebu17sjfcca/bridge.jpg?raw=1" class="card__img" alt="Bridge" width="275" height="240">
			</figure>

			<div class="card__box">

				<header class="card__item card__header">
					<h6 class="card__item card__item--small card__label">Featured</h6>
					<h2 class="card__item card__item--small card__title">Как четенето на книги помага при ученето на английски?</h2>
				</header>

				<hr class="card__item card__divider">

				<section class="card__item card__body">
					<p>Разберете какво прави книгите най-подходящото средство за учене на език.</p>
				</section>

			</div>

		</div>
	</article>
	
	<article class="card">
		<div class="card__wrapper">

			<figure class="card__feature">
				<img src="https://www.dropbox.com/s/z7gp2vanse5djxf/waves.jpg?raw=1" class="card__img" alt="waves" width="275" height="240">
			</figure>

			<div class="card__box">

				<header class="card__item card__header">
					<h6 class="card__item card__item--small card__label">Featured</h6>
					<h2 class="card__item card__item--small card__title">Как да научим английски по-бързо</h2>
				</header>

				<hr class="card__item card__divider">

				<section class="card__item card__body">
					<p>Прочете съвети за ученето на английски, дадени от учители.</p>
				</section>

			</div>

		</div>
	</article>

	<!-- Slideshow container -->
	<div class="slideshow-container">

		<!-- Full-width images with number and caption text -->
		<div class="mySlides fade">

			<img src="img/fact1.jpg" style="width:100%">

		</div>

		<div class="mySlides fade">

			<img src="img/fact2.jpg" style="width:100%">

		</div>

		<div class="mySlides fade">

			<img src="img/fact3.jpg" style="width:100%">

		</div>


	</div>


	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) {
				slideIndex = 1
			}
			slides[slideIndex - 1].style.display = "block";
			setTimeout(showSlides, 4000); // Change image every 2 seconds
		}

	</script>

	<!--<header>
        <div class="overlay">
            <h1>Научете английски!</h1>
            <h3>Причини да ни изберете</h3>
            <p>Сайтът е напълно безплатен и цели да направи ученето на английски по-лесно и достъпно</p>
            <br>
            <form>
           <button class="buttonHome" type="submit" width="500" height="20" formaction="/levelchoosing.html">Започни</button>
            </form>
        </div>
    </header>-->

	<?php
    require "footer.php";
?>
