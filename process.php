<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    function bmi($weight, $height)
	{return ($weight / ($height * $height)) * 703;}
	$bmi_value = bmi($weight, $height);
	
    if ($bmi_value < 18) {$label = "underweight";}
	else if ($bmi_value > 30) {$label ="overweight";}
	else {$label ="normal";}
?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $bmi_value; ?>, 
which is considered <?php echo $label; ?></p>
</body>