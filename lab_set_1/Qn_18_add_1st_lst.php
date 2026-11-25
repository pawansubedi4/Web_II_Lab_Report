<?php
function add1standlst($str){
    $last=substr($str,-1);
    return $last.$str.$last;
}
$str="Pawan";
$result=add1standlst($str);
echo "Result: ".$result;
?>