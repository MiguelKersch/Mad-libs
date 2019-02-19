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
	  }

		if (empty($_POST["vraag7"])) {
	    $validated = false;
	  }

		if (empty($_POST["vraag8"])) {
	    $validated = false;
	  }



	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div><h1>Mad Libs</h1></div>
	<link rel="stylesheet" type="text/css" href="CSS/madlibs.css">
	<div class="box">

		<div id="navbar">
			<ul>
				<li><a href="index.php">Er heerst paniek...</a></li>
				<li><a href="indexOnkunde.php">Onkunde</a></li>
			</ul>
		</div>
		<h3>Er heerst Paniek</h1>
		<?php 
		if ($validated== false) {
			include 'parts/form.php';
		}elseif ($validated == true) {
			include 'parts/Er-heerst-paniek.php';
		}
		 	
		?>

			<div class="float-left">
				<h2>&copy; Gemaakt door Miguel Kerschkamp</h1>
			</div>
		</div>
</body>
</html>