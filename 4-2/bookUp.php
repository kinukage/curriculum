<?php
// db_connect.phpの読み込み
require_once("db_connect.php");

// function.phpの読み込み


// ログインしていなければ、login.phpにリダイレクト


// 提出ボタンが押された場合
if (!empty($_POST["post"])) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // 入力したtitleとdateとstockを格納
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "Insert into books(title,date,stock) values(:title,:date,:stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title',$title);
            // 発売日をバインド
            $stmt->bindParam(':date',$date);
            // 在庫数をバインド
            $stmt->bindParam(':stock',$stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error:'. $e->getMessage();
            // 終了
            die();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>本 登録画面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet"　type="text/css" href="style.css">
</head>
<body>
    <div class="contenter clearfix">
        <h1>本 登録画面</h1>
        <form method="POST" action="">
        <div class="text">
            <input type="text" name="title" id="title" placeholder="タイトル" class="text-1"><br>
            <input type="text" name="date" id="date" placeholder="発売日" class="text-1"><br>
            在庫数<br>
            <input type="number" name="stock" id="stock" placeholder="選択してください" class="text-2"><br>
        </div>    
            <input type="submit" value="登録" id="post" name="post" class="button">
        </form>
    </div>
</body>
</html>