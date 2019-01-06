<?php
    require "header.php";
?>


<!-- Button to open the modal -->
<!-- <button class="signButton" onclick="document.getElementById('id02').style.display='block'">Регистрация</button>

    <!-- The Modal (contains the Sign Up form) -->
<!-- <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>
        <form class="modal-content" action="includes/signup.inc.php" method="POST">
            <div class="container">
                <p>Моля, попълнете формата, за да създадете профил.</p>
                <hr>

                <label for="first"><b>Име</b></label>
                <input type="text" placeholder="Име" name="first" required>

                <label for="last"><b>Фамилия</b></label>
                <input type="text" placeholder="Фамилия" name="last" required>

                <label for="uid"><b>Потребителско име</b></label>
                <input type="text" placeholder="Потребителско име" name="uid" required>

                <label for="email"><b>E-mail</b></label>
                <input type="text" placeholder="E-mail" name="email" required>

                <label for="pwd"><b>Парола</b></label>
                <input type="password" placeholder="Парола" name="pwd" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомни ме
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Откажи се</button>
                    <button type="submit" name="submit">Регистрирай се</button>
                </div>
            </div>
        </form>
    </div>
    </div>


    <script>
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script> -->

<article class="card">
    <div class="card__wrapper">

        <figure class="card__feature">
            <img src="https://www.dropbox.com/s/z7gp2vanse5djxf/waves.jpg?raw=1" class="card__img" alt="waves" width="275" height="240">
        </figure>

        <div class="card__box">

            <header class="card__item card__header">
                <h6 class="card__item card__item--small card__label">Featured</h6>
                <h2 class="card__item card__item--small card__title">Blue Ocean Waves Crash</h2>
            </header>

            <hr class="card__item card__divider">

            <section class="card__item card__body">
                <p>See the beautiful oceans of the Pacific coast where the water is so clean you can see the sand.</p>
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
                <h2 class="card__item card__item--small card__title">Long Exposure River Bridge</h2>
            </header>

            <hr class="card__item card__divider">

            <section class="card__item card__body">
                <p>Long exposure photography is when you leave the shutter open longers than usual to pick up more light.</p>
            </section>

        </div>

    </div>
</article>


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
