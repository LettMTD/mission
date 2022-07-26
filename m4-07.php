<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UTF-8">
    <title> mission_4-07 </title>
</head>
<body>
    <?php
    // DB接続設定
        $dsn = 'データベース名';
        $user = 'ユーザー名';
        $password = 'パスワード';
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        
        //bindParamの引数（:nameなど）は4-2でどんな名前のカラムを設定したかで変える必要がある。
        $id = 1; //変更する投稿番号
        $name = "山田";
        $comment = "こんにちは！"; //変更したい名前、変更したいコメントは自分で決めること
        $sql = 'UPDATE tbtest SET name=:name,comment=:comment WHERE id=:id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

    //続けて、4-6の SELECTで表示させる機能 も記述し、表示もさせる。
    //※ データベース接続は上記で行っている状態なので、その部分は不要
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
