<?php
// index.php
$x = 3.5;
echo ceil($x);
// 切り上げ
?><br>
<?php
// index.php
$x = 10.2;
echo floor($x);
//　切り捨て
?><br>
<?php
// index.php
$x = 6.8;
echo round($x);
//　四捨五入
?><br>
<?php
echo pi();
//円周率
    
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
// 半径が3の円の面積の計算
circleArea(3);
?><br>
<?php
echo mt_rand(1, 50);
// 乱数
?><br>
<?php
$str = "hogenhogen";
echo strlen($str);
?><br>
<?php
$str = "kinukage";
echo strpos($str, "u");
// =>3と出力される
?><br>
<?php
$str = "kinukage";
echo substr($str, -6, 2);
// => nuと出力される
?><br>
<?php
$str = "kinukage";
echo str_replace("nuka", "NUKA", $str);
?><br>
<?php
$name = "米山さん";
$limit_number = 30;

printf("%sの残り時間はあと%02d分です", $name, $limit_number);
?><br>
<?php
$name = "米山さん";
$limit_time = 1; 
$price = 4000; 
printf("%sはあと%d時間で%d円の罰金です。", $name, $limit_time, $price);

?><br>
<?php
$limit_hour = 100;
$limit_minute = 100;
printf("残り%d時間%d分", $limit_hour, $limit_minute);
echo '<br>';
$limit_hour = 10;
$limit_minute = 3;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
?><br>
<?php
echo "1. PostgreSQL・Oracle SQL".'<br>';
echo "RDB）の作成や操作、管理ができるオープンソースのデータベース管理システムの一つ・オラクル社が開発したデータベース言語".'<br>';
echo "2. TortoiseGit・TortoiseSVN".'<br>';
echo "様々なファイルの追加・編集・削除などの内容を保存しておき、別のコンピュータでも同じ状況を再現することをより扱いやすくするために開発されたWindows用ソフトウェア・
シェル拡張によりWindowsエクスプローラに統合されるSubversionクライアント".'<br>';
echo "3. 外部設計・内部設計".'<br>';
echo "ユーザーから見えるインターフェース部分の仕様を決定したり、セキュリティや運用規定、システム開発のスケジュールや費用などを設計したりと、基本的にユーザーに向けた仕様を設計する・ソフトウェアや情報システムの開発工程の一つで、全体の構成や行うべき処理の詳細など実装に必要な仕様を定義する工程".'<br>';
?>