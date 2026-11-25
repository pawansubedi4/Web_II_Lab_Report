<?php
function equal($a,$b){
    if(strlen($a)==strlen($b)){
        return true;
    }
    else{
        return false;
    }
}
$a="pawan";
$b="subedi";
echo equal($a, $b)?"True":"False";
?>