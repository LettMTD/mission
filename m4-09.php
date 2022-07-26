<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title> mission_4-09 </title>
</head>
<body>
    <?php
    // DB接続設定
        $dsn = 'データベース名';
        $user = 'ユーザー名';
        $password = 'パスワード';
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        
        // 【！この SQLは tbtest テーブルを削除します！】
        $sql = 'DROP TABLE tbtest';
        $stmt = $pdo->query($sql);
    ?>
</body>
</html>
