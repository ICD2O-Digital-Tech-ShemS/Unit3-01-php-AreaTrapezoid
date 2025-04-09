 <?php
	$sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $height = $_POST['height'];

	$area = ($sideA + $sideB)/2 * $height 
?>
<h3>Results:</h3>
The area of the Trapezoid is <?php echo "$area" ?>cm<sup>2</sup>.

