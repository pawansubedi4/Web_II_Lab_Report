<?php
function calculateCars($people){
    if($people%4==0){
        return $people/4;
    }
    else{
        return ((int)($people/4))+1;
    }
}
$people=23;
$cars=calculateCars($people);
echo "Number of People: ".$people."<br>";
echo "Minimum Cars Required: ".$cars;
?>