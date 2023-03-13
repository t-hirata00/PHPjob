<link rel="stylesheet" href="main.css" />
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$Q1 = ["80" => "80","22" => "22","20" => "20","21" => "21"];
$Q2 = ["PHP" => "PHP","Python" => "Python","JAVA" => "JAVA","HTML" => "HTML"];
$Q3 = ["join" => "join","select" => "select","insert" => "insert","update" => "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<body>
<p>お疲れ様です 
<!--POST通信で送られてきた名前を出力-->
<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method = "post">
    <input type="hidden" name = "my_name2" value="<?php echo $my_name; ?>">
    <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($Q1 as $key => $value) { ?>
        <input type="radio" name = "Q1answer" value="<?php echo $key; ?>">
            <?php echo $value; ?>
    <?php } ?>
    
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($Q2 as $key => $value) { ?>
        <input type="radio" name = "Q2answer" value="<?php echo $key; ?>">
            <?php echo $value; ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($Q3 as $key => $value) { ?>
        <input type="radio" name = "Q3answer" value="<?php echo $key; ?>">
            <?php echo $value; ?>
    <?php } ?>

    <br>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="submit" value="回答する">
</form>
</body>