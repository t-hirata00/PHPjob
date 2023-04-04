<?php
//db_connect.phpの読み込み
require_once('db_connect.php');
//function.phpの読み込み
require_once('function.php');

//ログインしていなければlogin.php
check_user_logged_in();


//提出ボタンを押下せれた時
if (!empty($_POST)) {
    //post_idの格納
    $post_id = $_POST["post_id"];
    //nameとcontentの入力のチェック
    if (empty($_POST["name"])) {
        echo '名前が未入力です';
    } else if (empty($_POST["content"])) {
        echo 'コメントが未入力です';
    }

    if (!empty($_POST["name"]) && !empty($_POST["content"])) {
        //name、contentの格納
        $name = $_POST['name'];
        $content = $_POST['content'];
        //PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // sql
            $sql = "INSERT INTO comments(post_id,name,content) VALUE (:post_id,:name,:content)";
            //プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            //post_idをバインド
            $stmt->bindParam('post_id', $post_id);
            //nameをバンド
            $stmt->bindParam('name', $name);
            //contentをバインド
            $stmt->bindParam('content', $content);
            //実行
            $stmt->execute();
            //対象のpost_idのdetail_post.phpにリダイレクト
            header("Location:detail_post.php?id=" . $post_id, true, 302);
            exit;
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    } else {
        //POSTで渡されたデータがなかった場合
        //GETで渡されたpost_idを受け取る
        $post_id = $_GET['post_id'];
        // $post_idが空だった場合は不正な遷移なので、main.phpに戻す
        redirect_main_unless_parameter($post_id);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>コメント</h1>
    <form method="POST" action="">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        投稿者名:<br>
        <input type="text" name="name"> <br>
        コメント:<br>
        <input type="text" name="content" style="width:200px;height:100px;"><br>
        <input type="submit" value="submit">
    </form>
    <a href="detail_post.php?id=<?php echo $post_id; ?>">記事詳細に戻る</a>
</body>

</html>