<?php
        //バリデーション    
        $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $content =  htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

        //データベースに接続
        $dsn = 'mysql:dbname=phpkiso;host=localhost';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->query('SET NAMES UTF8MB4');
    
        //SQL文の実行::データベースにデータを保存する->INSERT文
        $stmt = $dbh->prepare("INSERT INTO survey SET nickname=?, email=?, content=?");
        $stmt->execute([$nickname, $email, $content]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
</head>
<body>
    <h1>お問合せありがとうございました</h1>

    <!-- 確認画面の値が type="hidden" から送られてきたものを出力する -->
    <p>お問合せ内容</p>
    <p>ニックネーム:<? echo $nickname; ?></p>
    <p>メールアドレス:<? echo $email; ?></p>
    <p>お問合せ内容:<? echo $content; ?></p>

    <a href="./index.php">入力画面へ戻る</a>
    
</body>
</html>