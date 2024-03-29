<?php
//db_connect.phpの読み込み
require_once('db_connect.php');

//function.phpの読み込み
require_once('function.php');

//ログインしていなければlogin.phpにリダイレクト
check_user_logged_in();

//提出ボタンがされたとき
if (!empty($_POST['post'])) {
    //title、contentの入力チェック
    if (empty($_POST['title'])) {
        echo "タイトルが未入力です・";
    } elseif (empty($_POST['content'])) {
        echo "コンテンツが未入力です";
    }

    if (!empty($_POST['title']) && !empty($_POST['content'])) {
        //変数に格納
        $title = $_POST['title'];
        $content = $_POST['content'];

        //PDOインスタンスの取得
        $pdo = db_connect();

        try {
            //SQL文
            $sql = "INSERT INTO posts(title,content) VALUE (:title,:content)";
            //プリアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            //タイトルと本文のバインド
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            //実行
            $stmt->execute();
            //main.phpにリダイレクト
            header("Location:main.php");
            exit;
        } catch (PDOException $e) {
            //エラーメッセージの出力
            echo "Error:" . $e->getMessage();
            //終了
            die();
        }
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>記事登録</h1>
    <form method="POST" action="">
        title:<br>
        <input type="text" name="title" id="title" style="width:200px;height:50px;">
        <br>
        content:<br>
        <input type="text" name="content" id="content" style="width:200px;height:100px;"><br>
        <input type="submit" value="submit" id="post" name="post">
    </form>
</body>

</html>