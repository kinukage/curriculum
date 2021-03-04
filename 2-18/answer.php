<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$number = $_POST['number'];
$web = $_POST['web'];
$mysql = $_POST['mysql'];

$answer = $_POST['answer'];
$webweb = $_POST['webweb'];
$mysqlsql = $_POST['mysqlsql'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if($number == $answer){
    $result="正解！";
}else{
    $bat="残念・・・";
}
if($web == $webweb){
    $resulta="正解！";
}else{
    $bata="残念・・・";
}
if($mysql == $mysqlsql){
    $resultb="正解！";
}else{
    $batb="残念・・・";
}

?>
<link rel="stylesheet" href="style.css">
<div>
<p style="color:#fff;"><?php echo $my_name ?><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p style="color:#fff;">①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p style="color:#fff;"><?php echo $result, $bat ?></p>
<p style="color:#fff;">②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p style="color:#fff;"><?php echo $resulta, $bata ?></p>
<p style="color:#fff;">③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p style="color:#fff;"><?php echo $resultb, $batb ?></p>
</div>