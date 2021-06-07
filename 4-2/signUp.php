<?php
// db_connect.phpの読み込みFILL_IN
require_once("db_connect.php");

// POSTで送られていれば処理実行
if(isset($_POST["signUp"])){

// nameとpassword両方送られてきたら処理実行
$name = $_POST["name"];
$password = $_POST["password"];

// PDOのインスタンスを取得FILL_IN
$pdo = db_connect();


try {
    // SQL文の準備 FILL_IN 
    $sql = "Insert into users(name,password) values(:name,:password)";
    // パスワードをハッシュ化
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    // プリペアドステートメントの作成 FILL_IN 
    $stmt = $pdo->prepare($sql);
    // 値をセット　FILL_IN
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':password',$password);
    $stmt->bindValue(':password', $password_hash);
    // 実行 FILL_IN
    $stmt->execute();
   // login.phpにリダイレクト
   header("Location: login.php");
    
}catch (PDOException $e) {
    // エラーメッセージの出力 FILL_IN 
    echo 'Error:'. $e->getMessage();
    // 終了 FILL_IN
    die();
}
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ユーザー登録画面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet"　type="text/css" href="style.css">
</head>
<body>
    <div class="contenter clearfix">
        <h1>ユーザー登録画面</h1>
        <form method="POST" action="">
        <div class="text">
            <input type="text" placeholder="ユーザー名" name="name" id="name" class="text-1"><br>
            <input type="password" placeholder="パスワード" name="password" id="password" class="text-1"><br>
            </div>
            <input type="submit" value="新規登録" id="signUp" name="signUp" class="button" ><br>
        </form>
    </div>
</body>
</html>