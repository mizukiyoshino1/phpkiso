<?php
    //バリデーション    
    $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $content =  htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

    //条件
    if($nickname === ""){
        $nickname_result = "入力されていません";
    } else {
        $nickname_result = $nickname;
    }

    if($email === ""){
        $email_result = "入力されていません";
    } else {
        $email_result = $email;
    }

    if($content === ""){
        $content_result = "入力されていません";
    } else {
        $content_result = $content;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>
    <h1>お問合せ情報確認</h1>
    <p>ニックネーム:<? echo $nickname_result; ?></p>
    <p>メールアドレス:<? echo $email_result; ?></p>
    <p>お問合せ内容:<? echo $content_result; ?></p>

    <!-- phpは画面の遷移が行われる場合、前の画面で保持していた情報を記憶することができない -->
    <form method="POST" action="./thanks.php">

        <!-- 確認画面の値を、完了画面に渡したい type="hidden" を用いる -->
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">

        <!-- 入力画面に戻るボタン→onclick="history.back()"というJavaScriptの関数を使う -->
        <button type="button" onclick="history.back()">戻る</button> 

        <!-- 値が空じゃない時に、送信ボタンを表示する -->
        <?php if($nickname !== "" && $email !== "" && $content !== ""): ?>
            <input type="submit" value="送信">
        <?php endif ?>
    </form>
    
</body>
</html>