	$(document).ready(function () {
		
		searchResultData = [
			{
                "ID":"",
				"ProviderNa":"",
				"ARC_Street":"",
				"ARC_City":"",
				"ARC_ZIP":""
			}
		];
		var searchResultSource =
		{
			dataType: "json",
			localData: searchResultData
		};			
		var dataAdapter = new $.jqx.dataAdapter(searchResultSource);
		
		var initSearchResultsData = function () {			
			$("#searchResults").jqxDataTable(
			{
				height: 220,
				pageable: true,
				pagerButtonsCount: 3,
				altRows: true,
				sortable: true,				
				source: searchResultSource,
				//rowDetails: true,
				//initRowDetails: initRowDetails,
				columns: [
                  { text: 'ID', dataField: 'ID', hidden:true},
				  { text: 'Name', dataField: 'ProviderNa', width: 200 },
				  { text: 'Address', dataField: 'ARC_Street', width: 160 },
				  { text: 'City', dataField: 'ARC_City', width: 80 },
				  { text: 'Zip', dataField: 'ARC_ZIP', width: 60 }
			  ]
			});
		}
		
		// Create the search dialog Drop Downs and Combo Box
		function initSearchDialog(){
			$("#program").jqxDropDownList({ width: 300, height: 25 });
			$("#searchGeography").jqxDropDownList({ width: 250, height: 25 });
			$("#searchValue").jqxComboBox({ width: 250, height: 25, displayMember: 'label', valueMember: 'value'});
		}
		
		// init widgets.
		var initWidgets = function (tab) {
			switch (tab) {
				case 0:
					initSearchDialog();
					break;
				case 1:
					initSearchResultsData();
					break;
			}
		}
		$('#jqxTabs').jqxTabs({ width: '100%', height: '90%',  selectedItem: 0, initTabContent: initWidgets });		

		var initRowDetails = function (id, row, element, rowinfo) {
			var tabsdiv = null;
			var information = null;
			var notes = null;
			rowinfo.detailsHeight = 200;
			element.append($("<div style='margin: 10px;'><ul style='margin-left: 30px;'><li class='title'>Title</li><li>Notes</li></ul><div class='information'></div><div class='notes'></div></div>"));
			tabsdiv = $(element.children()[0]);
			if (tabsdiv != null) {
			  information = tabsdiv.find('.information');
			  notes = tabsdiv.find('.notes');
			  var title = tabsdiv.find('.title');
			  title.text("Information");
			  var container = $('<div style="margin: 5px;"></div>');
			  container.appendTo($(information));
			  //var photocolumn = $('<div style="float: left; width: 15%;"></div>');
			  var leftcolumn = $('<div style="float: left; width: 45%;"></div>');
			  var rightcolumn = $('<div style="float: left; width: 40%;"></div>');
			  //container.append(photocolumn);
			  container.append(leftcolumn);
			  container.append(rightcolumn);
			// var photo = $("<div class='jqx-rc-all' style='margin: 10px;'><b>Photo:</b></div>");
			//  var image = $("<div style='margin-top: 10px;'></div>");
			//  var imgurl = '../../images/' + row.firstname.toLowerCase() + '.png';
			//  var img = $('<img height="60" src="' + imgurl + '"/>');
			 //image.append(img);
			 //image.appendTo(photo);
			 // photocolumn.append(photo);
			  var schoolDist = "<div style='margin: 10px;'><b>School Dist:</b> " + row.School_Dis + "</div>";
			  var houseDist = "<div style='margin: 10px;'><b>House Dist:</b> " + row.House_Dist + "</div>";
			  var senateDist = "<div style='margin: 10px;'><b>Senate Dist:</b> " + row.Senate_Dis + "</div>";
			//var address = "<div style='margin: 10px;'><b>Address:</b> " + row.address + "</div>";
			  $(leftcolumn).append(schoolDist);
			  $(leftcolumn).append(houseDist);
			  $(leftcolumn).append(senateDist);
			 // $(leftcolumn).append(address);
			  var postalcode = "<div style='margin: 10px;'><b>Postal Code:</b> " + row.ARC_ZIP + "</div>";
			  var city = "<div style='margin: 10px;'><b>City:</b> " + row.ARC_City + "</div>";
			  var county = "<div style='margin: 10px;'><b>County:</b> " + row.ARC_COUNTY + "</div>";
			//var hiredate = "<div style='margin: 10px;'><b>Hire Date:</b> " + row.hiredate + "</div>";
			  $(rightcolumn).append(postalcode);
			  $(rightcolumn).append(city);
			  $(rightcolumn).append(county);
			  //$(rightcolumn).append(hiredate);
			  var notescontainer = $('<div style="white-space: normal; margin: 5px;"><span>DHS Notes</span></div>');
			  $(notes).append(notescontainer);
			  $(tabsdiv).jqxTabs({
				  width: 300,
				  height: 170
			  });
			}
		}		
		//$('#searchWindow').hide();
		
});