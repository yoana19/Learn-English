<?php
    require "header.php";
?>

<div id="triangle-topright" class=" animated slideInRight"></div>
<div id="triangle-topright2" class=" animated slideInRight"></div>
<div id="triangle-topright3" class=" animated slideInRight"></div>
<div id="info-section">
    <h1 class=" animated zoomIn">

        <?php
if(isset($_GET['a1/1/1'])) {
    
    echo 'Introduction';
    
} else if (isset($_GET['a1/1/2'])) {
    
    echo 'Friends';
        
} else if (isset($_GET['a1/1/3'])) {
    
    echo 'Personal Pronouns';
    
}  else if (isset($_GET['a1/1/4'])) {
    
    echo 'Common Phrases';
    
} else if (isset($_GET['a1/1/5'])) {
    
    echo 'Spelling';
    
} else if (isset($_GET['a1/1/6'])) {
    
    echo '"To be" Verb';
    
} else if (isset($_GET['a1/2/1'])) {
    
    echo 'Countries and Nationalities';
    
} else if (isset($_GET['a1/2/2'])) {
    
    echo 'Counting to 20';
    
} else if (isset($_GET['a1/2/3'])) {
    
    echo 'Plural Nouns';
    
} else if (isset($_GET['a1/2/4'])) {
    
    echo 'The City';
    
} else if (isset($_GET['a1/2/5'])) {
    
    echo 'Contractions and Apostrophes';
    
} else if (isset($_GET['a1/2/6'])) {
    
    echo 'Present Simple';
    
} else if (isset($_GET['a1/3/1'])) {
    
    echo 'My Family';
    
} else if (isset($_GET['a1/3/2'])) {
    
    echo 'My Big Family';
    
} else if (isset($_GET['a1/3/3'])) {
    
    echo 'Possesive Determiners';
    
} else if (isset($_GET['a1/3/4'])) {
    
    echo 'Descriptive Adjectives';
    
} else if (isset($_GET['a1/3/5'])) {
    
    echo 'Measurements';
    
} else if (isset($_GET['a1/4/1'])) {
    
    echo 'Days of the Week';
    
} else if (isset($_GET['a1/4/2'])) {
    
    echo 'What Time Is It?';
    
} else if (isset($_GET['a1/4/3'])) {
    
    echo 'Questions with "Wh"';
    
} else if (isset($_GET['a1/4/4'])) {
    
    echo 'Transport';
    
} else if (isset($_GET['a1/4/5'])) {
    
    echo 'Questions with "Do" and Negative Questions';
    
} else if (isset($_GET['a1/5/1'])) {
    
    echo 'Weather';
    
} else if (isset($_GET['a1/5/2'])) {
    
    echo 'Seasons and Months';
    
} else if (isset($_GET['a1/5/3'])) {
    
    echo 'Negation with "No"';
    
} else if (isset($_GET['a1/5/4'])) {
    
    echo 'Hobbies';
    
} else if (isset($_GET['a1/5/5'])) {
    
    echo 'Sports';
    
} else if (isset($_GET['a1/6/1'])) {
    
    echo 'At the Supermarket';
    
} else if (isset($_GET['a1/6/2'])) {
    
    echo 'Grocery List';
    
} else if (isset($_GET['a1/6/3'])) {
    
    echo 'Present Continuous';
    
} else if (isset($_GET['a1/6/4'])) {
    
    echo 'Food';
    
} else if (isset($_GET['a1/6/5'])) {
    
    echo 'Eating';
    
} else if (isset($_GET['a1/6/6'])) {
    
    echo 'Present Continuous 2';
    
}
?>
    </h1>
</div>
<div id="triangle-bottomleft" class=" animated slideInLeft"></div>
<div id="triangle-bottomleft2" class=" animated slideInLeft"></div>
<div id="triangle-bottomleft3" class=" animated slideInLeft"></div>


<?php
if(isset($_GET['a1/1/1'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445421" width="1090" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/1/2'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445408" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
        
} else if (isset($_GET['a1/1/3'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445419" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
}  else if (isset($_GET['a1/1/4'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445434" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/1/5'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445438" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/1/6'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445445" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/2/1'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445447" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/2/2'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445449" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/2/3'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445454" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/2/4'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445455" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/2/5'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445456" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/2/6'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/445458" width="899" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/3/1'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446177" width="696" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/3/2'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446180" width="696" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/3/3'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446181" width="696" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/3/4'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446182" width="696" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/3/5'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446184" width="696" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/4/1'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446187" width="696" height="138" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/4/2'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446206" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/4/3'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446208" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/4/4'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446209" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/4/5'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446211" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/5/1'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446218" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/5/2'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446219" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/5/3'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446220" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/5/4'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446221" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/5/5'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446224" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/5/6'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446226" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/6/1'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446227" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/6/2'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446228" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/6/3'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446229" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/6/4'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446230" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/6/5'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446233" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else if (isset($_GET['a1/6/6'])) {
    
    echo '<iframe src="https://h5p.org/h5p/embed/446235" width="629" height="139" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>';
    
} else {
	
	echo 'Не сте избрали урок!';
	
}
?>

<?php
    require "footer.php";
?>
