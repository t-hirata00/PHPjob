<?php
    //値の受け取り
    $number = $_POST['number'];
    // var_dump($number);
    // echo '<br>';

    //文字列から、ランダムな数値を取り出し
    //受け取った値の文字数を取り出し
    $str_number = strlen($number);
    // var_dump($str_number);
    // echo '<br>';
    
    //文字数-1の数の中でランダムな数値を取り出し
    $random_number = mt_rand(0,$str_number - 1);
    // var_dump($random_number);
    // echo '<br>';
    //文字列からランダムな位置で一文字取り出し、数値に変更
    $divination_number_str = substr($number,$random_number,1);
    $divination_number = (int)$divination_number_str;
    // var_dump($divination_number);
    // echo '<br>';
    
    //占いの結果と本日の日付
    //本日の日付
    $today = date("Y/m/d",time());
    // var_dump($today);
    // echo '<br>';

    //占い結果
    $divination = "null";
    if($divination_number == 0){
        $divination = "凶";
    }else if($divination_number >= 1 && $divination_number <=3){
        $divination = "小吉";
    }else if($divination_number >= 4 && $divination_number <=6){
        $divination = "中吉";
    }else if($divination_number >= 7 && $divination_number <=8){
        $divination = "吉";
    }else{
        $divination = "大吉";
    }
    // var_dump($divination);
    // echo '<br>';

    //出力
    printf("%sの運勢は",$today);
    echo '<br>';
    printf("選ばれた数字は %d",$divination_number);
    echo '<br>';
    printf("%s",$divination);


?>