<?php
    //データベースに接続
    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES UTF8MB4');

    //SQL文の実行::データベースからデータを取得する->SELECT文 ※SELECT文を変数に入れて管理する
    $sql = 'SELECT * FROM survey';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    //全てのレコードを変数に代入
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧画面</title>
</head>
<body>
    <h1>お問合せ内容一覧</h1>
    <hr>
    <?php foreach($records as $record): ?>
        <p>ニックネーム:<?php echo $record['nickname']; ?></p>
        <p>メールアドレス:<?php echo $record['email']; ?></p>
        <p>お問合せ内容:<? echo $record['content']; ?></p>
    <hr>
    <?php endforeach ?>
    <a href="./index.php">入力画面へ戻る</a>
</body>
</html>