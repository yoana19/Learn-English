<?php
  require 'header.php';
  include 'includes/dbh.inc.php';
 ?>

<?php 

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            
            $id = $row['idUsers'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
            
            while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                
                echo "<div>";
                
                    if ($rowImg['status'] == 0) {
                        
                        echo "<img src='img/uploads/profile".$id.".jpg'>";
                        
                    } else {
                        
                        echo "<img src='img/uploads/profiledefault.jpg'>"; 
                        
                    }
                
                    echo $row['uidUsers'];
                echo "</div>";
                
            }
            
        }
        
    } else {
        
        echo "Все още няма потребители!";
        
    }

    if (isset($_SESSION['userId'])) {
        
        if ($_SESSION['userId'] > 0 ) {
            
            echo "Влязохте успешно!";
            
        }
        
        echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
        <input type='file' name='file'>
        <button type='submit' name='photo-submit'>Качи</button>
        </form>";
        
    } else {
        echo "Не сте влезли в профила си!";
    }

?>



<?php
   require 'footer.php';
  ?>
