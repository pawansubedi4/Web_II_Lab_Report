<?php
function stringLength($str){
    if($str==""){
        return 0;
    }
    else{
        return 1+stringLength(substr($str,1));
    }
}
$str="Pawan";
echo "Length of String ".$str." is  " .stringLength($str);
?>