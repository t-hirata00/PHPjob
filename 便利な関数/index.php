<?php

$x = 5.2;
echo ceil($x);
echo '<br>';


echo floor($x);
echo '<br>';

echo round($x);
echo '<br>';

echo pi();
echo '<br>';

function circleArea($r){
        $circleArea = $r * $r * pi();
        echo $circleArea;
}
circleArea(2);
echo '<br>';

echo mt_rand(1,100);
echo '<br>';
echo rand(1,100);
echo '<br>';

$str = "hogehoge";
echo strlen($str);
echo '<br>';


$str = "abcdefg";
echo substr($str,-2,2);
echo '<br>';


echo str_replace("efg","gfe",$str);
echo '<br>';

$name = "米山さん";
$limit_number = 4;
$limit_number2 = 40;
printf("%sの残り時間はあと%02dと%02dです", $name, $limit_number, $limit_number2);
echo '<br>';

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);


$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
echo '<br>';

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);

echo '<br>';

sort($members);
var_dump($members);
echo '<br>';

$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo '<br>';

// var_dump(in_array("tanaka", $members));
if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo '<br>';

$atstr = implode("@",$members);
var_dump($atstr);
echo '<br>';

$re_member = explode("@",$atstr);
var_dump($re_member);
echo '<br>';

echo time();
echo '<br>';
var_dump(time());
echo '<br>';

echo date ("Y-m-d H:i:s",time());
echo '<br>';

echo date("Y-m-d H:i:s",141980400);
echo '<br>';

echo strtotime("2017/2/16 11:25:00");
echo '<br>';

echo strtotime("last Sunday");
echo '<br>';

echo strtotime("+2 day");
echo '<br>';
?>