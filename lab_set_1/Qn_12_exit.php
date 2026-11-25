<?php
function findIndex($arr,$str) {
    foreach($arr as $index=>$value){
        if($value==$str){
            return $index;
        }
    }
    return -1;
}
$arr=array("Apple","Mango","Banana","Orange");
$str="Apple";
$result=findIndex($arr,$str);
echo "Index of ".$str." is: ".$result;
?>