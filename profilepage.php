<?php
  require 'header.php';
  include 'includes/dbh.inc.php';
 ?>




	<div class="content-profile-page">
		<div class="profile-user-page cardProfile">
			<div class="img-user-profile">
				<img class="profile-bgHome" src="img/bg.jpg" />
				<img class="avatar" src="https://api.adorable.io/avatars/face/:eyes/:nose/:mouth/:color" alt="Steve" onload="document.getElementById('avatar2').src=this.src">
			</div>
			
			<div class="user-profile-data">
				<h1> 
				
				<?php 
					
				echo $_SESSION['userUid'];
					
				?>
				
				</h1>
				<p>Ниво: </p>
			</div>
			<div class="description-profile">

				<p>Folowed by</p> <a href="https://agar.io/" title="agar.io">agar.io</a> | <a href="http://www.totaljerkface.com/happy_wheels.tjf" title="totaljerkface.com/happy_wheels"><strong>Happy Wheels</strong></a> | <a href="https://littlealchemy.com/" title="Little Archemy"><strong>Little Archemy</strong></a> | <a href="http://www.9minecraft.net/" title="9minecraft.net"><strong>9 Minecraft</strong></a> | <a href="http://minecraftsix.com/" title="minecraftsix.com"><strong>Minecraft 6</strong></a> | <a href="http://www.planetminecraft.com/resources/mods/" title="planetminecraft.com"><strong>Planet minectaft</strong></a></div>
			<ul class="data-user">
				<li><a><strong>99999</strong><span>Любими</span></a></li>
				<li><a><strong>999999</strong><span>Followers</span></a></li>
				<li><a><strong>9999999</strong><span>Following</span></a></li>
			</ul>
		</div>
	</div>



	<?php
   require 'footer.php';
  ?>
