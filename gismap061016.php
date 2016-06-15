<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>AECAM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Leaflet from CDN--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet/1.0.0-rc.1/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/leaflet/1.0.0-rc.1/leaflet-src.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://cdn.jsdelivr.net/leaflet.esri/2.0.0/esri-leaflet.js"></script>
	<link rel="stylesheet" href="/jQWidgets/jqwidgets/styles/jqx.classic.css" type="text/css" />
    <link href="css/demographics.css" rel="stylesheet" type="text/css">
    <link href="css/css_bs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="/jqwidgets/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="/jqwidgets/jqwidgets/jqxslider.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxdocking.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxwindow.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxlistbox.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxdropdownlist.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxtabs.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxcheckbox.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxdata.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxdatatable.js"></script>
	<script type="text/javascript" src="/jQWidgets/jqwidgets/jqxcombobox.js"></script>
	<script type="text/javascript" src="js/widgets.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		<script type="text/javascript" src="js/legend.js"></script>	
</head>
<body class="body">
	<div class="container">
		<div id="spinner">
			<img src="img/wait.gif" alt="Loading..."/>
		</div>	
		<div class="row">
			<div class="col-md-12">
				<?php $current="map"; include 'header.inc'; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"">
				<p class="post-info"><strong>Source:</strong> AECAM Layers: Arkansas Department of Human Services | State Geography Layers: UALR IEA | Demographic Layer compiled from American Community Survey data by UALR IEA</p>
			</div>
		</div>
		<div class="row padded">
			<div class="col-md-1 text-center">
				<div style="background-color:#E5DED4;border-radius: 5px;height:420px;width:100px;">
					<div id="toolDiv"><!--span style="clear:right;">Tools</span-->
						<ul id='toolsSpan' class='toolbar'>						
							<li class="staticToolbarButton" id="layerbtn"><span class="centerText"><img src="img/layers.png" id="helpAecam"/><br/>AECAM Layers</span></li>
							<li class="staticToolbarButton" id="searchbtn"><span class="centerText"><img src="img/binoculars.png" id="helpHelp"/><br/>Search</span></li>
							<li class="staticToolbarButton" id="geographybtn"><span class="centerText"><img src="img/arkansas.png" id="helpState"/><br/>State Geography</span></li>
							<li class="staticToolbarButton" id="demobtn"><span class="centerText"><img src="img/demographics.png" id="helpDemo"/><br/>Demographic Layers</span></li>
							<li class="staticToolbarButton toggleOnly resetbtn" id="resetbtn"><span class="centerText"><img src="img/home_bk.png" id="helpReset"/><br/>Reset Map</span></li>
							<!--li class="staticToolbarButton toggleOnly" id="logoffbtn"><span class="centerText"><img src="img/Logoff.png" id="helpLogoff"/><br/>Log Off</span></li-->
							<li class="staticToolbarButton" id="helpbtn"><span class="centerText"><img src="img/help.png" id="helpHelp"/><br/>Help</span></li>
							<!--li title="About" class="toolbarButton infobtn" id="infobtn"></li-->
						</ul>
					</div>
				</div>
			</div>
		<!--/div>
		<div class="row" -->
			<div class="col-md-11">
				<div id="map"></div>
					
			</div>
			 <div id="docking" style="float:right;">
				 <div>
				<div id="searchWindow">
				<div>Search</div>
				<div style="overflow: hidden;height:260px;">
					<div id="jqxTabs" >
						<ul style="margin-left: 0">
							<li class="searchTip" id="searchHeader"><span>Search Criteria<img src="img/help.png" class="helpImage"/></span></li>
							<li class="searchTip" id="resultsHeader"><span>Search Results(<span id="resultsCount"></span>)</span></li>
						</ul>

						<div  style="font-weight:bold;padding:0 0 10px 10px;">
						<br/>
							<div>1. Select Data Set:</div>
								<select id="program" >
									<option value="0">Better Beginnings Programs</option>
									<option value="1">Child Care Development Fund</option>
									<option value="2">Special Nutrition Programs</option>
									<option value="3">Arkansas Better Chance Programs</option>
									<option value="4">Child Care Facilities</option>
									<option value="5">Head Start Facilities</option>			  
								</select>
							<br/>
							<div>2. Select Search Geography:</div>
								<select id="searchGeography">
									<option value="">--Select a Search Geography--</option>
									<option value="7">City</option>
									<option value="6">Zip Code</option>
									<option value="8">County</option>
									<option value="9">School District</option>
									<option value="4">AR House Dist</option>				  
									<option value="3">AR Senate Dist</option>
									<option value="5">US Congressional Dist</option>
								</select>
							<br/>
							<div>3. Select Search Term:</div>
								<select id="searchValue">
								</select>
							<br/>
						&nbsp;<button id="searchButton" disabled='disabled'>Search</button>
						</div>
						<div style="display: block;">
						<br/>
							<ul id='layerSpan' class='toolbarSR'>
								<li class="toolbarButton layerButtonSR searchResultIcon active" title="Better Beginnings" id="0">
									<span class="centerText"><img src="img/0.png" /></span>									
								</li>
								<li class="toolbarButton layerButtonSR searchResultIcon active" title="CCDF" id="1">
									<span class="centerText"><img src="img/1.png" />
									</span>
								</li>
								<li class="toolbarButton layerButtonSR searchResultIcon active" title="Special Nutrition Programs" id="2">
									<span class="centerText"><img src="img/2.png" />
									</span>
								</li>
							</ul>
							<div id="searchResultText" style="padding-left:5px"></div>
							<div id="searchResults" class="dataTables" style="margin-left:5px;">
							</div>
						</div>
					</div>
				</div>
			</div>
					<div id="demographicWindow" style="height:30%;">
						<div id='Name'>Demographic Layers</div>
						<div style="height:100%;">
							<div style="display: block;padding-bottom:5px;"></div>
								<ul id="demoLayers">
									<li data-selected="true" data-value="9">Percentage of Overweight or Obese Students</li>
									<li data-value="10">Percentage of Births to Teens</li>
									<li data-value="13">Percentage with No Prenatal Care</li>
									<li data-value="12">Percentage of Low Birthweight Babies</li>						
									<li data-value="11">Percentage of Children Under 5 in Poverty</li>
								</ul>
								<div id="demoLegend" style="padding-top:10px;padding-left:10px;"></div>	
								<hr style="margin-top: 10px;margin-bottom:5px;"/>
								<div style="display: block;padding-bottom:10px;">Timeline</div>
								<div id="jqxSlider"></div>
						</div>
					</div>
				   <div id="aecamWindow" style="height:17%;">
						<div>AECAM Layers</div>
							<div style="height:100%;">
								<div id="layerDiv" style="clear:both;"><span style="clear:right;"></span>
									<ul id='layerSpan' class='toolbar'>
										<li class="toolbarButton layerButton idTool" ilayer="0" id="betterBeginnings">
											<span class="centerText"><span id='betterBeginningsImg'></span>
												<br/>Better Beginnings
											</span>
										</li>
										<li class="toolbarButton layerButton idTool" ilayer="1" id="ccdFund">
											<span class="centerText"><span id='ccdFundImg'></span>
												<br/>Child Care Development Fund
											</span>
										</li>
										<li class="toolbarButton layerButton idTool" ilayer="2" id="specialNutrition">
											<span class="centerText"><span id='specialNutritionImg'></span>
												<br/>Special Nutrition Programs
											</span>
										</li>
										<li class="toolbarButton layerButton idTool" ilayer="3" id="abc">
											<span class="centerText"><span id='abcImg'></span>
												<br/>Arkansas Better Chance
											</span>
										</li>
									</ul>
								</div><br/>
								<div id="aecamDiv" style="clear:both;"><span style="clear:right;"></span>
									<ul id='layerSpan' class='toolbar'>
										<li class="toolbarButton layerButton idTool" ilayer="4" id="ccf">
											<span class="centerText"><span id='ccfImg'></span>
												<br/>Child Care Facilities
											</span>
										</li>
										<li class="toolbarButton layerButton idTool" ilayer="5" id="headStart">
											<span class="centerText"><span id='headStartImg'></span>
												<br/>Head Start
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
							<div id="geographyWindow" style="height:20%;">
								<div id='Name'>State Geography</div>
								<div style="height:100%;">					
								<div id="stateDiv" style="clear:both;"><span style="clear:right;">State Geographies</span>
									<ul id='stateSpan' class='toolbar'>
										<li class="toolbarButton layerButton active" id="counties">	
											<span class="centerText"><span id="countiesImg"></span>
												<br/>Counties
											</span>
										</li>							
										<li class="toolbarButton layerButton" id="cities">	
											<span class="centerText"><span id="citiesImg"></span>
												<br/>Cities
											</span>
										</li>	
										<li class="toolbarButton layerButton" id="zipcodes">	
											<span class="centerText"><img src="img/zipcode.png" />
												<br/>Zip Codes
											</span>
										</li>	
										<li class="toolbarButton layerButton" id="roads">	
											<span class="centerText"><span id="roadsImg"></span>
												<br/>Roads
											</span>
										</li>	
									</ul>
								</div>
								<div id="govtDiv" style="clear:both;"><span style="clear:right;">State Districts</span>
									<ul id='govtSpan' class='toolbar'>
										<li class="toolbarButton layerButton" id="school">	
											<span class="centerText"><img src="img/schools.png" />
												<br/>School District
											</span>
										</li>							
										<li class="toolbarButton layerButton" id="senate">	
											<span class="centerText"><img src="img/senate.png" />
												<br/>Senate District
											</span>
										</li>	
										<li class="toolbarButton layerButton" id="house">	
											<span class="centerText"><img src="img/house.png" />
												<br/>House District
											</span>
										</li>
										<li class="toolbarButton layerButton" id="congress">	
											<span class="centerText"><img src="img/congressional.png" />
												<br/>US Cong. District
											</span>
										</li>	
									</ul>
								</div>

							</div>
												
					</div>		
				</div>
			</div>
			<div class="row padded">
			<div class="col-md-12">
			<footer >
					<p class="post-info">AECAM is a project of the <a href="http://humanservices.arkansas.gov/dccece/Pages/default.aspx"> Arkansas Department of Human Services, Division of Child Care and Early Childhood Education</a> that is operated by the <a href="http://iea.ualr.edu/"> Institute for Economic Advancement</a> at the <a href="http://ualr.edu/">University of Arkansas at Little Rock</a>.</p>
			</footer>
			</div>
			</div>
