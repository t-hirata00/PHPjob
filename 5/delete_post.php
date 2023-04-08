<?php
// DBの接続情報を記述したファイルを読み込む
require_once('');
// 関数をまとめたファイルを読み込む
require_once('');

// // ログインチェック関数実行
check_user_logged_in();

// URLの?以降で渡されるIDをキャッチ
// main.php 「delete_post.php?id=」
$id = $_GET[''];

// 引数の値が空だった場合、main.phpにリダイレクト
redirect_main_unless_parameter($id);

// PDOのインスタンスを取得


try {
    //指定idのレコードをbooksテーブルから削除
    $sql = "DELETE FROM books WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    // idのバインド
    $stmt->bindParam();
    $stmt->execute();
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}