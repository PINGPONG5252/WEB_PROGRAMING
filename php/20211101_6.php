<?php
echo"<font size= 3px>";
echo "<h1><font color='cornflowerblue'>成績表</font></h1>";
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
$kokugo=$_POST["kokugo"];
$eigo=$_POST["eigo"];
$shakai=$_POST["shakai"];
$suugaku=$_POST["suugaku"];
$taiiku=$_POST["taiiku"];

$sum=0;

$total=$kokugo+$eigo+$shakai+$suugaku+$taiiku;

$avg = $total/5;

echo "<h2>total:</h2>" . $total ;
echo "<h2>average:</h2>" . $avg ;
?>

