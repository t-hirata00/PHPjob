<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 変数を用意
$id = 1;

// 実行したいSQL文を準備（今回は指定したidの行を取得したい）
$sql = "SELECT * FROM users WHERE id = :id";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    // :idに$idをバインドする
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // ループ文を使用して、1行ずつ読み込む
    // 読み込むものがなくなったらループ終了
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
        echo '<br />';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>