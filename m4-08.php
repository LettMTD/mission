<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title> mission_4-08 </title>
</head>
<body>
    <?php
    // DB接続設定
        $dsn = 'データベース名';
        $user = 'ユーザー名';
        $password = 'パスワード';
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        
        $id = 2;
        $sql = 'delete from tbtest where id=:id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    //続けて、4-6の SELECTで表示させる機能 も記述し、表示もさせる。
    //※ データベース接続は上記で行っている状態なので、その部分は不要
    
        $sql = 'SELECT * FROM $tbtest';
        $stmt = $pdo -> query($sql);
        $results = $stmt -> fetchAll();
        foreach($results as $row){
            echo $row['id'].",";
            echo $row['name'].",";
            echo $row['comment']."<br>";
            
            echo "<hr>";
        }
    ?>
</body>
</html>
