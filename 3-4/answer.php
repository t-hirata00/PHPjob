<link rel="stylesheet" href="main.css" />
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
//名前の受け取り
$my_name2 = $_POST['my_name2'];
// var_dump($my_name2);
// echo '<br>';

//①の回答の受け取り
$Q1answer = $_POST['Q1answer'];
// var_dump($Q1answer);
// echo '<br>';
$Q1row = "null";
if($Q1answer == '80'){
    $Q1row = "正解!";
}else{
    $Q1row = "残念・・・";
}
//②の回答の受け取り
$Q2answer = $_POST['Q2answer'];
// var_dump($Q2answer);
// echo '<br>';
$Q2row = "null";
if($Q2answer == 'HTML'){
    $Q2row = "正解!";
}else{
    $Q2row = "残念・・・";
}

//③の回答の受け取り
$Q3answer = $_POST['Q3answer'];
// var_dump($Q3answer);
// echo '<br>'
$Q3row = "null";
if($Q3answer == 'select'){
    $Q3row = "正解!";
}else{
    $Q3row = "残念・・・";
}
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
</body>
<p><?php echo $my_name2;?>
<!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $Q1row?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $Q2row?>
<?php ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $Q3row?>
<?php ?>
<body>