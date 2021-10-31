<?php
echo "<h2><font color='yellowgreen'>基本情報</font></h2>";//html의 태그를 쓸 수 있다.
echo "<h3>氏名</h3>";
echo $_POST["namae"];
echo "<br>";
echo "<h3>性別</h3>";
echo $_POST["seibetu"];
echo "<br>";
echo "<h3>生年月日</h3>";
echo $_POST["seinen"];
echo "<br>";
echo "<h3>電話番号</h3>";
echo $_POST["denwa"];
echo "<br>";
echo "<h3>メールアドレス</h3>";
echo $_POST["mail"];
echo "@";
echo $_POST["mail2"];
?>

<?php
echo "<h2><font color='yellowgreen'>住所記入</font></h2>"; 
echo "<h3>郵便番号</h3>";
echo $_POST["yuubin"];
echo "-";
echo $_POST["yuubin2"];
echo "<br>";
echo "<h3>住所</h3>";
echo $_POST["kuwasii-yuubin"];
echo "<br>";

?>

<?php
echo "<h2><font color='yellowgreen'>ログイン設定</font></h2>";
echo "<h3>ID</h3>"; 
echo $_POST["id"];
echo "<h3>PASSWORD</h3>";
echo $_POST["password"];


?>