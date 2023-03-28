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
              <span class="header-right-position">test</span>
            </div>
            <div class="heder-right-down">
              <span class="header-right-position">test</span>
            </div>
          </div>
        </div>
      </header>
      <main class="main">
        <div class="main-db">
          <!-- ユーザ情報、記事情報は、getDataクラスをインスタンス化して取得 -->
        <?php user(); ?>
        <?php
        require_once ('getData.php');
        ?>
        </div>
      </main>
      <footer class="footer">
        <div class="footer-main">Y&I group.inc</div>
      </footer>
    </div>
  </body>
</html>

<?php
require_once ('getData.php');

function user(){
  echo "test";
  $test = new getData();
  
  echo $test->getUserData();
  // global $getData;
  // $user = $getData->getUserData();
  // echo $user;
}