<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title> mission_4-06 </title>
</head>
<body>
    <?php
    // DB接続設定
        $dsn = 'データベース名';
        $user = 'ユーザー名';
        $password = 'パスワード';
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        
        $sql = 'SELECT * FROM tbtest';
        $stml = $pdo -> query($sql);
        $results = $stml -> fetchAll();
        foreach($results as $row){
            echo $row['id'].',';
            echo $row['name'].',';
            echo $row['comment'].'<br>';
            
            echo "<hr>";
        }
    ?>
</body>
</html>
