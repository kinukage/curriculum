<?php
// index.php
$testFile = "test.txt";
$contents = "こんにちは！";

if(is_writable($testFile)){

    //　書き込み可能なときの処理
    //　対象のファイルを開く
    $fp = fopen($testFile, "w");
    //　対象のファイルに書き込む
    fwrite($fp, $contents);
    //　ファイルを閉じる
    fclose($fp);
    //　書き込みした旨の表示
    echo "finish writing!!";

}else{
    //　書き込み不可のときの処理
    echo "not writable!";
    exit;
}
?>
<br>
<?php
 $test_file = "test2.txt";
    
 if (is_readable($test_file)) {
     // 読み込み可能なときの処理
     // 対象のファイルを開く
     $fp = fopen($test_file, "r");
     // 開いたファイルから1行ずつ読み込む
     while ($line = fgets($fp)) {
         // 改行コード込みで1行ずつ出力
         echo $line.'<br>';
     }
     // ファイルを閉じる
     fclose($fp);
 } else {
     // 読み込み不可のときの処理
     echo "not readable!";
     exit;
 }
?>
<br>
<?php
echo "1. CakePHPの2系・3系の違い".'<br>';
echo "Composerでのインストールに対応していなかったことに対して、インストールがてきる。モデル周りの構成や、DBからデータを取得する際のコードも比較的簡単。
".'<br>';
echo "2. LAMP".'<br>';
echo "OSの「Linux」、Webサーバの「Apache」、データベースの「MySQL」、プログラミング言語および実行環境の「PHP」「Perl」「Python」（のいずれか）の頭文字を繋いだもの。
".'<br>';
echo "3. AWS".'<br>';
echo "Amazon Web Servicesの略。 Amazon.comの子会社であるAmazon Web Servicesによって提供されているクラウドコンピューティングサービス。
".'<br>';