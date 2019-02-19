<?php
 		$validated = true;
		if (empty($_POST["vraag1"])) {
	    $validated = false;
	  }	
		if (empty($_POST["vraag2"])) {
	    $validated = false;
	  }

		if (empty($_POST["vraag3"])) {
	    $validated = false;
	  }

		if (empty($_POST["vraag4"])) {
	    $validated = false;
	  }

		if (empty($_POST["vraag5"])) {
	    $validated = false;
	  }

		if (empty($_POST["vraag6"])) {
	    $validated = false;
	  }if (empty($_POST["vraag7"])) {
	    $validated = false;
	  }





	?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

	<title></title>
</head>
<body class="p-3 mb-2 bg-secondary text-black">
		<div class="container text-center"><h1>Mad Libs</h1></div>
	

	
		<div class="container navbar navbar-dark bg-danger">
			<ul class="nav navbar-nav">
				<span>
				<a class="btn btn-danger float-left" href="index.php">Er heerst paniek...</a>
				<a class="btn btn-danger float-right" href="indexOnkunde.php">Onkunde</a></span>
			</ul>
		</div>
		<div class="container bg-white">
		<h3>Onkunde</h3>
		<?php 
		if ($validated == false) {
			include 'parts/formO.php';
		}elseif ($validated == true) {
			include 'parts/resultO.php';
		}
		 	
		?>
			</div>

			<div class = "container bg-dark text-white ">
				<h2>&copy; Gemaakt door Miguel Kerschkamp</h1>
			</div>
		
</body>
</html>