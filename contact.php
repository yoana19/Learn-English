<?php
   require "header.php";
 ?>

<main>

  <p>Свържете се с нас</p>
  <form class="contact-form" action="contactform.php" method="post">
    <input type="text" name="name" placeholder="Име">
    <input type="text" name="mail" placeholder="E-mail">
    <input type="text" name="Subject" placeholder="Предмет">
    <textarea name="message" placeholder="Съобщение"></textarea>
    <button type="submit" name="submit">Изпрати</button>
</main>


 <?php
    require "footer.php";
  ?>
