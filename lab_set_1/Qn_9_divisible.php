<?php
function divisible($n){
    if($n%5==0){
        return true;
    }
    else{
        return false;
    }
}
$n=26;
echo divisible($n)?"True":"False";
?>