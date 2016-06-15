	$(document).ready(function () {
    
    	//help docs
		 $("#resetbtn").jqxTooltip({ content: '<b>Reset</b><br/><i>Clear the map.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#searchbtn").jqxTooltip({ content: '<b>Search</b><br/><i>Search your data layers by a geography.</i><br/><i>Ex. Counties, Zip Codes, School District, Cities etc.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#layerbtn").jqxTooltip({ content: '<b>Layers</b><br/><i>Show or hide the geographic layers of the map.</i><br/><i>Ex. Counties, Zip Codes, School District, Cities etc.', position: 'mouse', autoHide: false, disabled:true});
		 $("#logoffbtn").jqxTooltip({ content: '<b>Log Off</b><br/><i>Log out of this application.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#helpbtn").jqxTooltip({ content: '<b>Help</b><br/><i>Toggle these help messages on or off.</i>', position: 'mouse', autoHide: true, disabled:true});		
		 $("#openApprovedFFH").jqxTooltip({ content: '<b>Open Approved FFH</b><br/><i>Show / Hide</i><br/><i>Open Approved Foster Family Homes.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#openRemoval").jqxTooltip({ content: '<b>Open Removals</b><br/><i>Show / Hide</i><br/><i>Open Removal Homes.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#counties").jqxTooltip({ content: '<b>Counties</b><br/><i>Show / Hide</i><br/><i>County Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#cities").jqxTooltip({ content: '<b>Cities</b><br/><i>Show / Hide</i><br/><i>City Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#zipcodes").jqxTooltip({ content: '<b>Zip Codes</b><br/><i>Show / Hide</i><br/><i>Zip Code Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#school").jqxTooltip({ content: '<b>School Districts</b><br/><i>Show / Hide</i><br/><i>School District Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#senate").jqxTooltip({ content: '<b>State Senate Districts</b><br/><i>Show / Hide</i><br/><i>State Senate Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#house").jqxTooltip({ content: '<b>State House Districts</b><br/><i>Show / Hide</i><br/><i>State House Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
		 $("#congress").jqxTooltip({ content: '<b>US Congressional Districts</b><br/><i>Show / Hide</i><br/><i>US Congressional District Boundaries.</i>', position: 'mouse', autoHide: false, disabled:true});		
	$("#searchHeader").jqxTooltip({ content: '<b>Search Criteria</b><br/><i>Set the parameters and perform your search</i><table width=\'250px\'><TR align=\'left\'><TD><li>Select Data Set - Select the data set to query against.</li><br/><li>Select the type of Geography you wish to search within.</li><br/><li>Select the distinct search value from your chosen geography</li><br/><li>When you have selected all three (3) search criteria, the [Search] button will become enabled.</li><br/><li>Click the [Search] button to perform your search.</li></td></tr></table>', position: 'mouse', autoHide: false, disabled:true});		
	$("#resultsHeader").jqxTooltip({ content: '<b>Search Results</b><br/><i>View your Search Results</i><table width=\'250px\'><TR align=\'left\'><TD><li>A layer control will appear , allowing you to toggle your search results on / off.</li><br/><li>Next to your layer control is confirmation of your query.</li><br/><li>Below this will be a listing of values from the results of your query in a pageable table.</li><br/><li>Clicking on a table row will highlight the corresponding property icon.</li><br/><li>Clciking on the map icons will highlight the corresponding results table row.</li></td></tr></table>', position: 'mouse', autoHide: false, disabled:true});		
	 
		$("#helpbtn").on('click', function(){
			if(helpVar){
				$(".toolbarButton").each(function(){
					$(this).jqxTooltip({disabled: true});
				});
				$("#searchHeader").jqxTooltip({disabled: true});
				$("#resultsHeader").jqxTooltip({disabled: true});
				$(".helpImage").css({'visibility':'hidden'});
				$("span").removeClass('help');
				helpVar=false;
			}else{
				$(".toolbarButton").each(function(){
					$(this).jqxTooltip({disabled: false});
				});				
				$("#searchHeader").jqxTooltip({disabled: false});
				$("#resultsHeader").jqxTooltip({disabled: false});
				$("span").addClass('help');
				$(".helpImage").css({'visibility':'visible'});
				helpVar=true;
			}
		});
    });