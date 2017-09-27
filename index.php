<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Shape Calculator</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container">
		<div class="image_container">
			 <img src="images/header_bg.gif" class="header_bg"/>
			 <div class="logo">Shape Calculator</div>
		</div>
		<div class="page_content">
			<div class="row">
				<div class="col-md-5">
					<p class="text_content_header">Welcome to Shape Calculator</p>

					<p><b>Shape Calculator is an interactive web application. To the right you will
					find the 3 step application. Follow the instructions in each step.
					Clicking cancel will take you back to step 1. Enjoy!</b></p>

					<p>A small river named Duden flows by their place and supplies it with the
					necessary regelialia. It is a paradisematic country, in which roasted parts of
					sentences fly into your mouth.</p>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an
					almost unorthographic life One day however a small line of blind text by the
					name of Lorem Ipsum decided to leave for the far World of Grammar. The
					Big Oxmox advised her not to do so, because there were thousands of bad
					Commas.</p>
				</div>
				<div class="col-md-4">
					<div id="step1" class="steps">
						<p class="step_title text-center">Step 1 : Select your shape</p>
						<p>
							Please select the shape that you would like
							to calculate the area of and press the
							button "Go to step 2"
						</p>
						<div class="shape_types">
							<div class="radio">
							  <label>
							    <input type="radio" name="shapes" id="shape1" value="rectangle">
							    Rectangle
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="shapes" id="shape2" value="circle">
							    Circle
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="shapes" id="shape3" value="square">
							    Square
							  </label>
							</div>
							<div class="radio">
							  <label>
							    <input type="radio" name="shapes" id="shape4" value="elipse">
							    Elipse
							  </label>
							</div>									
						</div>
						<p class="step_buttons">
							<button class="btn btn-default" id="btnStep1">Go to Step 2</button>
						</p>
					</div>
					<div id="step2" class="steps">
						<p class="step_title text-center">Step 2 : Insert your values</p>
						<p>
							You have selected a <b><span class="shape_name"></span></b>, please input
							the required variables.
						</p>
						<div class="step_content text-center center-block">
							<form id="shapeForm" action="AreaCalculator.php" method="POST">
								<input type="hidden" name="shape_type" id="shape_type" />
								<div class="">
									<div id="shapeInputs" class="dna-template">
										<span><b>~~labelName~~</b></span> <span><input type="text" name="~~inputName~~" placeholder="~~inputPlaceholder~~"></span>
									</div>
								</div>
								<p class="step_buttons">
									<button class="btn btn-default" type="submit" id="btnStep2">Go to Step 3</button> Or <a href="#" class="cancelForm">Cancel</a>
								</p>
							</form>
						</div>
					</div>
					<div id="step3" class="steps">
						<p class="step_title text-center">Step 3 : Your results</p>
						<p>
							You have calculated the area of a <b><span class="shape_name"></span></b>
							with <span id="shapeParameters" class="dna-template"><span>~~content~~</span><span>. Below is your result:</span></span>
						</p>
						<div class="step_content text-center center-block">
							<h4>The Area is <b><span id="calculatedArea"></span></b></h4>
						</div>
						<p class="step_buttons">
							<button class="btn btn-default" id="btnStep3">Start Over</button>
						</p>
					</div>
				</div>
				<div class="">
					<div class="vertical_ad_place">
						<fiv class="text-center ad_content">
							<div class="text-center">120 x 240 Ad</div>
							<div class="text-center">(Vertical Banner)</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src=https://cdn.jsdelivr.net/npm/dna.js@1.3/dna.min.js></script>
<script type="text/javascript" src="js/app.js"></script>
</html>
