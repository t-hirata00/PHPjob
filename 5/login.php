<?php
// DBの接続情報を記述したファイルを読み込む
require_once('db_connect.php');
// 関数をまとめたファイルを読み込む
require_once('function.php');

session_start();

if (!empty($_POST)) {

    if (empty($_POST["name"])) {
        echo "ユーザー名が未入力です。";
    }
    if (empty($_POST["password"])) {
        echo "パスワードが未入力です。";
    }

    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $pass = htmlspecialchars($_POST["password"], ENT_QUOTES);
        $pdo = db_connect();

        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($pass, $row["password"])) {
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["name"];

                header("Location: main.php");
                exit;
            } else {
                // パスワードが間違っている場合、エラーコードとして 1 を返す
                $error_code = 1;
            }
        } else {
            // ユーザー名が存在しない場合、エラーコードとして 2 を返す
            $error_code = 2;
        }

        // エラーコードに応じてエラーメッセージを表示する
        if (isset($error_code)) {
            switch ($error_code) {
                case 1:
                    echo "パスワードが間違っています。";
                    break;
                case 2:
                    echo "ユーザー名が存在しません。";
                    break;
                default:
                    echo "ユーザー名またはパスワードに誤りがあります。";
                    break;
            }
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
    <title>ログイン画面</title>
</head>

<body>
    <?php echo htmlspecialchars($name, ENT_QUOTES); ?>
    <?php echo htmlspecialchars($pass, ENT_QUOTES); ?>
    <div>
        <h2>ログイン画面</h2>
        <button class="btn" onclick="location.href='register.php'">新規ユーザー登録</button>
    </div>
    <form action="" method="post"><br>
        <input placeholder="ユーザー名" type="text" name="name" id="username" style="width: 250px; height: 30px;"><br>
        <input placeholder="パスワード" type="password" name="password" id="password" style="width: 250px; height: 30px; margin-top: 15px;"><br>
        <input class="button" type="submit" value="ログイン"><br>
    </form>
</body>

</html>