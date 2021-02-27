<?php
$members = ["tanaka", "sasaki", "kimura"];
echo count($members);
?><br>

<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
?><br>
<?php
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
?><br>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if(in_array("tanaka", $members)){
    echo "田中さんがいるよ！";
}else{
    echo "田中さんはいないよ！";
}
?><br>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("=", $members);
var_dump($atstr);
echo '<br>';

$re_members = explode("@", $atstr);
var_dump($re_members);
echo '<br>';

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);

?>
<br>
<?php
echo "1. 要件定義(要求仕様書)".'<br>';
echo "エンドユーザーが開発担当側に対して開発を依頼するシステム要件を文章化したもの".'<br>';
echo "2. 単体テスト・結合テスト".'<br>';
echo "ソフトウェアやシステムのテスト手法の一つで、単一の部品（モジュール）を対象に行うテスト・システム開発におけるプログラムの検証作業の中でも、手続きや関数といった個々の機能を結合させて、うまく連携・動作しているかを確認するテストのこと".'<br>';
echo "3. テスト仕様書(どのようなもの、項目)".'<br>';
echo "開発テストの内容をまとめたもの".'<br>';
?>