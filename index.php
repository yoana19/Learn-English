<?php
    require "header.php";
?>

<!--	<header>
		<div class="home_header">
			<img class="homeImg" src="img/home.jpg">
			<div class="centerHome">Учете английски език по лесен и достъпен начин</div>
			<div class="diagnostic">
				<form action="diagnostic-test.php">
				<button class="diagnosticBtn">Започни</button>
				</form>

			</div>



		</div>
	</header>-->

<header class="headerHome">
    <section>
        <img src="https://cssanimation.rocks/levelup/public/images/rocky-dashed.svg" class="rocky-dashed">
        <h1 class="header-title">EnglishKo</h1>
        <h3 class="header-subtitle">Научете английски лесно и бързо</h3>
        <p class="header-button"><a href="diagnostic-test.php" class="button">Започнете</a></p>
        <p class="header-button"><a href="https://m.me/229603241284819" target="_blank" class="button">Пишете</a></p>
    </section>
</header>

<div class="fb-page" data-href="https://www.facebook.com/englishkowebsite/" data-small-header="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
</div>

<div id="fb-root"></div>


<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

<div id="target"></div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="229603241284819" theme_color="#0084ff" logged_in_greeting="!" logged_out_greeting="!">
</div>

<?php
    require "footer.php";
?>
