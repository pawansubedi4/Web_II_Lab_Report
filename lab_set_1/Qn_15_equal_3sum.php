<?php
function sum($a,$b){
    if($a==$b){
        return 3*($a+$b);
    }
    else{
        return $a+$b;
    }
}
$a=10;
$b=10;
$result=sum($a,$b);
echo "Result: ".$result;
?>