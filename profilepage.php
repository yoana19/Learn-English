<?php
  require 'header.php';
  include 'includes/dbh.inc.php';
 ?>


<div class="content-profile-page">
    <div class="profile-user-page cardProfile">
        <div class="img-user-profile">
            <img class="profile-bgHome" src="img/redbg.jpg" />
            <img class="avatar" src="https://api.adorable.io/avatars/random" alt="Profile Photo">
        </div>

        <div class="user-profile-data">
            <h1>

                <?php 
		
				echo $_SESSION['userUid'];
					
				?>

            </h1>
            <p>


            </p>
        </div>
        <div class="description-profile">

           
        </div>
        <ul class="data-user">
            <li><a><strong>
                        <?php
				
					echo $_SESSION['userXp'];	
					
				?>
                    </strong><span>Точки</span></a></li>
            <li><a><strong>
                        <?php 
					
					echo $_SESSION['userLvl'];	
					
				?>
                    </strong><span>Ниво</span></a></li>
        </ul>
    </div>
</div>



<?php
   require 'footer.php';
  ?>
