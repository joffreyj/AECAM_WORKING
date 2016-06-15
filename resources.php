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

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/resources.js"></script>

	<link rel="stylesheet" href="css/css_bs.css">
</head>

<body class="body">
<!-- SFPS Image Map -->
<?php include "js/sfpf_imagemap.inc" ?>	
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $current="resources"; include 'header.inc'; ?>
			</div>
		</div>
    	<div class="row" >
			<div class="col-md-9">
            <article class="staticcontent">
				
                <h3>Search Community Resource Data</h3>

                <content>
					<div class="row padded">  
						<div class="col-md-12">
						<p><strong>Search Tips</strong>
						
						<ul>
							<li>Typing food bank will result in hits on records that contain either food or bank or both.</li>
							<li>Typing "food bank" using quotes around the text will return results that contain the exact phrase (both words separated by a space.</li>
							<li>Searches for phone numbers will also need to use quotes around the number being search.</li>
						</ul>  
						</div>
						</div>
						<div class="row padded">
							<div class="col-md-12">
								<strong>Search As:</strong>
								<input id="radpar" type="radio"  name="profparent" checked="checked" value="parent"/>Parent
								<input id="radpro" type="radio"  name="profparent" value="professional"/>Professional<br />
							</div>
						</div>	
						<div class="row  padded">
							<div class="col-md-4">
								<label for="AllSearchCat">Search By:</label>
								<select id="AllSearchCat" class='allProvSearch'>
									<option value="kwSearch">Keyword</option>
									<option value="serviceSearch">Service</option>                                  
								</select>
							</div>
							<div class="col-md-8">
							   <input type="text" size="40" id="AllSearchVal" name="HSsearchVal"/>                                      
								&nbsp;&nbsp;<button id="All" onclick="if($('#AllSearchVal').val()==''){alert('Please enter a search term'); return false;}submitSearch($('#AllSearchCat').children('option:selected').text().toLowerCase(),$('#AllSearchVal').val());return false;">Search</button>
							</div>
						</div>
						<div class="row padded">
							<div class="col-md-12">
								<div id="sfpf" style="display:none;padding-top: 20px;">
									<img alt="SFPF - Domain Map" class="sfpf" border="0" src="img/TIPS2.png" usemap="#Image-Maps_9201207260941477"/>
								</div>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-12">
								<hr/>
								<p class="post-info"><strong>Source:</strong> UAMS Family and Preventive Medicine</p>
							</div>
						</div>
						<div class="row padded">
							<div class="col-md-12">
							<!--fieldset style="width:100%;">
								<legend>Driving Directions:</legend>
								<div >
									<label for="address">Show driving directions from My Address:</label><br /><input type="text" size="50" id="address" name="address" />
									<button onclick="geocodeAddress($('#address').val());setAddress();return false;">Set Address</button>
									<br />(Ex. 2801 S University, Little Rock, AR 72204)<br />

									<font style="color:Gray; font-size:smaller" >Note: The address you provide is not recorded, it will only be used to provide distance related information.</font>
								</div>                                                                   
							</fieldset-->					
							</div>
						</div>
					
							
					</p>
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
</div>
</body>
</html>
