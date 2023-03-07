<?php 
// index.php

$message = "Hello World";
var_dump($message);
echo '<br>';

$x = 8;
$y = 5.55;

echo '<br>';
var_dump($x);
echo '<br>';
var_dump($y);
echo '<br>';

$flag = true;
echo '<br>';

var_dump($flag);

$emp = null;
var_dump($emp);

$color = 'blue';
echo "Sky is ${color}color";

echo '<br>';

define("ADMIN_EMAIL","y-i-group@gmail.com");
define("LIST_COUNT",15);

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;
echo '<br>';

echo "hello"."world";
echo '<br>';

$hello ="Hello";
$world ="world";

echo $hello.$world;
echo '<br>';
?>

<?php
echo 1 + 1;
// 改行は適宜入れた方が見やすくなります。
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;

$x = 0;

 // $x = $x + 5;
$x += 5;
echo $x;

 // $x = $x * 5;
$x *= 5;
echo $x;

echo '<br>';
?>

<?php
echo '<br>';
$age = 18;

if($age >= 20){
    echo "お酒が飲めるぞ！";
}else{
    echo "お酒は20歳になってから！";
}
?>

<?php
echo '<br>';
$age = 24;

$is_student = true;

if($age < 25 && $is_student){
    echo "学割が使えます";
}
?>

<?php
$name = "";

if($name != ""){
    echo '名前を受付ました';
} else {
    echo '名前を入力してください';
}

echo ($name != "") ?'名前を受け付けました':'名前を入力してください';
?>

<?php
echo '<br>';
$string = '1';
$int = 1;

if (1 === $string) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはstring型です」が出力される

if (1 === $int) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはint型です。」が出力される
echo '<br>';
?>

<?php
    echo '<br>';
    $name = "taro";
    $pass = "pass2";

    if($name =="taro" && $pass=="pass"){
        echo 'ログイン成功です';
    }elseif($name =="taro" && $pass != "pass"){
        echo 'パスワードが間違えています';
    }elseif($name !="taro" && $pass == "pass"){
        echo '名前が間違えています';
    }else{
        echo '入力情報が間違えています';
    }
    echo '<br>';
?>

<?php
    echo '<br>';

    $num = 0;
    while($num < 10 ){
        echo $num;
        $num++;
    }
    echo '<br>';
?>

<?php
$num =0;

echo '<br>';
    for($i=0;$i<10;$i++){
        echo $num;
        $num++;
    }
    echo '<br>';
?>

<?php
echo '<br>';
    $num = 0;
    while($num <= 100){
        echo $num;
        echo '<br>';
        $num++;
    }

echo '<br>';
?>