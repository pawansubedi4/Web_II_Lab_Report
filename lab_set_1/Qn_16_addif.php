<?php
function addIf($str){
    if(substr($str,0,2)=="if"){
        return $str;
    }
    else{
        return "if ".$str;
    }
}
$str="you are good";
$result=addIf($str);
echo "Result: ".$result;
?>