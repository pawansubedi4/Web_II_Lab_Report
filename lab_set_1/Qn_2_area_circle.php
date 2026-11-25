<html>
    <head><title>Area of circle</title></head>
    <body>
        <form method="POST">
            Enter Radius:
            <input type="number" name="radius" required>
            <input type="submit" value="Calculate">
        </form>
    </body>
<html>  
<?php
define("PI", 3.14);
if (isset($_POST['radius'])) {
    $radius = $_POST['radius'];
    $area = PI * $radius * $radius;
    echo "Radius of Circle: " . $radius;
    echo "<br>Area of Circle: " . $area;
}
?>  