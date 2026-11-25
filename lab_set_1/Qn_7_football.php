<html>
    <head><title>Football tournment</title></head>
    <body>
        <form method="POST" action="">
            <label for="name">enter team name</label>
            <input type="text" name="name"><br>
            <label for="win">enter no of wins</label>
            <input type="number" name="win" require><br>
            <label for="loss">enter no of loss</label>
            <input type="number" name="loss" require><br>
            <label for="draw">enter no of draw</label>
            <input type="number" name="draw" require><br>
            <button type="submit" value="find">calculate</button>
        </form>
    </body>
</html>
<?php
$result=0;
$ttl=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['win'])){
        $win=$_POST['win'];
        if($win>0){
            $result=$result+$win*3;
            $ttl=$ttl+$win;
        }
        else{
            return;
        }
    }
    if (isset($_POST['loss'])){
        $loss=$_POST['loss'];
        if($loss>0){
            $result=$result+$loss*0;
            $ttl=$ttl+$loss;
        }
        else{
            return;
        }
    }
    if (isset($_POST['draw'])){
        $draw=$_POST['draw'];
        if($draw>0){
            $result=$result+$draw*1;
            $ttl=$ttl+$draw;
        }
        else{
            return;
        }
    }
    echo "the total points= ".$result;
    echo "the total games = ".$ttl;
}
