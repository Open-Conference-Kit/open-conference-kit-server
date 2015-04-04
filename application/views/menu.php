<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>ftth data input</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Accordion with CSS3" />
        <meta name="keywords" content="accordion, css3, sibling selector, radio buttons, input, pseudo class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/modernizr.custom.29473.js"></script>
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            		<section class="ac-container">
				<div>
					<input id="ac-1" name="accordion-1" type="checkbox" />
					<label for="ac-1">The Council </label>
					<article class="ac-small">
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/insert_about_view">About (Default open screen, talks about Council)</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_role_view/directors">Directors</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_role_view/committees">Committees</a></li>							
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_role_view/team">Team</a></li>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="checkbox" />
					<label for="ac-2">Annual Conference  </label>
					<article class="ac-medium">
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/insert_conference_text_view">annual conference text</a></li>						
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_picture_description_view/upcoming">Upcoming </a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_role_view/conference_team">Conference Team</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_venue">Venue</a></li>	
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_previous_venue">Previous Venue</a></li>							
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_picture_description_view/floorplan">Floor Plan</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_picture_description_view/agenda">agenda</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_role_view/speakers">Speakers</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_categorical_view/sponsors">Sponsors</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_register">register</a></li>
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="checkbox" />
					<label for="ac-3">Workshop & Seminars</label>
					<article class="ac-large">
						<!--li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_picture_description_view/upcoming_workshop">Upcoming workshop</a></li-->
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_previous_workshop_view">recent events</a></li>
						<!--li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_picture_description_view/details">Details</a></li-->	
					</article>
				</div>
				<div>
					<input id="ac-4" name="accordion-1" type="checkbox" />
					<label for="ac-4">Studies & Presentations </label>
					<article class="ac-large">
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_latest_studies/latest_studies">Latest Studies</a></li>
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_picture_description_view/previous_studies">Previous Studies </a></li>
					</article>
				</div>
				<div>
					<input id="ac-5" name="accordion-1" type="checkbox" />
					<label for="ac-5">members </label>
					<article class="ac-large">
						<li><a href = "http://192.185.144.22/~ftthapi/index.php/ftthcontroller/show_categorical_view/members">Member Names and Logos</a></li>
					</article>
				</div>
			</section>
        </div>
    </body>
</html>
