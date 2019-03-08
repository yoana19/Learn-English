<?php
    require "header.php";
?>

	<div style="text-align:center">
		<h4 class="exTitle">Говорене (Speaking)</h4>
	</div>

	<iframe src="https://h5p.org/h5p/embed/449585" width="700" height="483" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	<script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>

	<iframe src="https://h5p.org/h5p/embed/449586" width="1090" height="483" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	<script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>

	<iframe src="https://h5p.org/h5p/embed/449551" width="70%" height="479" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	<script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>

	<iframe src="https://h5p.org/h5p/embed/449594" width="1090" height="817" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	<script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>

	<div style="text-align:center">
		<h4 class="exTitle">Четене (Reading)</h4>
	</div>
	<div id="grid">
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h2 class="h3books">Robert Louis Stevenson</h2>
					<h3 class="h2books">Treasure Island</h3>
				</div>
			</div>
			<div class="photo"> <a href="books.php?island"> <img src="https://images-na.ssl-images-amazon.com/images/I/51D9ikxncpL.jpg" href="books.php?oldman"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h2 class="h3books">Bram Stoker</h2>
					<h3 class="h2books">Dracula</h3>
				</div>
			</div>
			<div class="photo"> <a href="books.php?dracula"> <img src="https://images-na.ssl-images-amazon.com/images/I/51oor3Wo2GL._SX326_BO1,204,203,200_.jpg"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h2 class="h3books">Daniel Defoe</h2>
					<h3 class="h2books">Robinson Crusoe</h3>
				</div>
			</div>
			<div class="photo"> <a href="books.php?crusoe"> <img src="https://images-na.ssl-images-amazon.com/images/I/51hG7m7e84L._SX326_BO1,204,203,200_.jpg"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h2 class="h3books">Lewis Carroll</h2>
					<h3 class="h2books">Alice’s Adventures in Wonderland</h3>
				</div>
			</div>
			<div class="photo"> <a href="books.php?alice"> <img src="https://images-na.ssl-images-amazon.com/images/I/41Powf7gsbL._SX326_BO1,204,203,200_.jpg"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h2 class="h3books">Jules Verne</h2>
					<h3 class="h2books">Around the World in 80 Days</h3>
				</div>
			</div>
			<div class="photo"> <a href="books.php?world"> <img src="https://images-na.ssl-images-amazon.com/images/I/41oci0vl-3L._SX326_BO1,204,203,200_.jpg"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h2 class="h3books">George Orwell</h2>
					<h3 class="h2books">1984</h3>
				</div>
			</div>
			<div class="photo"> <a href="books.php?1984"> <img src="https://images-na.ssl-images-amazon.com/images/I/51pAui14H6L._SX326_BO1,204,203,200_.jpg"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h3 class="h3books">Louisa May Alcott</h3>
					<h2 class="h2books">Little Women</h2>
				</div>
			</div>
			<div class="photo"> <a href="books.php?women"> <img src="https://images-na.ssl-images-amazon.com/images/I/51kgR4InypL._SX326_BO1,204,203,200_.jpg"> </a> </div>
		</div>
		<div class="smallgrid">
			<div class="desc">
				<div class="textHolder">
					<h3 class="h3books">Charles Dickens</h3>
					<h2 class="h2books">A Tale of Two Cities</h2>
				</div>
			</div>
			<div class="photo"> <a href="books.php?cities"> <img src="https://images-na.ssl-images-amazon.com/images/I/51fwOaoYriL._SX326_BO1,204,203,200_.jpg"> </a> </div>
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

		<br>
		<?php
	require "footer.php";
?>
