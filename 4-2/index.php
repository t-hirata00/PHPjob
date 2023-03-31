<?php
require_once ('getData.php');

function user(){
  // echo "test";
  $getData = new getData();
  $user = $getData->getUserData();
  // var_dump($user);
  // echo $user['first_name'];
  return $user;
}
$userArray = user();
$username = $userArray['last_name'].$userArray['first_name'];
$userLogin = $userArray['last_login'];

function data(){
  $getData = new getData();
  $data = $getData->getPostData();
  return $data;
}
$dataArray = data();

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>4-2</title>
    <!-- 自作CSS-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <div class="heder-main">
          <div class="heder-left">
            <img class="heder-left-img" src="yiimag.png" alt="アイコン" />
          </div>
          <div class="heder-right">
            <div class="heder-right-top">
              <span class="header-right-position">ようこそ <?php echo $username;?> さん</span>
            </div>
            <div class="heder-right-down">
              <span class="header-right-position">最終ログイン日時： <?php echo $userLogin ?></span>
            </div>
          </div>
        </div>
      </header>
      <main class="main">
        <table class="main-db">
        <!-- getdataインスタンス化 表の受け取り -->
          <thead>
            <tr>
              <th>記事ID</th>
              <th>タイトル</th>
              <th>カテゴリ</th>
              <th>本文</th>
              <th>投稿日</th>
            </tr>
          </thead>
          
          <!-- ユーザ情報、記事情報は、getDataクラスをインスタンス化して取得 -->
          <tbody>
        <?php
        foreach($dataArray as $row){
          echo '<tr>';
          echo '<td>' . $row['id'] . '</td>';
          echo '<td>' . $row['title'] . '</td>';
          echo '<td>' . ($row['category_no'] == '1' ? '食事' : ($row['category_no'] == '2' ? '旅行' : 'その他')). '</td>';
          echo '<td>' . $row['comment'] . '</td>';
          echo '<td>' . $row['created'] . '</td>';
          echo '</tr>';
        }?>
        </tbody>
        </table>
      </main>
      <footer class="footer">
        <div class="footer-main">Y&I group.inc</div>
      </footer>
    </div>
  </body>
</html>

