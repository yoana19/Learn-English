<?php
    require "header.php";
?>

	<div style="text-align:center">

		<?php

if (isset($_GET['island'])) {
	
echo '<h4 class="bookTitle">Treasure Island</h4>
<iframe src="https://www.planetebook.com/free-ebooks/treasure-island.pdf" frameborder="0" height="500px" width="100%"></iframe>';
	
} else if (isset($_GET['dracula'])) {
	
echo '<h4 class="bookTitle">Dracula</h4>
<iframe src="https://www.planetebook.com/free-ebooks/dracula.pdf" frameborder="0" height="500px" width="100%"></iframe>';	
	
} else if (isset($_GET['crusoe'])) {
	
echo '<h4 class="bookTitle">Robinson Crusoe</h4>
<iframe src="https://www.planetebook.com/free-ebooks/frankenstein.pdf" frameborder="0" height="500px" width="100%"></iframe>';	
	
} else if (isset($_GET['alice'])) {
	
echo '<h4 class="bookTitle">Alice’s Adventures in Wonderland</h4>
<iframe src="https://www.planetebook.com/free-ebooks/alices-adventures-in-wonderland.pdf" frameborder="0" height="500px" width="100%"></iframe>';	
	
} else if (isset($_GET['world'])) {
	
echo '<h4 class="bookTitle">Around the World in 80 Days</h4>
<iframe src="https://www.planetebook.com/around-the-world-in-80-days" frameborder="0" height="500px" width="100%"></iframe>';	
	
} else if (isset($_GET['1984'])) {
	
echo '<h4 class="bookTitle">1984</h4>
<iframe src="https://www.planetebook.com/free-ebooks/1984.pdf" frameborder="0" height="500px" width="100%"></iframe>';	
	
} else if (isset($_GET['women'])) {
	
echo '<h4 class="bookTitle">Little Women</h4>
<iframe src="https://www.planetebook.com/free-ebooks/little-women.pdf" frameborder="0" height="500px" width="100%"></iframe>';	
	
} else if (isset($_GET['cities'])) {
	
echo '<h4 class="bookTitle">A Tale of Two Cities</h4>
<iframe src="https://www.planetebook.com/free-ebooks/a-tale-of-two-cities.pdf" frameborder="0" height="500px" width="100%"></iframe>';		
	
}
	
?>
	</div>

	<?php
    require "footer.php";
?>
