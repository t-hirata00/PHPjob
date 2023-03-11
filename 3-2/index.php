<?php 
echo '<br>';
//フルーツの名前と単価の連想配列
$fruits = ["りんご" => 150,"みかん" => 50,"桃"=> 300];
// var_dump($fruits);
// echo '<br>';

//フルーツの個数の配列
$num = [2,3,10];
// var_dump($num);
// echo '<br>';

//計算するtotal関数 引数は(単価,個数)
function total($price,$quantity){
    $total = $price * $quantity;
    return $total;
}
// print "合計値は" . total(300,5) ."円";
// echo '<br>';

$i=0;
foreach ($fruits as $key => $value) {
    //引数の確認
    // var_dump($key);
    // echo '<br>';
    // var_dump($value);
    // echo '<br>';
    // var_dump($num[$i]);
    // echo '<br>';

    //total実行
    echo $key . "は" . total($num[$i],$value) . "円です。";
    $i++;
    echo '<br>';
}

?>