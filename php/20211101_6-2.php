<?php
echo"<font size= 3px>";
echo "<h1><font color='yellowgreen'>成績表</font></h1>";
echo "<h2><font color='aqua'>氏名:</font></h2>";
echo $_POST["your_name"];
echo "<br>";
echo "<h2><font color='aqua'>学籍番号:</font></h2>";
echo $_POST["gakusekibango"];
echo "<br><br>";
echo "<h2><font color='aqua'>国語:</font></h2>"; //html의 태그를 쓸 수 있다.
echo $_POST["kokugo"];
echo "<br>";
echo "<h2><font color='aqua'>英語:</font></h2>";
echo $_POST["eigo"];
echo "<br>";
echo "<h2><font color='aqua'>社会:</font></h2>";
echo $_POST["shakai"];
echo "<br>";
echo "<h2><font color='aqua'>数学:</font></h2>";
echo $_POST["suugaku"];
echo "<br>";
echo "<h2><font color='aqua'>体育:</font></h2>";
echo $_POST["taiiku"];
?>

<?php
$seiseki[0]=$_POST["kokugo"];
$seiseki[1]=$_POST["eigo"];
$seiseki[2]=$_POST["shakai"];
$seiseki[3]=$_POST["suugaku"];
$seiseki[4]=$_POST["taiiku"];



$total=$seiseki[0]+$seiseki[1]+$seiseki[2]+$seiseki[3]+$seiseki[4];

$total=0;

for ($i=0; $i<5; $i++){
    $total=$total+$seiseki[$i];
}
 
$avg= $total/5;

echo "<h2>total:</h2>" . $total;
echo "<h2>average:</h2>" . $avg;
?>