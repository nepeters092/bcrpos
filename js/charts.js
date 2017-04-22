// Load Charts and the corechart package.
google.charts.setOnLoadCallback(drawSalesChart);
google.charts.setOnLoadCallback(drawAnthonyChart);

// Draw genre report chart
function drawSalesChart() {
	
	var jsonData = $.ajax({
		url: "/getData.php",
		dataType: "json",
		async: false
		}).responseText;
			  
	var options = {
		width: 500,
		height: 400,
		chartArea:{left:100,top:20},
		is3D: true,
		backgroundColor: '#F0F0F0',
		fontName: 'Roboto',
		colors: ['#FF1744', '#D500F9', '#3D5AFE', '#00B0FF', '#1DE9B6', '#76FF03', '#FFEA00', '#F50057', '#651FFF', '#2979FF', '#00E5FF']
		};

			  
	// Create our data table out of JSON data loaded from server.
	var data = new google.visualization.DataTable(jsonData);

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		  chart.draw(data, options);
}
		
	// Draw monthly report chart
function drawAnthonyChart() {

	var jsonData = $.ajax({
		url: "/getMonthData.php",
		dataType: "json",
		async: false
		}).responseText;

    var options = {
		width: 500,
		height: 300,
		chartArea:{left:100,top:20},
		title: 'Percentage of Sales by Genre',
		is3D: true,
		backgroundColor: '#F0F0F0',
		fontName: 'Roboto',
		colors: ['#FF1744', '#D500F9', '#3D5AFE', '#00B0FF', '#1DE9B6', '#76FF03', '#FFEA00', '#F50057', '#651FFF', '#2979FF', '#00E5FF']
		};

	// Create our data table out of JSON data loaded from server.
	var data = new google.visualization.DataTable(jsonData);

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	chart.draw(data, options);
}
		
