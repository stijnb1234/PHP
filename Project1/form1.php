<?php
	$tekst = "";
	$tekst2 = ""; // "lege string"
	$cijfer1 = 0;
	$cijfer2 = 0;
	$cijfer3 = 0;
	$bereken = "gemiddelde";
	
	if (isset($_GET['bereken']))  // heeft HTML gegevens verzonden?
	{
		$cijfer1 = $_GET['cijfer1'];  //haal cijfer 1 uit de HTML
		$cijfer2 = $_GET['cijfer2'];  //haal cijfer 2 uit de HTML
		$cijfer3 = $_GET['cijfer3'];  //haal cijfer 3 uit de HTML
		$bereken = $_GET['berekening'];  


		if ($bereken == "totaal"){
			$tekst = "Totaal";
			$waarde = $cijfer1 + $cijfer2 + $cijfer3;
		} else {
			$tekst = "Gemiddelde";
			$waarde = round(($cijfer1 + $cijfer2 + $cijfer3)/3 , 1);
		}
	}
		if ($tekst == "Gemiddelde"){
			if($waarde < 5.5){
				$tekst2 = "<span style='color:red'>Dit is onvoldoende</span>";
		} else if ($waarde < 8) {
			$tekst2 = "<span style='color:orange'>Voldoende</span>";
		} else {
			$tekst2 = "<span style='color:green'>Ruim Voldoende</span>";
		}
	} else {
		$tekst2 = "";
	}
		
?>

<!DOCTYPE html>
<html lang="en">
	  <head>
		<meta charset="utf-8">
		<title><?php echo $tekst ?></title>
		
		<style>
			body {background-color: coral;
				font-size: 35px;
				 }
		</style>

	  </head>
	  <body>
	  <h3><?php echo $tekst ?></h3>
					 cijfer1: 	<?php echo $cijfer1 ?>
					 <br>
					 cijfer2: 	<?php echo $cijfer2 ?>
					 <br>
					 cijfer3:  <?php echo $cijfer3 ?>
					 <br>
					Het  <?php echo $tekst ?> is <?php echo $waarde ?> <?php echo $tekst2 ?>
					
					<br>
					<a href = "form1.html">opnieuw berekenen</a>
					<br>
	  </body>
</html>