<?php

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');

$signUpMessage = '';
// POSTで送られていれば処理実行
// nameとpassword両方送られてきたら処理実行
//入力チェック
//処理の開始:submitが押されたとき( POSTで送られていれば処理実行)
if (isset($_POST['signUp'])) {
    //②nameとpasswordが両方送られてきたら処理
    if (!empty($_POST['name']) && !empty($_POST['password'])) {
        // PDOのインスタンスを取得FILL_IN
        $pdo = db_connect();
        //パスワード、ユーザー名の受け取り
        $name = $_POST['name'];
        $password = $_POST['password'];
        try {
            // SQL文の準備 FILL_IN 
            $insertSql = "INSERT INTO users(name,password) VALUES (?,?)";
            // パスワードをハッシュ化
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // プリペアドステートメントの作成 FILL_IN 
            $stmt = $pdo->prepare($insertSql);
            // 値をセット　FILL_IN
            $stmt->bindValue(1, $name);
            $stmt->bindValue(2, $hash);
            // 実行 FILL_IN
            $stmt->execute();
            //　登録完了メッセージ出力
            $signUpMessage = "登録が完了しました。";
        } catch (PDOException $e) {
            // エラーメッセージの出力 FILL_IN 
            $signUpMessage = "データベースエラー。";
            // 終了 FILL_IN
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
    <?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?>

    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">

    </form>
</body>

</html>