<!DOCTYPE html>
<html>
<head>
	<title>Random Color Generator</title>
	<style>
		body {
			font-family: sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #222;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		h1 {
			margin: 0;
			font-size: 32px;
			font-weight: normal;
		}

		main {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 20px;
		}

		.column {
			width: 25%;
			height: 300px;
			margin: 20px;
			border-radius: 10px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}
	</style>
</head>
<body>
	<header>
		<h1>Random Color Generator
			<?php
			$dayNameOfTheWeek = date('l');



			$mondayString = "miraculous";
			// $fakeDayNameOfTheWeek = "Monday";
			$mondayString = "miraculous";
			$tuesdayString = "tea";
			$wednesdayString = "pi";
			$thursdayString = "thunder";
			$fridayString = "tuco";
			$saturdayString = "peach";
			$sundayString = "banana";

			$fullString ="Hello, Happy";

			if ( $dayNameOfTheWeek == "Monday" ){
				$fullString = $fullString ." ". $mondayString . " " . $dayNameOfTheWeek;

			} else if ( $dayNameOfTheWeek == "Friday"){
				$fullString = $fullString ." ". $fridayString . " " . $dayNameOfTheWeek;
				
			 }else {
				$fullString = "Hello :)";
			}
			// if ( $dayNameOfTheWeek == "Tuesdday" ){
			// 	$fullString = $fullString ." ". $tuesdayString . " " . $dayNameOfTheWeek;

			// }
			// if ( $dayNameOfTheWeek == "Wednesday" ){
			// 	$fullString = $fullString ." ". $wednesdayString . " " . $dayNameOfTheWeek;

			// }
			// if ( $dayNameOfTheWeek == "Thursday" ){
			// 	$fullString = $fullString ." ". $thursdayString . " " . $dayNameOfTheWeek;

			// }
			 ?>
			 Hello,
			<?php echo($fullString ); ?>

		</h1>
		<p>Press the space bar to generate new colors</p>
	</header>
	<main>
		<?php
		function getRandomColor() {
			return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		}

		for ($i = 0; $i < 4; $i++) {
			$color = getRandomColor();
			echo '<div class="column" style="background-color: '.$color.';">'.$color.'</div>';
		}
		?>
	</main>
	<script>
		document.addEventListener("keydown", function(event) {
			if(event.code === "Space") {
				location.reload();
			}
		});
	</script>
</body>
</html>
