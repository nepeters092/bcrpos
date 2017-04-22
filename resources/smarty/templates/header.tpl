<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{$title}</title>
 <!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Custom CSS Files -->
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/sale.css">
<link rel="stylesheet" href="/css/customers.css">
<link rel="stylesheet" href="/css/transactions.css">
<link rel="stylesheet" href="/css/movies.css">
<link rel="stylesheet" href="/css/reports.css">
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/employees.css">
<link rel="stylesheet" href="/css/settings.css">
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Custom JS Files -->
<script type="text/javascript" src="/js/addInput.js"></script>
<script type="text/javascript" src="/js/tooltip.js"></script>
<script type="text/javascript" src="/js/charts.js"></script>
{literal}
<script type="text/javascript">
     google.charts.load('current', {'packages':['corechart']});
</script>
{/literal}
</head>

<body>


<div id="utilities" class="container-fluid">
	<div class="row">
		<div id="company" class="col-xs-7">
		</div>
		<div id="info-dash" class="col-xs-5">
			<div><a id="logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></div>
			<div>Welcome, {$nameGreet}</a></div>
		</div>
	</div>
</div>
