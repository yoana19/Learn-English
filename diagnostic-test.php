<?php
    require "header.php";
?>

	<div id="mainDiag">
		<!-- open main div -->
		<div class="headerDiag">
			<!-- open header div -->
			<h1>Диагностичен тест</h1>
			<hr>
			<br>
		</div>
		<!-- close header div -->

		<form id="form1">

			<h2 class="quDiag">I...18 years old.</h2>
			<label for="var_string"><input class="diagBtn" type="radio" name="qu1" value="4" id="var_string" />am</label>
			<label for="var_join"><input class="diagBtn" type="radio" name="qu1" value="0" id="var_join" />is</label>
			<label for="var_info"><input class="diagBtn" type="radio" name="qu1" value="0" id="var_info" />are</label>

			<h2 class="quDiag">Yesterday, you and George...at the hospital.</h2>
			<label for="sub_string"><input class="diagBtn" type="radio" name="qu2" value="0" id="sub_string"/>was</label>
			<label for="sub_join"><input class="diagBtn" type="radio" name="qu2" value="4" id="sub_join"/>were</label>

			<h2 class="quDiag">The man on this painting...at the girl</h2>
			<label for="cat_string"><input class="diagBtn" type="radio" name="qu3" value="0" id="cat_string" />looks</label>
			<label for="cat_join"><input class="diagBtn" type="radio" name="qu3" value="4" id="cat_join" />is looking</label>
			<label for="cat_info"><input class="diagBtn" type="radio" name="qu3" value="0" id="cat_info" />looked</label>
			<label for="cat_condition"><input class="diagBtn" type="radio" name="qu3" value="0" id="cat_condition" />have looked</label>

			<h2 class="quDiag">She likes...for her friends</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu4" value="0" id="if_string" />to cooking</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu4" value="0" id="if_join" />cook</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu4" value="4" id="if_info" />cooking</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu4"  value="0" id="if_condition" />cooked</label>
			
			<h2 class="quDiag">I...to bed at 9 o’clock every night.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu5" value="0" id="if_string" />was going</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu5" value="0" id="if_join" />am going</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu5" value="0" id="if_info" />to go</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu5"  value="4" id="if_condition" />go</label>
			
			<h2 class="quDiag">Emma is...than Susan</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu6" value="0" id="if_string" />more pretty</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu6" value="0" id="if_join" />the prettier</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu6" value="0" id="if_info" />most pretty</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu6"  value="4" id="if_condition" />prettier</label>
			
			<h2 class="quDiag">We met...Friday</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu7" value="4" id="if_string" />on</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu7" value="0" id="if_join" />at</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu7" value="0" id="if_info" />in</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu7"  value="0" id="if_condition" />after</label>
			
			<h2 class="quDiag">How...time should I wait for you?</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu8" value="0" id="if_string" />many</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu8" value="4" id="if_join" />much</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu8" value="0" id="if_info" />a lot of</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu8"  value="0" id="if_condition" />lots</label>
			
			<h2 class="quDiag">How...times should I tell you?</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu9" value="0" id="if_string" />much</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu9" value="0" id="if_join" />lots of</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu9" value="0" id="if_info" />numerous</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu9"  value="4" id="if_condition" />many</label>
			
			<h2 class="quDiag">If I go,...you come?</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu10" value="0" id="if_string" />would</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu10" value="4" id="if_join" />will</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu10" value="0" id="if_info" />have</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu10"  value="0" id="if_condition" />are</label>
			
			<h2 class="quDiag">I was watching TV, when you....</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu11" value="0" id="if_string" />had called</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu11" value="0" id="if_join" />call</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu11" value="0" id="if_info" />calling</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu11"  value="4" id="if_condition" />called</label>
			
			<h2 class="quDiag">What were you doing while he...?</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu12" value="0" id="if_string" />cook</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu12" value="0" id="if_join" />cooked</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu12" value="4" id="if_info" />was cooking</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu12"  value="0" id="if_condition" />cooks</label>
			
			<h2 class="quDiag">I am looking forward...you.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu13" value="0" id="if_string" />meet</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu13" value="0" id="if_join" />to meet</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu13" value="0" id="if_info" />meeting</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu13"  value="4" id="if_condition" />to meeting</label>
			
			<h2 class="quDiag">I...tomorrow.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu14" value="4" id="if_string" />am traveling</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu14" value="0" id="if_join" />traveling</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu14" value="0" id="if_info" />traveled</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu14"  value="0" id="if_condition" />have traveled</label>
			
			<h2 class="quDiag">...is a great pleasure</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu15" value="0" id="if_string" />Read</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu15" value="0" id="if_join" />To read</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu15" value="4" id="if_info" />Reading</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu15"  value="0" id="if_condition" />Reads</label>
			
			<h2 class="quDiag">If I went to America, I...teacher</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu16" value="0" id="if_string" />will become</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu16" value="4" id="if_join" />would become</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu16" value="0" id="if_info" />became</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu16"  value="0" id="if_condition" />become</label>
			
			<h2 class="quDiag">If you...to me, I wouldn’t have had to save you.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu17" value="4" id="if_string" />had listened</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu17" value="0" id="if_join" />listen</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu17" value="0" id="if_info" />listened</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu17"  value="0" id="if_condition" />were listening</label>
			
			<h2 class="quDiag">The window....</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu18" value="0" id="if_string" />break</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu18" value="0" id="if_join" />breaks</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu18" value="4" id="if_info" />was broken</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu18"  value="0" id="if_condition" />were broken</label>
			
			<h2 class="quDiag">I am tall. ... I?</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu19" value="0" id="if_string" />Am</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu19" value="0" id="if_join" />Are</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu19" value="4" id="if_info" />Aren't</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu19"  value="0" id="if_condition" />Isn't</label>
			
			<h2 class="quDiag">You...to Germany once.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu20" value="4" id="if_string" />have been</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu20" value="0" id="if_join" />been</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu20" value="0" id="if_info" />had been</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu20"  value="0" id="if_condition" />has been</label>
			
			<h2 class="quDiag">I...for the next 6 months.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu21" value="0" id="if_string" />travel</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu21" value="0" id="if_join" />traveled</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu21" value="0" id="if_info" />was traveling</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu21"  value="4" id="if_condition" />will be traveling</label>
			
			<h2 class="quDiag">The teacher had a lot of...to do.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu22" value="4" id="if_string" />work</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu22" value="0" id="if_join" />works</label>
			
			<h2 class="quDiag">We were considering to travel...car.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu23" value="0" id="if_string" />on</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu23" value="4" id="if_join" />by</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu23" value="0" id="if_info" />onto</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu23"  value="0" id="if_condition" />into</label>
			
			<h2 class="quDiag">When you called, I still...asked her.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu24" value="4" id="if_string" />hadn't</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu24" value="0" id="if_join" />haven't</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu24" value="0" id="if_info" />not</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu24"  value="0" id="if_condition" />didn't</label>
			
			<h2 class="quDiag">I...here for 3 years, when I married him.</h2>
			<label for="if_string"><input class="diagBtn" type="radio" name="qu25" value="0" id="if_string" />live</label>
			<label for="if_join"><input class="diagBtn" type="radio" name="qu25" value="0" id="if_join" />lived</label>
			<label for="if_info"><input class="diagBtn" type="radio" name="qu25" value="0" id="if_info" />have been living</label>
			<label for="if_condition"><input class="diagBtn" type="radio" name="qu25"  value="4" id="if_condition" />had been living</label>

		<div class="signupBtnDiv">
			<button class="signupBtn" type="submit" value="Submit">Submit</button>

			</div>
		</form>
	
		<div class="grade">
		<p>Your grade is: <span id="grade">__</span></p>
		<p id="grade2"></p>
		</div>
	</div>


	<!-- close main div -->

	<script>
		document.getElementById("form1").onsubmit = function() {
			qu1 = parseInt(document.querySelector('input[name = "qu1"]:checked').value);
			qu2 = parseInt(document.querySelector('input[name = "qu2"]:checked').value);
			qu3 = parseInt(document.querySelector('input[name = "qu3"]:checked').value);
			qu4 = parseInt(document.querySelector('input[name = "qu4"]:checked').value);
			qu5 = parseInt(document.querySelector('input[name = "qu5"]:checked').value);
			qu6 = parseInt(document.querySelector('input[name = "qu6"]:checked').value);
			qu7 = parseInt(document.querySelector('input[name = "qu7"]:checked').value);
			qu8 = parseInt(document.querySelector('input[name = "qu8"]:checked').value);
			qu9 = parseInt(document.querySelector('input[name = "qu9"]:checked').value);
			qu10 = parseInt(document.querySelector('input[name = "qu10"]:checked').value);
			qu11 = parseInt(document.querySelector('input[name = "qu11"]:checked').value);
			qu12 = parseInt(document.querySelector('input[name = "qu12"]:checked').value);
			qu13 = parseInt(document.querySelector('input[name = "qu13"]:checked').value);
			qu14 = parseInt(document.querySelector('input[name = "qu14"]:checked').value);
			qu15 = parseInt(document.querySelector('input[name = "qu15"]:checked').value);
			qu16 = parseInt(document.querySelector('input[name = "qu16"]:checked').value);
			qu17 = parseInt(document.querySelector('input[name = "qu17"]:checked').value);
			qu18 = parseInt(document.querySelector('input[name = "qu18"]:checked').value);
			qu19 = parseInt(document.querySelector('input[name = "qu19"]:checked').value);
			qu20 = parseInt(document.querySelector('input[name = "qu20"]:checked').value);
			qu21 = parseInt(document.querySelector('input[name = "qu21"]:checked').value);
			qu22 = parseInt(document.querySelector('input[name = "qu22"]:checked').value);
			qu23 = parseInt(document.querySelector('input[name = "qu23"]:checked').value);
			qu24 = parseInt(document.querySelector('input[name = "qu24"]:checked').value);
			qu25 = parseInt(document.querySelector('input[name = "qu25"]:checked').value);


			result = qu1 + qu2 + qu3 + qu4 + qu5 + qu6 + qu7 + qu8 + qu9 + qu10 + qu11 + qu12 + qu13 + qu14 + qu15 + qu16 + qu17 + qu18 + qu19 + qu20 + qu21 + qu22 + qu23 + qu24 + qu25;

			document.getElementById("grade").innerHTML = result;
			

			grading = [{
					score: 0,
					feedback: "A1",
					image: "none.jpg"
				},
				{
					score: 25,
					feedback: "A1",
					image: "poor.jpg"
				},
				{
					score: 50,
					feedback: "A2",
					image: "avg.jpg"
				},
				{
					score: 75,
					feedback: "B1",
					image: "above.jpg"
				},
				{
					score: 100,
					feedback: "B2",
					image: "excellent.jpg"
				}
			];

			for (i = 0; i < grading.length; i++) {
				if (result == grading[i].score) {
					result2 = grading[i].feedback + "<br /><img src='" + grading[i].image + "' width='300'  />";
				}
			}
			
			document.getElementById("grade2").innerHTML = result2;


			return false; // required to not refresh the page; just leave this here
		} //this ends the submit function

	</script>




	<?php
	require "footer.php";
?>
