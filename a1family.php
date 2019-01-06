<?php
  require "header.php";
 ?>

    <header class="lessonHeader">
        <div id="header-content">
            <h1>My Family №2</h1>
            <h3>Моето семейство</h3>
        </div>
    </header>
    <br>
    <table align="left">
        <thead>
            <tr>
                <th>Vocabulary</th>
                <th>Речник</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hello! (formal)<br>Hi! (informal)</td>
                <td>Здравейте! (официално)<br>Здрасти! (неофициално)</td>

            </tr>
            <tr>
                <td>Family</td>
                <td>Моето име е..</td>

            </tr>
            <tr>
                <td>Mother/Father</td>
                <td>Как се казваш?</td>

            </tr>
            <tr>
                <td>Daugther/Son</td>
                <td>Чао!</td>

            </tr>
            <tr>
                <td>Sister/Brother</td>
                <td>Откъде си?</td>

            </tr>
            <tr>
                <td>Grandmother/Grandma</td>
                <td>Как си?</td>

            </tr>
            <tr>
                <td>Grandfather/Grandpa</td>
                <td>Добре съм.</td>

            </tr>
            <tr>
                <td>Aunt/Uncle</td>
                <td>Не съм добре.</td>

            </tr>
            <tr>
                <td>Cousin</td>
                <td>Довиждане!</td>

            </tr>
            <tr>
                <td>Child/Children</td>
                <td>Чао!</td>

            </tr>
            <tr>
                <td>Wife/Husband</td>
                <td>Чао!</td>

            </tr>
            <tr>
                <td>Niece/Nephew</td>
                <td>Чао!</td>

            </tr>
            <tr>
                <td>Granddaughter/Grandson</td>
                <td>Чао!</td>

            </tr>
        </tbody>
        <!-- <tfoot>
      <td>Total</td>
			<td>28</td>
    </tfoot>-->
    </table>



    <audio controls preload="metadata" style=" width:300px;" class="audio">
        <source src="music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">

            <img src="fact1.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="fact2.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="fact3.jpg" style="width:100%">

        </div>


    </div>
    <br>


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


    <div class="container">
      <img src="img/man.png" alt="Man">
      <p>Hello! How <input type="text" id="anw1" class="anw" size="10"> you today?</p>
      <span class="time-right">10:43</span>
    </div>

    <div class="container darker">
      <img src="img/woman.png" alt="Woman" class="right">
      <p>Hey! I'm <input type="text" id="anw2" class="anw" size="10">. Thanks for asking!</p>
      <span class="time-left">10:45</span>
    </div>

    <div class="container">
      <img src="img/man.png" alt="Man">
      <p>Where are <input type="text" id="anw3" class="anw" size="10"> from?</p>
      <span class="time-right">10:46</span>
    </div>

    <div class="container darker">
      <img src="img/woman.png" alt="Woman" class="right">
      <p>I am <input type="text" id="anw4" class="anw" size="10"> Australia.</p>
      <span class="time-left">10:48</span>
    </div>

    <button id="check" class="chatbtn" onclick="check()">Провери</button>
    <button id="reset" class="chatbtn" onclick="reset()">Отново</button>

    <script>

    function check() {
      var text1 = document.getElementById('anw1');
      var anw1 = text1.value.toLowerCase();
      var crr1 = "are";

      if (anw1.indexOf(crr1)) {

        text1.style.backgroundColor = "red";

      } else {
        text1.style.backgroundColor = "green";
      }

      var text2 = document.getElementById('anw2');
      var anw2 = text2.value.toLowerCase();
      var crr2 = "fine";

      if (anw2.indexOf(crr2)) {

        text2.style.backgroundColor = "red";

      } else {
        text2.style.backgroundColor = "green";
      }

      var text3 = document.getElementById('anw3');
      var anw3 = text3.value.toLowerCase();
      var crr3 = "you";

      if (anw3.indexOf(crr3)) {

        text3.style.backgroundColor = "red";

      } else {
        text3.style.backgroundColor = "green";
      }

      var text4 = document.getElementById('anw4');
      var anw4 = text4.value.toLowerCase();
      var crr4 = "from";

      if (anw4.indexOf(crr4)) {

        text4.style.backgroundColor = "red";

      } else {
        text4.style.backgroundColor = "green";
      }

      if(text1.value == 0) {

        text1.style.backgroundColor = "yellow";

      } if(text2.value == 0) {

        text2.style.backgroundColor = "yellow";

      } if(text3.value == 0) {

        text3.style.backgroundColor = "yellow";

      } if(text4.value == 0) {

        text4.style.backgroundColor = "yellow";

      }
    }

    function reset() {
      var anws = document.getElementsByTagName('input');
      for (var ii=0; ii < anws.length; ii++) {

        if(anws[ii].type == "text") {

          anws[ii].value = "";
          anws[ii].style.backgroundColor = "white";

        }
      }
    }

    </script>



<?php
  require "footer.php";
?>
