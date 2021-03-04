<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$number = array("80","22","20","21");
$web = array("PHP","Python","JAVA","HTML");
$mysql = array("join","select","insert","update");
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer = $number[0];
$webweb = $web[3];
$mysqlsql = $mysql[3];

?>
<link rel="stylesheet" href="style.css">
<div >

<p style="color:#fff;">お疲れ様です<?php echo $my_name ?><!--POST通信で送られてきた名前を出力-->さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action = "answer.php" method = "POST" >
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach($number as $value){
    echo "<input type=\"radio\" name=\"number\" value=\"{$value}\">";
    echo $value;
}
?><br>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach($web  as $value){

    echo "<input type=\"radio\" name=\"web\" value=\"{$value}\">";
    echo $value;
}
?><br>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach($mysql as $value){
    echo "<input type=\"radio\" name=\"mysql\" value=\"{$value}\">";
    echo $value;
}
?><br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="answer" value="<?php echo $answer ?>">
<input type="hidden" name="webweb" value="<?php echo $webweb ?>">
<input type="hidden" name="mysqlsql" value="<?php echo $mysqlsql ?>">
<input type="hidden" name="my_name" value="<?php echo $my_name ?>">
<input type ="submit" value= "回答する"/>
</form>
</div>

