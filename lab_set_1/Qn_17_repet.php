<?php
function repetString($str){
    if(strlen($str)<2){
        return $str;
    }
    else{
        return str_repeat(substr($str,0,2),4);
    }
}
$str="Pawan";
$result=repetString($str);
echo "Result: ".$result;
?>