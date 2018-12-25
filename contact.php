<?php
$session_expiration = time() + 3600 * 2; // +2 hours
session_set_cookie_params($session_expiration);
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>	
	<style type="text/css">
		#contact_wrapper {
			width:100%; /* you can change the form width by just changing this line */
			font-family:Arial, Helvetica, sans-serif;
			font-size:90%;
			margin-bottom:20px;
		}
		#contact_wrapper legend {
			display: inherit;
			border:none;
			width:auto;
			font-size:120%;
			font-weight:bold;
		}
		
		#contact_wrapper .genField { 
			display: block;
			width: 100%;
			height: 34px;
			padding: 6px 20px;
			
			line-height: 1.42857143;
			color: #222;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			-webkit-box-sizing:border-box; 
			-moz-box-sizing:border-box; 
			box-sizing:border-box;
		}
		#contact_wrapper .genField.auto { width:auto; }
		#contact_wrapper textarea.genField { min-height:200px; }
		
		#contact_wrapper .button {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
			color: #fff;
		}
		#contact_wrapper .f_left { float:left; }
		#contact_wrapper .f_radio{ font-weight:normal; display:block; }
		
		#contact_wrapper .submit{ background-color: #337ab7; border-color: #2e6da4; padding:6px 30px; margin-left:10px;	}
		#contact_wrapper .reset { background-color: #d9534f; border-color: #d43f3a; }
		
		#contact_wrapper .submit:hover{ background-color: #286090; }
		#contact_wrapper .reset:hover	{ background-color: #C9302C; }
		
		#contact_wrapper input.error, #contact_wrapper textarea.error { border: 1px dashed #F41724; }
		
		
		#contact_wrapper label {
			display: block;
			width:auto;
			line-height: 1.8;
			vertical-align: top;
			cursor: pointer;
			color: #222;
			margin-top:12px;
		}
		#contact_wrapper label.error {font-size:80%; color:#F41724; margin-top:2px; float: right; }
		
		#contact_wrapper .buttons, #contact_wrapper .captcha { margin-top:15px; }
		
		#contact_wrapper .captcha label.f_left { margin:7px 10px inherit inherit;}

		#contact_wrapper #results p {
			padding: 20px;
			color: #FFFFFF;
			font-weight: bold;
			border-radius: 5px;
		}
		
		#contact_wrapper #results p.sending_success { background-color: #337AB7; }
		#contact_wrapper #results p.sending_error 	{ background-color: #D9534F; }
		
		.clearfix:after { 
		   content: "."; 
		   visibility: hidden; 
		   display: block; 
		   height: 0; 
		   clear: both;
		}
    </style>
    
</head>
<body>

<div id="contact_wrapper">

    <fieldset id="form_wrapper">
    	<legend>Contact Form</legend>
        <form name="contactme" id="contactme" action="" method="post"> 
						<label for="fname">First Name *</label>
			<input type="text" name="fname" id="fname" class="genField" />
						<label for="lname">Last Name *</label>
			<input type="text" name="lname" id="lname" class="genField" />
						<label for="email">Email *</label>
			<input type="text" name="email" id="email" class="genField" /> 
			 
			<label for="subject">Subject *</label>
			<input type="text" name="subject" id="subject" class="genField" /> 
			 
			<label for="message">Message *</label>
			<textarea name="message" id="message" class="genField"></textarea>
			<?php
				$no1 = rand(0,9);
				$no2 = rand(0,9);
				$no3 = $no1+$no2; 
				$_SESSION["captcha"] = $no3 = $no1+$no2;
			?>	
	
			<div class="captcha">
			
				<label for="captcha" class="f_left">
					<img src="<?=getImage($no1)?>" alt="" />
					<span style="position:relative; top:-3px;"> + </span> 
					<img src="<?=getImage($no2)?>" alt="" />
					<span style="position:relative; top:-3px;"> = </span>
				</label>
				<input type="text" name="captcha" id="captcha"  class="genField auto" /> 
				 
			</div>
						
			<div class="clearfix"></div>
			<div class="buttons">	    
				<input type="reset" class="button reset" name="reset" value="X" />
				<input type="submit" class="button submit" name="submit" value="Submit Form" />
			
				<span style="float:right; margin-top:8px;">
					<a href="http://scriptgenerator.net/html-php-jquery-simple-contact-form-v2/" title="Valid Contact Form">
						<img 	src="http://www.scriptgenerator.net/generator/html-php-contact-form-mailer-generator_files/validform.jpg" 
								alt="Valid Contact Form" width="20" height="20" />
					</a>
				</span>
			</div>
		</form>
        
 
	</fieldset>
	
	<!-- We will output the results from process.php here -->
	<div id="results" style="display:none;"></div>
	
