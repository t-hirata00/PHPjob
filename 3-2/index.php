<?php 
echo '<br>';
$fruits = ["りんご" => "300円","みかん" => "150円","桃" => "3000円"];
//var_dump($fruits);
echo '<br>';

function total($price,$quantity){
    $total = $price * $quantity;
    return $total;
}

//print "合計値は" . total(300,5) ."円";

foreach ($fruits as $key => $value) {
    # code...
    echo $key . "は" . $value . "です。";
    echo '<br>';
}

?>