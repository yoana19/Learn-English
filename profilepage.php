<?php
  require 'header.php';
  include 'includes/dbh.inc.php';
 ?>

<?php 

    if (isset($_SESSION['userId'])) {
        
        if ($_SESSION['userId'] > 0 ) {
            
            
            
        }
        
        echo  '<form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="photo-submit">Качи</button>
        </form>';
        
    } else {
        echo "Не сте влезли в профила си!";
    }

?>



<?php
   require 'footer.php';
  ?>
