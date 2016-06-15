    <header class="mainHeader">
    	<img src="img/bg2015_01.jpg">
        <nav>
			<ul>
				<li <?php if($current == 'home') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
				<li <?php if($current == 'map') {echo 'class="active"';} ?>><a href="gismap.php">Map Search</a></li>
				<li <?php if($current == 'resources' || $current== 'backtoschool') {echo 'class="active dropdown"';} else { echo 'class="dropdown"';}?>>
					<a href="resources.php" class="dropbtn";}>Community Resources</a>
					<div class="dropdown-content">
						<a href="backtoschool.php">Getting Ready for School</a>
					</div>
				</li>
				<li <?php if($current == 'guide') {echo 'class="active"';} ?>><a href="#">User Guide</a></li>
				<li <?php if($current == 'contact') {echo 'class="active"';} ?>><a href="contactus.php">Contact Us</a></li>
			</ul>
		</nav>
    </header>