</div>
		<div class="row">
			<div class="col-md-12">
				<?php include 'footer.inc'; ?>
			</div>
		</div>
</div>


<script>
	var url='http://argis.ualr-iea.org/arcgis/rest/services/TimeSeries/MapServer';
	var map;
	var icons=[], lastID;
	var legEntry, currentSearchLayer, searchGeographyLayer, searchResultsLayer;
	$(document).ready(function () {
		$('#aecamWindow').jqxWindow({ height: 'auto', width: 350,  position: { x: 1200, y: 100},autoOpen: false });
		$('#geographyWindow').jqxWindow({ height: 'auto', width: 350,  position: { x: 1200, y: 200},autoOpen: false });
		$('#demographicWindow').jqxWindow({ height: 'auto', width: 350,  position: { x: 1200, y: 300},autoOpen: false });
		$('#searchWindow').jqxWindow({ height: '330px', width: 350,  position: { x: 1200, y: 300},autoOpen: false });
		
		$('#jqxSlider').jqxSlider({  template: "primary", width: '100%', height: 60, min: 2006, max: 2012, value: 2006, ticksFrequency: 1, showMinorTicks: false, showTickLabels: true, step:1, mode: 'fixed'  });
		$("#demoLayers").jqxDropDownList({ width: '100%', height: 25 });

		$.ajax({
		  type: 'GET',
		  url: url + '/legend',
		  data:{f: 'pjson'},
		  dataType: 'jsonp'
		}).then(function(esriLegend){				  
			legendVar = esriLegend;
			$.each(legendVar.layers, function (index, value){
				icons[value.layerId] = value.legend;
			});
			writeLegendImages();
		});	

		map = L.map('map').setView([34.7861, -92.3311], 8);
		map.attributionControl.setPrefix("Developed by the UALR <a target='_new' href='http://iea.ualr.edu'>Institute for Economic Advancement</a>");
		L.esri.basemapLayer('Gray').addTo(map);

		var demoGraphicLayers = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [9,10,11,12],
			f: 'image'
		});
		demoGraphicLayers.setLayers([9]);
		
		var betterBeginnings = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [0]
		});	  
		var ccdFund = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [1]
		});	  
		var specialNutrition = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [2]
		});	  
		var abc = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [3]
		});	  
		var ccf = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [4]
		});	  
		var headStart = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [5]
		});	  
		var roads = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [6]
		});	  
		var cities = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [7]
		});	  
		var counties = L.esri.dynamicMapLayer({
			url: url,
			useCors: false,
			proxy: "/DotNet/proxy.ashx",
			layers: [8]
		}).addTo(map).bringToBack();	

		var queryFeatures = L.esri.dynamicMapLayer({
			url: url,
			proxy: "/DotNet/proxy.ashx",
			useCors: false,
			layers: [7,8]
		});
		
		
		//Search info for search layers
		var dataFields = [
			//{id: '3', key: "OBJECTID", field: "District", qryField: "Senate_Dis", menuDivName: 'senate', searchLayerName: senate},
			//{id: '4', key: "OBJECTID", field: "District", qryField: "House_Dist", menuDivName: 'house', searchLayerName: house},
			//{id: '5', key: "OBJECTID", field: "DISTRICT", qryField: "Cong_Distr", menuDivName: 'congress', searchLayerName: congress},
			//{id: '6', key: "OBJECTID", field: "NAME", qryField: "ARC_ZIP", menuDivName: 'zipcodes', searchLayerName: zipcodes},
			{id: '7', key: "OBJECTID", field: "CITY_NAME", qryField: "Arc_CITY", menuDivName: 'cities', searchLayerName: cities},
			{id: '8', key: "OBJECTID", field: "NAME10", qryField: "ARC_COUNTY", menuDivName: 'school', searchLayerName: counties}
			//{id: '9', key: "OBJECTID", field: "NAME10", qryField: "ARC_COUNTY", menuDivName: 'counties', searchLayerName: counties}
		];
			
		var dataDisplayFields = [	{ fieldName: "ARC_City", 	labelName: "City"}, 
									{ fieldName: "ARC_ZIP", 	labelName: "Zip"}, 
									{ fieldName: "ARC_COUNTY", 	labelName: "County"}, 
									{ fieldName: "House_Dist", 	labelName: "State House Dist"}, 
									{ fieldName: "Senate_Dis", 	labelName: "State Senate Dist"}, 
									{ fieldName: "Cong_Distr", 	labelName: "US Cong Dist"}, 
									{ fieldName: "CITY_NAME", 	labelName: "City"}, 
									{ fieldName: "POP2000", 	labelName: "Pop. 2000"}, 
									{ fieldName: "POP2010", 	labelName: "Pop. 2010"}, 
									{ fieldName: "ProviderNa", 	labelName: "Provider Name"}, 
									{ fieldName: "School_Dis", 	labelName: "School Dist"}];
				
		map.on('load', function(e){
			$("#spinner").hide();
		});
		demoGraphicLayers.on('load', function(e){
			$("#spinner").hide();
		});
		demoGraphicLayers.setTimeRange(new Date('2006-01-01'), new Date('2006-01-01'));
		 $('#jqxSlider').on('change', function (event) {
			$("#spinner").show();
			eventDateTxt = $('#jqxSlider').jqxSlider('value') + "-01-01";
			demoGraphicLayers.setTimeRange(new Date(eventDateTxt), new Date(eventDateTxt));
		});
		$("#demoLayers").on('change', function (event) {
			$("#spinner").show();
			demoGraphicLayers.setLayers([event.args.item.value]);
			setDemoLegend(event.args.item.value);
		});		
		//layer controls 
		$(".layerButton").on("click", function(e){
			var actionLayer = eval(this.id);
			if($(this).hasClass("active")){
				if ($(this).hasClass("idTool"))
					$(this).removeClass("activeTool");
				map.removeLayer(actionLayer);
			}else{
				if ($(this).hasClass("idTool"))
					$(this).addClass("activeTool");
				map.addLayer(actionLayer);
			}
			//checkIdentify();
		});
		$(".layerButtonSR").on("click", function(){
			if($(this).hasClass("active")){
				map.removeLayer(searchResultsLayer);
			}else{
				searchResultsLayer.addTo(map);
			}	
		});
		$(".toolbar").on("click","li",function(){
			if(! $(this).hasClass("toggleOnly"))
				$(this).toggleClass("active");
		});
		$(".toolbarSR").on("click","li",function(){
			if(! $(this).hasClass("toggleOnly"))
				$(this).toggleClass("active");
		});
		$("#resetbtn").on("click", function(){
			location = location.href;
		});
		$("#logoffbtn").on("click", function(){
			location.href = 'logout.html';
		});
		$(".toolbar").on("mouseover","li",function(){
			$(this).addClass("hover");
		});
		$(".toolbar").on("mouseout","li",function(){
			$(this).removeClass("hover");
		});		
		$("#layerbtn").on('click', function(){
			$("#aecamWindow").toggle();
		});		
		$("#geographybtn").on('click', function(){
			$("#geographyWindow").toggle();
		});		
		$("#searchbtn").on('click', function(){
			$("#searchWindow").toggle();
		});		
		$(".dataTables").on('rowSelect', function (event) {
			var rowId = event.args.row.ID;
			var rowKey = event.args.key;
			$.each(map._layers, function(i, item){
				if(this.myId == rowId){
					this.openPopup();
					lastID = rowId;
					return false;
					//map.panTo(this._latlng)
				}
			});
		});
		$("#demobtn").on('click', function(){
			$("#demographicWindow").toggle();
			activeLayer= $('#demoLayers').jqxDropDownList('getSelectedItem');		
			if($( "#demographicWindow" ).is( ":visible" )){
				$("#spinner").show();
				demoGraphicLayers.setLayers([activeLayer.value]).addTo(map);
				setDemoLegend(activeLayer.value);
			}else{				
				map.removeLayer(demoGraphicLayers);				
			}
		});	
		$("#searchValue").on('bindingComplete', function (event) {			
			$("#spinner").hide();
		});

		$('#demographicWindow').on('close', function (event) { $('#demobtn').removeClass("active"); map.removeLayer(demoGraphicLayers);	 });
		$('#geographyWindow').on('close', function (event) { $('#geographybtn').removeClass("active"); });
		$('#aecamWindow').on('close', function (event) { $('#layerbtn').removeClass("active"); });
		$('#searchWindow').on('close', function (event) { $('#searchbtn').removeClass("active"); });
		
		
		/****************************************
		When the user changes the "Search Geography"
		Fill the "Search Value" drop down list with the 
		discreet choices from the Geography, ie County Names, 
		City Names, Zip codes etc.
		*****************************************/
		$('#searchGeography').on('change',function(){
			$("#spinner").show();
			//get output fields because we don't use standardized field names here			
			var searchLayer = $('#searchGeography').val();
			var selectedLayer = $.grep(dataFields, function(n, i) {
				return n.id == searchLayer;
			});
			if(selectedLayer.length >0){
				outFields = selectedLayer[0];
			
				var dropDownQry = queryFeatures.query()
				.layer(searchLayer)
				.where("OBJECTID<>0")
				.fields([outFields.key,outFields.field])
				.returnGeometry(false)
				.orderBy(outFields.field,'DESC')
				.run(function(error, featureCollection, response){
					duplicateVals = [];
					$("#searchValue").jqxComboBox('clear');
					if(featureCollection.features.length!=0){
						$("#searchValue").jqxComboBox('addItem',{label:'--Select a Search Value--', value: ''}); 
						$("#searchValue").jqxComboBox('selectIndex', 0 ); 
						$.each(featureCollection.features, function(index,value){
							listVal = value.properties[outFields.field];
							if (!duplicateVals[listVal]) {
								$("#searchValue").jqxComboBox('addItem', {label: value.properties[outFields.field], value:value.properties[outFields.key]} ); 
								duplicateVals[listVal]=true;
							}
						});
						//$("#spinner").hide();
						$("#searchValue").jqxComboBox('focus');
					}else{
						
					}
					
				});		
			
			}
			
		});
		//when the search value is changed
		//activate the "Search" button
		$("#searchValue").on('change', function(event){
			var value = $(this).val();
			if(value == ""){
				$('#searchButton').attr('disabled','disabled');
			}else{
				$('#searchButton').removeAttr('disabled');
				var args = event.args;
				if (args != undefined) {
					var item = event.args.item;
					if (item != null) {
						searchTerm = event.args.item.label;
					}
				}
			}
		});
		//Search button click
		$("#searchButton").on('click', function(){
			$("#spinner").show();
			if(currentSearchLayer)
				if(currentSearchLayer.searchLayerName != counties){
					map.removeLayer(currentSearchLayer.searchLayerName);
					$("#"+ currentSearchLayer.menuDivName).removeClass('active');
				}
					
			if(searchGeographyLayer)
				map.removeLayer(searchGeographyLayer);

			if(searchResultsLayer)
				map.removeLayer(searchResultsLayer);
			
			$(".searchResultIcon").hide();
			
			var queryProgramLayer = $('#program').val();
			var queryGeographyLayer = $('#searchGeography').val();
			if( (queryGeographyLayer >=3) && (queryGeographyLayer <=5)){
				searchString = "="+ searchTerm +"";
				geoSearchString = "=\'"+ searchTerm +"\'";
			}else{
				searchString = "=\'"+ searchTerm +"\'";
				geoSearchString = "=\'"+ searchTerm +"\'";
			}
			var whereClause = outFields.qryField + searchString;
			var geoWhereClause = outFields.field + geoSearchString;

			searchText =  $('#program').text() + " in " + $('#searchGeography').text() + " " + searchTerm;
			//highlight search geography here
			var geoQuery = queryFeatures.query()
			.layer(queryGeographyLayer)
			.where(geoWhereClause)			
			.run(function(error, featureCollection, response){
			    geographyLayer = L.geoJson( featureCollection.features,{		
					style:{fillColor: 'gray'},
					
					onEachFeature: function (feature, layer) {
						layer.bindPopup(searchText);					
					}
				}).addTo(map);
				searchGeographyLayer = geographyLayer;
				map.fitBounds(geographyLayer.getBounds());
			});
			
			currentSearchLayer = outFields;
			map.addLayer(currentSearchLayer.searchLayerName);
			$("#" + currentSearchLayer.menuDivName).addClass("active");
			
			
			// results query
			var resultsQry = queryFeatures.query()
			.layer(queryProgramLayer)
			.where(whereClause)			
			.run(function(error, featureCollection, response){
				$('#resultsCount').html(featureCollection.features.length);
				searchResultData.length=0;
				var rowCount=0;
				searchResult = L.geoJson( featureCollection.features,{
					pointToLayer: function(feature, latlng) {
						useIcon = 'img/' + queryProgramLayer+ '.png';
						return L.marker(latlng, {icon: L.icon({iconUrl: useIcon, iconAnchor: [10,10]})}); 
					},
					onEachFeature: function (feature, layer) {
						searchResultItem={};
						layer.myId=feature.properties.ObjectID;
						layer.rowID = rowCount;
						rowCount+=1;
						searchResultItem["ID"]=feature.properties.ObjectID;
						searchResultItem["ARC_State"]= feature.properties.ARC_State;
						searchResultItem["ARC_City"]= feature.properties.ARC_City;
						searchResultItem["ARC_ZIP"]= feature.properties.ARC_ZIP;
						searchResultItem["Senate_Dis"]= feature.properties.Senate_Dis;
						searchResultItem["House_Dist"]= feature.properties.House_Dist;
						searchResultItem["ARC_COUNTY"]= feature.properties.ARC_COUNTY;
						searchResultItem["School_Dis"]= feature.properties.School_Dis;
						searchResultItem["ProviderNa"]= feature.properties.ProviderNa;
						searchResultItem["ARC_Street"]= feature.properties.ARC_Street;
						searchResultData.push(searchResultItem);
						
						popupContent = "<div class='datagrid'><table width='100%'><thead><tr><th>Field</th><th>Value</th></tr></thead><tbody>";
						var fieldCount = 0;
						$.each(feature.properties, function(index, dataPoint){	
							var dataField = $.grep(dataDisplayFields, function(n, i) {
								return n.fieldName == index;
							});
							if(dataField.length >0 ){
								popupContent += "<tr ";
								fieldCount += 1;
								if( fieldCount  % 2 === 0 )
									popupContent += "class='alt'";
								popupContent += "><td width='60%'>"+dataField[0].labelName+"</td><td>"+dataPoint+"</td></tr>";
							}
						});
						popupContent +="</table></div>";
						layer.bindPopup(popupContent);
						layer.on("click", function (event) {
							if($.isNumeric(lastID))
								$("#searchResults").jqxDataTable('unselectRow', lastID);
								
							pageNum = parseInt(event.target.rowID / 10);
							$("#searchResults").jqxDataTable('goToPage', pageNum);
							$("#searchResults").jqxDataTable('selectRow', event.target.rowID);
							$("#searchResults").jqxDataTable('ensureRowVisible', event.target.rowID);
							lastID = event.target.rowID;
						});	
					}					
				}).addTo(map).bringToFront();					
				searchResultsLayer = searchResult;
				//map.fitBounds(searchResultsLayer.getBounds());
				
				$("#searchResultText").html(searchText);
				
				$("#"+queryProgramLayer).show();
				$("#searchResults").jqxDataTable('updateBoundData');
				$('#jqxTabs').jqxTabs('select', 1);
				$("#spinner").hide();
			});
		});	
		// End Search features				
	});
	function setDemoLegend(layer){
		legEntry="";		
		$("#demoLegend").html(legEntry);
		$.each(legendVar.layers[layer].legend, function(index, value){
			legEntry += "<div><img src=\'data:image/png;base64,"+value.imageData+"\'/>"+value.label+"</div>";
		});
		$("#demoLegend").html(legEntry);	
	}
	function writeLegendImages(){
		var image;
		var imageLayers = [{ "layerNumber": 0, "layerImgId": "betterBeginningsImg"},
						   { "layerNumber": 1, "layerImgId": "ccdFundImg"},
						   { "layerNumber": 2, "layerImgId": "specialNutritionImg"},
						   { "layerNumber": 3, "layerImgId": "abcImg"},
						   { "layerNumber": 4, "layerImgId": "ccfImg"},
						   { "layerNumber": 5, "layerImgId": "headStartImg"},
						   { "layerNumber": 6, "layerImgId": "roadsImg"},
						   { "layerNumber": 7, "layerImgId": "citiesImg"},
						   { "layerNumber": 8, "layerImgId": "countiesImg"}];
		$.each(imageLayers,function(i){
			value = legendVar.layers[imageLayers[i].layerNumber].legend;
			image = "<img src=\'data:image/png;base64,"+value[0].imageData+"\'/>";
			$("#"+ imageLayers[i].layerImgId ).html(image);
		});		
	}
</script>	
</body>
</html>