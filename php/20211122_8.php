<?php
$q1= $_POST["q1"];
$num= sizeof($q1);

for($i=0;$i<$num;$i++){
   echo "<h2>デフォルト</h2>";
    echo $q1[$i] . "<br/>";
}
?>

<?php
$ch1= $_POST["ch1"];
$num_3= sizeof($ch1);

echo"<h2>好きな動物</h2>";
for($su=0;$su<$num_3;$su++){
    echo $ch1[$su] . "<br/>";
}


?>

<?php
$k1= $_POST["k1"];
$num= sizeof($k1);

for($i=0;$i<$num;$i++){
   echo "<h2>買い物</h2>";
    echo $k1[$i] . "<br/>";
}
?>

<?php

$s1= $_POST["s1"];
$ryou= sizeof($s1);

echo  "<h2>数量チェック</h2>";
for($r=0;$r<$ryou;$r++){
echo $s1[$r] . "<br/>";

}
?>