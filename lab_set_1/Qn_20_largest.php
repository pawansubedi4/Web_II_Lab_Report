<?php
function largest($a,$b,$c){
    if($a>=$b && $a>=$c){
        return $a;
    }
    else if($b>=$a && $b>=$c){
        return $b;
    }
    else{
        return $c;
    }
}
$a=25;
$b=40;
$c=30;
$result=largest($a,$b,$c);
echo "Largest Number: ".$result;
?>