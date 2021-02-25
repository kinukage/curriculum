<form action="result.php" method="post">
お名前：<input type="text" name="my_name" />
<br>
 ご希望商品：
<input type="radio" name="sex" value="A賞">A賞
<input type="radio" name="sex" value="B賞">B賞
<input type="radio" name="sex" value="C賞">C賞
<br>
個数：
    <select name="age">
    <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
        </option>
    <?php } ?>
    </select><br>
<input type="submit" value="申込" />
</form>
<?php
echo "1. モジュール".'<br>';
echo "システム中核部や他の部品への接合部（インターフェース）の仕様が明確に定義され、容易に追加や交換ができるようなもの
".'<br>';
echo "2. バージョン管理システム".'<br>';
echo "ファイルに対して、情報を記録することで、過去のある時点の状態を復元したり、変更内容の差分を表示できるようにする
".'<br>';
echo "3. サブクエリ".'<br>';
echo "データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと
".'<br>';
?>