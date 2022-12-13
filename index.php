<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せ</title>
</head>
<body>
    <h1>お問合せ情報入力</h1>
    
    <!-- check.phpに情報を送る -->
    <form method="POST" action="./check.php">

        <!-- ニックネーム、メールアドレス、お問合せ内容の情報を送る -->
        <div>
            ニックネーム<br>
            <input type="text" name="nickname" value="">
        </div>
        <div>
            メールアドレス<br>
            <input type="email" name="email" value="">
        </div>
        <div>
            お問合せ内容<br>
            <textarea name="content" cols="30" rows="10"></textarea>
        </div>

        <!-- 送信する -->
        <input type="submit" value="送信">
    </form>
</body>
</html>