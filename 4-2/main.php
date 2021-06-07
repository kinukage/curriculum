<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// PDOのインスタンスを取得
$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM books ORDER BY id ASC";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error:'. $e->getMessage();
    // 終了
    die();
}






?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>在庫一覧画面</title>
    <link rel="stylesheet"　type="text/css" href="style.css">
</head>
<body>
    <div class="content clearfix">
        <h1>在庫一覧画面</h1>
            <a href="bookUp.php"><input type="submit" value="新規登録" class="novelty"></a>
            <a href="logout.php"><input type="submit" value="ログアウト" class="logout"></a><br />
        <table>
            <tr class="tr">
                <td class="title">タイトル</td>
                <td class="date">発売日</td>
                <td class="stock">在庫数</td>
                <td></td>
            </tr>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>"><input type="submit" value="削除" class="delete"></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>