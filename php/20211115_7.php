<?php

$suji1 =  $_POST["num1"];
$suji2 =  $_POST["num2"];
$kigo3 =  $_POST["enzan"];



if ($kigo3==1){
    $kekka= $suji1 + $suji2;
    $aa= "+";
}

elseif ($kigo3==2){
    $kekka = $suji1 - $suji2;
    $aa = "-";
}
elseif ($kigo3==3){
    $kekka = $suji1 * $suji2;
    $aa = "×";
}
else{
    $kekka= $suji1 / $suji2;
    $aa = "÷";
}


echo "<center><h2>計算の結果</h2></center>";
echo $suji1 .  $aa . $suji2 . "=" . $kekka;




?>
