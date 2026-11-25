<?php
function convertUpper($str){
    if(strlen($str)<3){
        return strtoupper($str);
    }
    else{
        $first=substr($str,0,-3);
        $last=strtoupper(substr($str,-3));
        return $first.$last;
    }
}
$str="Pawan";
$result=convertUpper($str);
echo "Result: ".$result;
?>