<!DOCTYPE html>
<html lang="en">
<head>
	<title>AECAM</title>
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
				<?php $current="home"; include 'header.inc'; ?>
			</div>
		</div>
    	<div class="row">
			<div class="col-md-9">
				<article class="topcontent">
					<header>
						<h3>Welcome to the Arkansas Early Childhood Asset Map</h3>
					</header>
							
					<content>
						<p>The Arkansas Early Childhood Asset Map (AECAM) provides a variety of information on early childhood services in Arkansas. AECAM is composed of mapping services, a resource guide, and data from the Getting Ready for School publication.</p>
					</content>
				</article>
				
				<article class="middlecontent">
					<header>
						<h4>Map Search</h4>
					</header>
					<content>
						<p>Our <a href="gismap.php">map based searches</a> cover Head Start, Childcare Facilities, Arkansas Better Chance Facilities, and Special Nutrition Programs using the latest in Geographic Information Systems technology.</p>
					</content>
				</article>
				
				<article class="bottomcontent">
					<header>
						<h4>Community Resources</h4>
					</header>
					<content>
						<p>Our <a href="resources.php">Community Resources Guide</a> provides a directory to many early childhood service providers throughout the state with search options that include keywords, county of locations, services provided, and Professional categories based on the <a href="http://www.cssp.org/reform/strengtheningfamilies">Strengthening Families Protective Factors Framework</a>. The data itself is maintained by UAMS Department of Family and Preventive Medicine.</p>
					</content>
				</article>
				
				<article class="bottom2content">
					<header>
						<h4>Getting Ready for School - Year by year statistical data on children in Arkansas</h4>
					</header>
					<content>
						<p><a href="backtoschool.php">This publication</a> is a comprehensive set of school readiness indicators to inform public policy for young children and their families.
					</content>
				</article>
				
			   <footer>
						<p class="post-info">AECAM is a project of the <a href="http://humanservices.arkansas.gov/dccece/Pages/default.aspx"> Arkansas Department of Human Services, Division of Child Care and Early Childhood Education</a> that is operated by the <a href="http://iea.ualr.edu/"> Institute for Economic Advancement</a> at the <a href="http://ualr.edu/">University of Arkansas at Little Rock</a>.</p>
				</footer>
			</div>
			<?php include 'sidebar.inc'; ?>	
		 <div class="row">
			<div class="col-md-12">
				<?php include 'footer.inc'; ?>
			</div>
		</div>
    </div>
	
</html>
