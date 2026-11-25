<html>
    <head>
        <title>Minutes to second</title>
    </head>
    <body>
        <form method="POST">
            Enter Minutes:
            <input type="number" name="min" required>
            <input type="submit" value="Calculate">
        </form>
    </body>
</html>
<?php
if (isset($_POST['min'])) {
    $min = $_POST['min'];
    function mintosec($mins){
        $result=$mins*60;
        return $result;
    }
    echo "The second of ".$min ." minutes is " .mintosec($min);
}
?>