</div>


<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var msj = "Please enter valid data"; // you can insert here a customized error message
		$('#contactme').validate({
			debug: false,
			rules: {
				// You can set rools to validatate fields here
				fname: { required: true, minlength:2 },
				lname: { required: true, minlength:2 },
				email: { required: true, email: true },
				subject: { required: true, minlength:2 },				
				message: { required: true, minlength:2 },				
				captcha: { required: true, number:true, range:[<? echo $no3.','.$no3; ?> ]},	
			},
			messages: {
				// You can also set a custom message for each field
				fname: "Please enter a valid Name",
				lname: "Please enter a valid Last Name",
				email: "Please enter a valid email address",
				subject: msj,
				message: msj,				
				captcha: msj,			
			},
			submitHandler: function(form) {
				$("#form_wrapper").hide();
				// do adicional stuff of form validation
				$.post("process.php", $("#contactme").serialize(), function(data) {
					$("#results").html(data).show(1000);
				});
			}
		});
	});
</script>

</body>
</html>
<?php
function getImage($no) {
	// this functions store all 10 numbers for captcha in ba64 encode format
	switch ($no){
		case 0: // encoded image 0
		  $img ="data:image/gif;base64,R0lGODlhFAAUAIcAACkAAEIcHEQgIE4qKlEwMF4/P19AQGdIR3pgYIdwcIxycpR/f56Kip+NjaGPj6WPj66enq6fn7Wjo7yqqbyvr8Cvr8KztMW2tci+vsm+vsm/v8zExNfPz9vPzu3n5/Xs6/fv7/Px8fbw8Pfz8vny8vn29vv4+Pz7+/37+/79/f/9/f79/v7+/v/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAP8ALAAAAAAUABQAAAiKAF0IHEiwoMGDCBMqXMhwYQoXD12gYHhCYAQDBySgaNEQAYEQEwBkWMjRAYANLj4AQEDShQABAkcAMECQo0EOABII9DCT4MSCLUw2mGgh50IVCwBcEKgAAAWHDABgcCEiAMyFJToAWJDiAQANKxiCgCCgwIAKPxeaaGgwItu3cCsiJDGwhVsWBQMCADs=";
		  break;
		case 1: // encoded image 1
		  $img = "data:image/gif;base64,R0lGODlhFAAUAIcAACkAAPn29v78/Pz6+v38/Pr29vz7+/jw8P/9/fn09P7+/v79/vz5+fTr6vnx8fPt7vv4+Pv5+f77+/j19d2+vfXt7PXt7d7Av9Ghn/r09Pfw8PTt7fPu7+/j4+jS0unLyvv5+Pr39tmzsfr399u4tvfv74BkY9GioPnt7fjv7vTu7+ve3dGend/Cv9aoqPXu7u/k5PTv74dwcNOhn5R/f/Tr641zc9uxr+va2k8sLPHp6OXCwe/f3vLg4Oza2u/o6fDY2PHm5fjz8929u+7h4FAuLvDl5c6kou7j476sq9y9vPLj4uXQz961tNSiodfPz+/a2UIcHPj09O7m5u3e3diurPDq6vLp6evZ2fr3+NeurtOYmNOjot2wrezOz/v29uO+vNy3t+C3tPr29fXx8V4/P+W7vPr4+dWlovn399Glo/fx8Vo4ONCendywrt27uuC3td67ut+zsd6yse3a2ura2vDk5Prz8/Pl5fPn5+zY1/fs7erY19u7udKdnPLm5u7f3sm/v4JnZ/jy8vHs7efS0ejPzdSrqfbw7/ny8sm+vkQgIPbv7lEwMOGzs+3d3N23tODDw+3Z2O7h4eva2ePLyt+3teLJx+/n6OTf39yxsGpMTNqhod++vvbm5ua9vtquq/r4+Fs5Odiurd+zsvLg3/Dg39yvr+vY2NShn9ywr/ry8vz4+NuvrvXr6+zc2/Pq6vHn5vr08+jV1fn19fXs7NOopvDp6fPj4vf09KWPj+jT0uXPzvj19uLIx+G8u9u5uF9AQOXOzN+xstSfn2hJSfLf3/Pu7d20sfDk4+rZ2Pv39+vj4/r19erX1/z6+/Ts696ysty0s+/i4d6/vv36+v37+/79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAP8ALAAAAAAUABQAAAiWALMJHEiwYEEBBhMqXMiw4UBsDiMaNCDwiQxRFqxBdNgoGAA2QjZGzATARAKJAgMB0BWgoEiD2GgASAKCoAJrCq8N2AQABk6BChZeC8GoSI4OIkMtDABtAIBiHQQuaFihgCIANmJlWxChYYkyiwBEEWSt60CEBiEYfDCQwYGE1xg6aGawQEMH1VAKzODgpUuD1/Z8wRYQADs=";
		  break;
		case 2:  // encoded image 2
		  $img = "data:image/gif;base64,R0lGODlhFAAUAIcAAP37+/38/P78/Pv4+Pv5+f/9/f7+/vTr6vjw8Pz5+fn29vz6+vz7+/nx8f79/vPt7vr39/r29vn09Pj19fTt7d7Av/fw8PPq6tu4tvr09NGhn+Tf39fPz92+venLyujS0vPu719AQPr39pN9ff77+9mzsd67uuzOz/Dl5dKdnPDY2NCenfnt7e7f3vny8u/a2fXu7uzc296yst27unVXV+fS0fXt7Pbw78m+vvr089OYmO7m5uvj49uxr/Dk5OXCwaGPj9Shn10+PtGenebb2vLj4vj09N29u+ve3fn19e3d3O3e3daoqPDq6tXMzPjz8+PV1ZuFhDUODnpgYP36+t23tNu5uMm/v9Oopt61tPTv7/Lf39eurujV1d6/vvv5+Pbm5u/i4eXPzuXOzOO+vNOjosKysvv39+/f3tyvr+/o6eG8u9+3tdWlolw7O9Siofr3+NGlo9u7uezY1/Pu7eXQz+va2uLIx+3a2tywrvPj4t+zsl4/P+ng3410c/rz8/ry8t20sfLp6eva2dGioPLg4OvY2OrZ2PTu741zc+rX1/n3996ysfXr69SrqdiurfXt7fXs7Ora2q6fn/r4+dSfn7yvr+3Z2IdwcNy0s9y9vPDk41EvL/fx8fr19fPl5e/n6M6kokQfH+W7vM7Av/v29tquq/Tr6/j19vz6++rY1+C3tdiurOza2u7j43NVVO7h4Oa9vujT0ujPzfXx8eLJx9++vvbw8ODDw/z4+OGzs5SAgNuvrvHm5dy3t9yxsGdIR9+xsvr4+O7h4dOhnzYPD/Hs7fLm5vLg3zYQEPjy8kIdHff09OvZ2ePLytqhod+zsffs7fr29d2wreC3tPPn5/jv7vHp6PDg33lgYNywr/Dp6b2qqaWPj+/j49/CvykAAP79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAP8ALAAAAAAUABQAAAiZAMcJHEiwoMGDCBMqXJhQHMOHCDdgCgHMDMMC464ksxTgFTgcChM4DAFuAwRu4HYtdMgByLhb3cBNIugQobhwRJZxImgAQMFcDsMteEJDipOBBg6KKxBORB8hbqDUTCggnAJSfEZc8DaFgwOFCqIUyzYikR9wDggMnDqQAri3cEXxFACRYAIEdQl6Mhgh70CffsfVvHmwlLiAADs=";
		  break;
	  	case 3:  // encoded image 3
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOfjAP37+ykAAP38/P7+/vz6+vz5+f78/Pr29vv4+P/9/f79/vLv7/Tr6vz7+/jw8Pnx8fPt7vv5+fPq6vr399mzsfj19fn09PTt7WlKSunLyvn29t7Av/fw8PPu7/77+92+veTf3/r09OjS0tu4ttGhn4dwcIBkZF9AQPr39pSAgJuFhfDp6fz4+PLf3+ra2vTr6+rX1+ve3fry8ryvr9iurGxPT/fx8duvrvXt7d29u+va2sm+vtuxr/Xt7ODDw9u5uPjv7su7uvDk5OXOzNy0s/Dl5e3Z2Pr084Zubt/Cv/Hs7TUODquZmdiurdy3t9DCwt+3te7m5vbw7+W7vKeSkvPj4vr19fbm5tOYmO/n6Pr3+L6srPr4+dSfn9+zsfbv7uO+vJ+Mi/nt7fXu7tGlo9quq/36+vv39/v29vj19jYQEPfs7d61tM6kolEvL9+zsvDq6jYODt67utGioNywruLJx+va2dCenfny8vLj4t6yst6/vvrz8/Lg3+zY1/Dg3/n3904qKt27utywr+zOz/Xr69u7ufTu7/Hm5daoqPbw8JqDg/z6++jV1ff09PLm5ls5Oe3a2tShn9Ojou3e3dyvr5F6evPl5d23tOLIx+PLytyxsO7j49euruLb2+/i4ea9vtGenXpgYHVXV04rK+vY2PHp6OjT0uvj4/DY2NfPz+vZ2erY19qhofjy8uXPzt6yse7f3t2wrd+xsurZ2N20sdOopu/f3vDk49Srqe/j4u7h4fXx8fj09OG8u/r29a6fn+jPzeza2tWlot++vtSioZd+fuzc2+/o6VEwMNy9vPTv7/Pn5+XCwe/a2eXQz+7h4O3d3NKdnOC3tPLp6ZR/f/Xs7OGzs/v5+PPu7dOhn+C3tfr4+Pn19efS0fLg4P79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIfgDFCRxIsKDBgwgTKlzIcCE4cQ8bimsgbkGJE5BUAAjHEISaEgKMBai2kGOKADMm6ApwomTFFAsUbQkATGK4HYtIhWHIEZwnS6OWIGGYAByKLwckmAigyiETDAQKKA0AQoFCDRgCDCAQJI4oqwuf1EjmJhAVABLTql3Ltu3BgAA7";
		  break;
		case 4:  // encoded image 4
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOfhAP37+ykAAP38/P7+/v78/Pr29v79/vnx8fTr6v/9/fz5+fz6+vjw8Pz7+/Pt7vv5+fv4+Pr399u4tvn09PTt7TUODt2+vdfPz9Ghn/fw8Pr09Pn29vPu71EwMN7Av/Lv7/Xt7Pj19ejS0pN9fVAuLunLykIdHVw7O/77+9mzsevZ2fXu7vTu7/ny8vjy8vDk40MfH/Dl5daoqOXQz9ywrurX1/fs7fXr69uxr+XPzu/i4fz4+Ovj49Sfn9/Cv+7h4d+zsuXCwZJ9fLqsrODDw/Xs7PLg4N6ysWxPT96ysvj09O/a2d6/vu3Z2PPj4u3d3K2cnPPl5d+3td+zsdy3t/Dk5Obb2tXMzNSrqfLm5uPLyt23tPfv7/Hp6Pv29vPu7Vs6OpSAgK6enufS0cm/v/r39uO+vPr4+eG8u/Hm5aSOju7m5vDY2OW7vNSiodGlo9Ojot2wreza2tCeneC3tOLIx+3a2u/f3vLj4urY1+XOzNOhn/Pn58Curdy0s+jPzfrz8+LJx8Cvr967uuTf3+7f3vTv7/jz89++vvjv7vfx8fTr69y9vNShn/Dp6duvrujT0mpNTeC3tZJ7e/Lg33pgYJF7e+ve3dqhod29u+3e3eGzs/j19ua9vvbw7+va2ZB4d9OYmPv5+Pv399GioNWlovr089quq/n398/Dw0IcHNywr/Dg39Gendu5uNu7udyxsPry8uzOz9eurujV1fLf38i9vfXx8Y92dvz6+66fn/n19era2vr19d61tM6kouzY1/bm5vr4+Nyvr9iurdiurO/n6Pf09Ozc2+7j49KdnN27uvDq6vXt7YJnZ0QgINOopurZ2PLp6evY2IxxcOva2u/o6d+xsvnt7d20sfHs7fr3+Pr29f36+v79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIbwDBCRxIsKDBgwgTKlzIsKFDg9/UnHgo0FaAABQvwFBFguE3gReepaoQyeGHDmKsBBDi8SSUQ30CDFn4LQESEqAmnQhQSZdCAt4s4RoxwkSFMGQMNBywwAQYiuAEBHAGFRw1QVWzaqX48eA3bwMDAgA7";
		  break;
		case 5:  // encoded image 5
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOfhAP37+/z6+v78/P7+/vz5+f38/Pr29vv4+Pv5+f/9/fn09Pjw8Pn29vTr6vz7+/Pq6vnx8fr3919AQPPt7v79/vj19d2+vffw8N7Av9Ghn/r09PTt7du4tv77++jS0unLyvr39vPu79mzsdywr9OjotLIyPDg3+vY2NKdnPjv7vLp6fTu7/jz8/n399Oopu/f3taoqNSrqfXu7vXr6/Tr6+rX1/j19ujV1c6kopR/f0QgII93d9uxr5qCgtuvruve3d6/vuDDw+/j4vLg4NSfn+XCwWdHR9qhoejT0u3e3d/Cv9y9vFEvL/bv7ty3t+va2ujPzfr08961tPPl5ezc20QfH+a9vodwcPf09FEwMN27utfPz/Dk5Pr29fv5+Pr4+fr4+OO+vN2wreva2du7udOYmOW7vPDm5d6ysvPu7dDCwtGlo+fS0ffx8XpgYNeurjYQEDYODvbw79GenVs5OeC3tOza2u7f3vHm5d6ysd++vvz6+/Pn59y0s/Lm5u7j4/Hp6PDp6era2vry8u/a2evZ2fjy8vDl5fny8vbw8NCenfDq6vLf39WlovTv7+/o6d+3teGzs5SAgPPj4uLJx/Xx8e3Z2N23tOPLyu3d3FAuLvj09Pfs7e/n6N29u9quq+zY19Ohn66fn9yvr6GPj/v29vv399iureXPztywruC3te7h4e7h4OLIx920sdPKydShn+7m5q2dnY1zc/DY2OrZ2Pz4+EIcHN+zsf36+vDk4/r19Vw7O+vj4+XQz+/i4fn19eG8u/r3+PLj4vLg3+3a2urY1/Xt7NGioN67us2+vsm/v9+xsvbm5vrz89+zsqiTk9iurIxyctyxsPXt7U4rK/Xs7PHs7du5uPnt7ezOz9SioeXOzCkAAP79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIdQDBCRxIsKDBgwgTKlzIsKFDgqIk5ZC2Q9Y3hQkEdtu48YpCAheXwQEXQYgChhdJSQCX6AwDh250bKz2CiU4bwFY9OhWhWECbyCaGHhApxtDbyWgBSDw4NbKhQx4aRoQYFacLQ3VZJHAxIgyAA/Dih1Ltiy4gAA7";
		  break;
		case 6:  // encoded image 6
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOfpACkAAP37+/r29v78/P38/Pz5+fv4+Pv5+f/9/UQgIPTr6vjw8Pn09Pz6+vPt7v7+/vPq6vz7+/nx8du4tvn29t2+vf79/ryvr6GPj97Av/Pu71EwMPTt7TYQEPj19fr399mzsffw8NGhn9bHx/77+/r09OjS0unLymxQUNy0s9KdnN2wrfnt7fjv7vny8sOzsruurvTv79/X197V1fj19q2dnfTr6+7m5o1zc/Pn5+jV1erX15SAgPfs7d6/vvLf3+/f3kIdHfXs7ODDw9+xstqhofXt7fHm5e3Z2Pr19e3d3PPl5fHs7fbm5o51dYJnZ+va2vn19ce7u929u/r3+O/n6PLu7k4qKvLo5/j09Pv399Siod67uurY1/rz8+/a2e3a2s6kovr39ua9vuXCwfr4+dyvr/Hp6NWlot++vtGlo+3o6O/o6dOjourZ2PDY2NywruzOz9eurtShn/fv7+XOzOC3tOLJx62cnNiurfPj4u7h4Idvb9OYmOC3tezY19u5uPPu7d20se/j496ysv36+ura2vbw7/z6+8m/v/n399Sfn/Tu7/jy8tvPzuvZ2daoqPLv79uxr5d+fvXx8eGzs9uvrt27uvDr6/Dq6vDp6dy9vO7h4d23tHZZWeXQz/Lg4N+zsvDk4+/j4uLIx+ve3eO+vFEvL/Dg39GioPHt7u/i4ejPzdquq+jT0vXu7tOhn+zc25R/f/Dm5fLg39u7ud+zsdGeneG8u/Xr6/Lm5tSrqZF7e+fS0fXt7Pry8t61tOva2evj46SOju3e3dy3t+za2vv29l9AQOvY2Pr08/Lj4u7j4/fx8fDl5fr29dyxsO7f3mhISN/Cv9OopnpgYPr4+OPLyt6ysdiurOXPztCenfv5+Pz4+N+3tfjz8/f09PLp6dywr+W7vPDk5JB4eP79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIeQDRCRxIsKDBgwgTKlyY8BzDgeYEBmAYYaCVYZ5qOHyIIcGkGRsZVtuwBh2Dh+h4dLhQDoeMgiEJRuqQgI+TIAASMbwAAM83LCMAoGAoC8ALARAGAUDGkBcAKQUgBMVgQSEFR0IbzJK2ASWMBKeuPEFJtqzZs2gRBgQAOw==";
		  break;
		case 7:  // encoded image 7
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOflAP37+ykAAP38/P78/Pr29vv4+Pv5+f/9/fjw8Pnx8f7+/vPt7vn29vz5+fTr6pSAgPz6+vz7+/r39/79/t2+vfn09PTt7fXt7Pfw8N7Av/r09NGhn/j19fPq6sm/v/Pu79u4tunLyodwcO7h4ejS0tmzsfr39v77++Tf366fn92wrf36+vjv7uLJx/ny8vfs7fjz8/n39/z4+DYQEPfv7/fx8fbw8PXr6/Tr6+rX1+jV1ff09Pry8tuvruXCwduxr+va2vXs7N/Cv96/vuGzs+7f3vLv796ysfj09O/a2dy0s967umxQUN29u/Xx8e3e3YZubu3d3Ny9vLipqdCend23tPLj4s6kovr3+Nu5uOfS0fnt7fbm5tGenfv5+Pr08/r19ea9vt+xstyxsPPu7dqhoevZ2e/n6NWlompNTUQgIMCvr9OjotquqzUODvv29t61tPDY2NiurUMfH+XPzuXOzO7j4+LIx9+zsvDm5d+zsd27ut6ysvDp6fbv7tywr9Sfn+zY15R/f/Hm5fDs7Prz8/Pn5/Lm5uza2vTu7/Xt7fTv7/Xu7vLf3+7h4NaoqI93d+O+vOXQz/Ts6+/i4eve3fHs7fHp6O3Z2NOopujPzfDg39+3tbKeneC3tePLyvr4+dSioePV1YBkZEIdHd++vtGlo+va2fj19vr29fv398a7uu/j4ruurtOhn/Lp6dOYmO/j4+C3tN20sevY2OrZ2O/o6e3a2vjy8mhJSPPj4vDk49ywrvDk5OjT0tyvr/r4+JN+fvDl5ezOz+vj4/Pl5e7m5uzc24xycvDq6tu7udiurNKdnPLg4NGioPbw7+/f3qGPj/Hn5vn19eG8u+rY1+/q6vLg3+ra2tShn9SrqeDDw+bb2vz6++W7vMm+vteurty3t/79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIVgDJCRxIsKDBgwgTKlzIsKFDgg8eCEIGKVjDFAEyamwo4oFAVmlEXEQxcI4RguMYuln1UGCuUQBaTiElKqVDazPWtCTABEpLcq3U/CQXzcPQo0iTMgwIADs=";
		  break;
		case 8:  // encoded image 8
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOfnAP37+/78/P38/Pz5+fLv76GPj/r29vv4+Pv5+f/9/f7+/vnx8fPt7vTr6vjw8Pz7+/z6+vr399mzsfj19UQgIOjS0vfw8JR/f14/P/n29t7Av/Tt7du4tvn09N2+vdGhn19AQPr09OnLyvPu71s5OfPq6v79/v77++/j4tKdnOrZ2PXu7tqhoaiUk/nt7dSrqeC3tPbw8PXr6+fS0evZ2ejV1fr08/z6+/jv7vXt7PHt7uva2uzc29GenZF7e/n39+Gzs9Wlovf09N++vvbw78m/v+7m5uLIx/Xx8e3e3dSfn967uu3Z2Ny9vNiurNy3t4dwcN+3tdeurt/Cv5+Mi+LJx04rK+PLyvLg3/Hp6PDk4/36+vr29fLj4uXQz1w7Ot29u8e7u86kouW7vN+xsuXCwdOjou/a2evY2PPu7fLf396ysvr3+N61tNGlo3pgYPLp6e/n6FEwMPDY2Pr19dCendywrt27uvHm5e7h4fDm5d6yse7h4Pry8vDs7PHs7fDp6d20sd+zsvny8ty0s4Rra3VYWOve3fv5+PTu796/vlo4OPj19vTr6+jT0t+zse3a2sm+vvXs7PLg4Oza2tGioNu7ue3d3Nuxr+va2fj09N23tO/o6fXt7e7j49OYmPjy8ujPzfr4+NyxsOO+vNquq/Lm5tiurfr39tSioVEvL+/f3jYPDpB4d+zY1/fs7dywr+Lc3OPd3dOhn+XPzvDl5fPl5evj4+G8u+rX1/z4+L2qqvn19ebb25uFhfv399uvrsu7uuC3te/i4WxQUN2wrfbm5ura2vDq6u7f3vDg3+rY1/rz8/Dk5K6fn7CamvTv7+XOzOa9vuDDw9Shn9Ooptyvr/v29vPn59aoqPfv75SAgPPj4jYQENu5uPr4+ezOz/fx8XRXV/79/SkAAP/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIaADNCRxIsKDBgwgTKlzIsKHDggVAkPAFoFxDOcTMPSMHpWEBcgPJgWi4jdwbc8HIOSNoESEFcl+sUHmIoRArchgckmslkAS5Agx9kAsjcNdPhi3IXRAorpvDCxRULTL0sKrVq1izCgwIADs=";
		  break;
		case 9:  // encoded image 9
		  $img = "data:image/gif;base64,R0lGODlhFAAUAOfkAP37+ykAAP38/Pz5+f7+/v78/Pr29vv5+dfPz/z6+vTr6vn29v/9/fjw8PPt7vz7+/Lv7/79/vnx8TYQEPr394dwcN2+vfj19fn09PTt7fXt7Fs5Offw8N7Av1EwMPPu710+Ptu4ttmzsf77+/v4+F9AQPr09OjS0tGhn5SAgOnLyvPq6kQgINiurNSrqfz4+K6fn927uvDl5e/f3ujV1dOopurY1+za2tuvrvLg39Shn/Hm5cu8u9KdnOvj4/z6+6OMjOXCweDDw9+zsvn19dywr/36+vj09KiUlPry8vXx8aeSku3Z2OLIx9y9vN61tPv5+N23tPjy8uva2fXt7ePLyu/o6YJnZ/Lj4vr4+fbm5vv39/fs7dyxsHpgYOa9vuW7vOjT0vv29vr39vr3+OXQz929u/Tv7/r29fbw8Neurt6/vvDY2Nquq/f09JN+fvPq6dGendCenZN9fd6yseLJx9+3te7h4fDm5d+zse7f3p2IiOvY2PDp6dy0s/Dk5PDl5OC3tdOhn+vZ2ezY1/Xr64BkZPDg3/Tr6+/n6PTs61AuLtiurduxr/Lf3/Xs7PDk4920sdaoqPrz89ywrsm/v9y3t+3e3erX1+C3tO7j4/ny8vHp6Ora2vPn586kotqhoezc2+O+vNWlou7m5kMfH9/Cv/Lp6d+xsvDq6tyvr+jPzdGlo+rZ2KGPj967uu7h4OXOzNGioDUODvnt7fPj4u7o6Pbw79u5uOrg4Pfx8e/i4d++vu/j4u3a2tSfn+3d3Pr08/Pu7ezOz+XPzufS0fj19t2wrfr19dOjovjv7uve3eG8u9SioeLT0/n39+Gzs+DY19u7ufXu7vTu7/Pl5aCOjvLg4Ova2tOYmHZaWt6ysvHs7fr4+O/a2cCurfLm5v79/f/+/v///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAFAAUAAAIcgDHCRxIsKDBgwgTKlyYUBxDgwAeCkxRYgMSAA4ZTnAlAEiACg89lBhHodeiCQ8DpBiXBg+IACm9hIMDqBSLhQ5ZBNjzzdBHhuHGaQNxZcMECBLHDVgSAEFSAnNm8RgX4aE1D28GHngIA2nSr2DDNnwYEAA7";
		  break;

	}
	
	return $img;
	
}
?>