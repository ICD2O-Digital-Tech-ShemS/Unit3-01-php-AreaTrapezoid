   <?php
	// get the base and height from the textfields
	$sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $height = $_POST['height'];

	// This is to calculate the area
	$area = ($sideA + $sideB)/2*$height 
	?>
	<?php
    echo "<h3>Results:</h3>
The area of the Trapezoid is <?php echo "$area" ?>cm<sup>2</sup>."
?>