<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107638631-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107638631-2');
	</script>
  </head>
  <body>
  	<div class="row">
	    <div class="col-md-6 col-md-offset-3">
	    	<form action="index.php" method="post">
	    		<label for="Stop">Stop Number</label>
	    		<input type="text" name="stop" class="form-control"><br>
	    		<label for="Route">Route</label>
	    		<input type="text" name="route" class="form-control"><br>
	    		<input type="submit" name="submit" value="Find" class="form-control btn btn-primary">
	    	</form>
	    </div>
  	</div>
    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
	    	<?php 

	    		if (isset($_POST['stop'])) {
	    			$stopid = $_POST['stop'];
	    			$routeid = $_POST['route'];
	    			$json = file_get_contents('http://data.smartdublin.ie/cgi-bin/rtpi/realtimebusinformation?stopid=' . $stopid . '&routeid=' . $routeid . '&format=json');
					$obj = json_decode($json);

					if ($obj->results[0]->duetime == "Due") {
						echo "<h1 class=\"text-center\">Next Bus is Due Now (" . $obj->results[0]->route . ")</h1>";
					} else {
						echo "<h1 class=\"text-center\">Next Bus (" . $obj->results[0]->route . ") Arrives in " . $obj->results[0]->duetime . " mins</h1>";
					}
	    			
	    			echo "<p class=\"text-center\"><b><i>" . $obj->results[0]->origin . "</i></b> -> <b><i>" . $obj->results[0]->destination . "</i></b></p>";
	    		

	    		echo "<p class=\"text-center\">There's another bus in ";
	    		for ($i = 1; $i < $obj->numberofresults; $i++) { 
	    			echo "<b><i>" . $obj->results[$i]->duetime . "</b></i> mins(" . $obj->results[$i]->route . "), ";
	    		}
	    		echo "</p>";

	    		} // End of main if
			?>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




<!-- 
<option value="1">1</option>
	    			<option value="1">4</option>
	    			<option value="1">7</option>
	    			<option value="1">7a</option>
	    			<option value="1">7b</option>
	    			<option value="1">7d</option>
	    			<option value="1">7n</option>
	    			<option value="1">9</option>
	    			<option value="1">11</option>
	    			<option value="1">13</option>
	    			<option value="1">14</option>
	    			<option value="1">15</option>
	    			<option value="1">15a</option>
	    			<option value="1">15b</option>
	    			<option value="1">15d</option>
	    			<option value="1">15n</option>
	    			<option value="1">16</option>
	    			<option value="1">17</option>
	    			<option value="1">17a</option>
	    			<option value="1">18</option>
	    			<option value="1">25</option>
	    			<option value="1">25a</option>
	    			<option value="1">25d</option>
	    			<option value="1">25b</option>
	    			<option value="1">25n</option>
	    			<option value="1">25x</option>
	    			<option value="1">26</option>
	    			<option value="1">27</option>
	    			<option value="1">27b</option>
	    			<option value="1">27a</option>
	    			<option value="1">27x</option>
	    			<option value="1">29a</option>
	    			<option value="1">29n</option>
	    			<option value="1">31/a</option>
	    			<option value="1">31b</option>
	    			<option value="1">31d</option>
	    			<option value="1">31n</option>
	    			<option value="1">32</option>
	    			<option value="1">32x</option>
	    			<option value="1">33</option>
	    			<option value="1">33a</option>
	    			<option value="1">33b</option>
	    			<option value="1">33d</option>
	    			<option value="1">33n</option>
	    			<option value="1">33x</option>
	    			<option value="1">37</option>
	    			<option value="1">38</option>
	    			<option value="1">1</option>
	    			<option value="1">1</option>
	    			<option value="46a">46a</option>
	    			<option value="45a">45a</option>
-->