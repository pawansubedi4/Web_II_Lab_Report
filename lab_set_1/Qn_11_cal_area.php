<?php
function calculateArea($base,$height,$shape) {
    if($shape=="triangle"){
        return 0.5*$base*$height;
    }
    else if($shape=="parallelogram"){
        return $base*$height;
    }
    else{
        return "Invalid Shape";
    }
}
$base=10;
$height=5;
$shape="triangle";
echo "Shape: ".$shape."<br>";
echo "Area: ".calculateArea($base,$height,$shape);
?>