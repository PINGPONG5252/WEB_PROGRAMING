<?php
echo "<h2>基本情報</h2>"; //html의 태그를 쓸 수 있다.
echo $_POST["namae"];
echo "<br>";
echo $_POST["seibetu"];
echo "<br>";
echo $_POST["seinen"];
echo "<br>";
echo $_POST["denwa"];
echo "<br>";
echo $_POST["mail"];
echo "@";
echo $_POST["mail2"];
?>

<?php
echo "<h2>住所記入</h2>"; 
echo $_POST["yuubin"];
echo "-";
echo $_POST["yuubin2"];
echo "<br>";
echo $_POST["kuwasii-yuubin"];
echo "<br>";
echo $_POST["kuwasii-yuubin2"];
echo "<br>";

?>

<?php
echo "<h2>ログイン設定</h2>"; 
echo $_POST["id"];
echo "-";
echo $_POST["password"];


?>