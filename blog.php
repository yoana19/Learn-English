<?php
    require "header.php";
?>

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

<div id="grid">
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>
    <div class="smallgrid">
        <div class="desc">
            <div class="textHolder">
                <h3 class="h3books">001: Radiohead</h3>
                <h2 class="h2books">OK Computer</h2>
                <p>[1997 / Capitol]</p>
            </div>
        </div>
        <div class="photo"><img src="https://andybarefoot.com/codepen/images/albums/01.jpg"></div>
    </div>

    <script>
        function alternate() {
            colsno = window.getComputedStyle(document.getElementById("grid")).gridTemplateColumns.split(' ').length;
            smallgrids = document.getElementsByClassName("smallgrid");
            for (i = 0; i < smallgrids.length; i++) {
                thisrow = Math.floor(i / colsno);
                thiscol = i % colsno;
                if ((thisrow + thiscol) % 2 == 1) {
                    smallgrids[i].setAttribute('class', 'smallgrid even');
                } else {
                    smallgrids[i].setAttribute('class', 'smallgrid odd');
                }
            }
        }

        window.onload = alternate();
        window.addEventListener("resize", alternate);

    </script>


    <?php
	require "footer.php";
?>
