<?php
    $testFile = "test.txt";
    $contents = "こんにちは!";

    if (is_writable($testFile)) {
        //書き込み可能な時の処理
        //確認の為、echoで表示させる
        // echo "writeable!!";

        // 対象のファイルを開く
        $fp = fopen($testFile,"w");

        // 対象のフィルにかきこむ
        fwrite($fp,$contents);

        //ファイルを閉じる
        fclose($fp);

        //書き込み終了宣言
        echo "finish writeable!!";


    } else {
        //書き込み不可のときの処理
        echo "not writable!";
        exit;
    }

    $test_file = "test2.txt";

    if(is_readable($test_file)){
        //読み込み可能な時の処理

        //対象ファイルを開く
        $fp2 = fopen($test_file,"r");

        //開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp2)) {
            //改行コード読み込みで1行ずつ読み込む
            echo $line.'<br>';
        }

        fclose($fp2);
    }else{
        //読み込み不可ときの処理
        echo "not readable!";
        exit;
    }
?>