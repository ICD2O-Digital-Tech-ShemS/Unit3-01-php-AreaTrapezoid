<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Area of a Triangle in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>This program will calculate the area of a Trapezoid.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="results">
        <label for="sideA">Side A</label>
        <input type="text" id="sideA" placeholder="Enter the sideA" name="sideA"><br><br>
        <label for="sideB">Side B</label>
        <input type="text" id="sideB" placeholder="Enter the sideB" name="sideB"><br><br>
        <label for="height">Height</label>
        <input type="text" id="height" placeholder="Enter the height" name="height"><br><br>
        <input type="submit" value="Calculate Area">
		</form>
   <div id="user-info">
      <div id="$area"></div>
</div>
	</body>
	</body>
</html>