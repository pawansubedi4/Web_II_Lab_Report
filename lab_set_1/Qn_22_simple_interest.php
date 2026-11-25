<?php
if(isset($_POST['submit'])){
    $p=$_POST['principal'];
    $r=$_POST['rate'];
    $t=$_POST['time'];

    $si=($p*$r*$t)/100;
    $amount=$p+$si;

    echo "Simple Interest: ".$si."<br>";
    echo "Total Amount: ".$amount;
}
?>
<form method="POST">
    Principal Amount:
    <input type="number" name="principal" required><br><br>
    
    Rate of Interest:
    <input type="number" name="rate" required><br><br>

    Time (Years):
    <input type="number" name="time" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>