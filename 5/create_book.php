<?php
// DBの接続情報を記述したファイルを読み込む
require_once('');
// 関数をまとめたファイルを読み込む
require_once('');

// ログインチェック関数実行


// post通信で値が送られているか確認(isset)
if (isset($_POST)) {
    // タイトルが未入力の場合
    // inputのname属性
    if (empty($_POST['title'])) {
        echo "タイトルが未入力です。";
    }
    // 発売日が未入力の場合
    if (empty($_POST[''])) {
        echo "発売日が未入力です。";
    } 
    // 在庫数が選択されていない場合
    if (empty($_POST[''])) {
        echo "在庫数が選択されていません。";
    }

    // タイトル、発売日、在庫数のデータが全てあるか確認
    if (!empty($_POST['title']) && !empty($_POST['']) && !empty($_POST[''])) {

        // ifがtrueだったら変数に代入
        $title = htmlspecialchars($_POST['title'],ENT_QUOTES);
        $date  = htmlspecialchars($_POST[''],ENT_QUOTES);
        $stock = htmlspecialchars($_POST[''],ENT_QUOTES);

        // PDOのインスタンスを取得
        // $pdo = ????;

        try {
            // booksテーブルにINSERTするクエリを作成
            $sql = "";
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam();
            // 発売日をバインド
            $stmt->bindParam();
            // 在庫数をバインド
            $stmt->bindParam();
            $stmt->execute();
            header("Location: main.php");
        } catch (PDOException $e) {
            echo 'Error :' . $e->getMessage();
            die();
        }
    } 
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>本 登録画面</title>
</head>
<body>
    <h2>本  登録画面</h2>
    <form action="" method="post">
        <input placeholder="タイトル" type="text" name="title" id="title" style="width: 250px; height: 30px;"><br>
        <input placeholder="発売日" type="date" name="date" id="date" style="width: 250px; height: 30px; margin-top: 15px;"><br>
        <h4>在庫数</h4><br>
        <input placeholder="選択してください" type="number" name="stock" min="0" max="100" style="width: 200px; height: 30px;">
        
        <input class="button" type="submit" value="登録" name="post">
    </form>
</body>
</html>