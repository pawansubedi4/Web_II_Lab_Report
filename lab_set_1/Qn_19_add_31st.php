<?php
function addFirstThree($str){
    $first=substr($str,0,3);
    return $first.$str.$first;
}
$str="Pawan";
$result=addFirstThree($str);
echo "Result: ".$result;
?>