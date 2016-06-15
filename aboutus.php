<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTML5</title>
	<meta charset="utf-8">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	</script>
	<![endif]-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
	<link rel="stylesheet" href="css/css_bs.css">
</head>

<body class="body">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $current="contact"; include 'header.inc'; ?>
			</div>
		</div>
    	<div class="row">
			<div class="col-md-9">
				<article class="staticcontent">
						<h3>About Us</h3>
					<content>
						<div class="col-md-12 larger-text">
                            <ul style="list-style: inherit;">
                                <li>Childcare facility and program data were provided by the <a class="aboutus" href="humanservices.arkansas.gov">Department of Human Services.</a></li>
                                <li>Demographic data was collected from various state and federal sources and compiled by the UALR <a class="aboutus" href="http://iea.ualr.edu">Institute for Economic Advancement.</a></li>
                                <li>This website is maintained by the <a class="aboutus" href="https://argis.ualr.edu">Geographic Information Systems Laboratory</a>, UALR.</li>
                            </ul>
						</div>						
						<div class="col-md-12 text-center larger-text">
							<span>Have feedback or errors? Use our <a href="feedback.aspx">Feedback form</a></span>
						</div>
					</content>
				</article>
				
			   <footer>
						<p class="post-info">AECAM is a project of the <a href="http://humanservices.arkansas.gov/dccece/Pages/default.aspx"> Arkansas Department of Human Services, Division of Child Care and Early Childhood Education</a> that is operated by the <a href="http://iea.ualr.edu/"> Institute for Economic Advancement</a> at the <a href="http://ualr.edu/">University of Arkansas at Little Rock</a>.</p>
				</footer>
			</div>
			<?php include 'sidebar.inc'; ?>	
         </div>
		 <div class="row">
			<div class="col-md-12">
				<?php include 'footer.inc'; ?>
			</div>
		</div>
    </div>	
</html>
