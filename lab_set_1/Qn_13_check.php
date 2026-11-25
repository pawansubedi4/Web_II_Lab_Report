<?php
function getValue($arr,$index){
    if(isset($arr[$index])){
        return $arr[$index];
    }
    return "Invalid Index";
}
$arr=array("Apple","Mango","Banana","Orange");
$index=2;
$result=getValue($arr,$index);
echo "Value at index ".$index." is: ".$result;
?>