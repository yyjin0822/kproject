<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root'; // 사용자명을 입력하세요.
        $pass = '1234'; // 비밀번호를 입력하세요.
        $db = 'kproject'; // 데이터베이스명을 입력하세요.
        
        // 연결 생성
        $mysqli = new mysqli($host, $user, $pass, $db);
        
        
        
    ?>
    <h1>블룸즈버리</h1>
    <ul class="coffee">
        <h2>coffee</h2>
    <?php
    $sql =  "select * from menu where kind = 'coffee' ";
    $result = $mysqli->query($sql);
                foreach($result as $row) {
             ?>
                <h2></h2>
                <li><?=$row['menu_name']?> <?=$row['price']?> 
                <a href="/option.php?id=<?=$row['id']?>">담기</a> </li>
    <?php
     }
?>
    </ul>
        
    <ul class="non-coffee">
        <h2>non-coffee</h2>
    <?php
    $sql =  "select * from menu where kind = 'NON-coffee' ";
    $result = $mysqli->query($sql);
                foreach($result as $row) {
             ?>
                <h2></h2>
                <li><?=$row['menu_name']?> <?=$row['price']?>
                <a href="/option.php?id=<?=$row['id']?>">담기</a></li>
             <?php
                }
             ?>
    </ul>

    <ul class="TEA-tavalon">
        <h2>TEA-tavalon</h2>
    <?php
    $sql =  "select * from menu where kind = 'TEA-tavalon' ";
    $result = $mysqli->query($sql);
                foreach($result as $row) {
             ?>
                <h2></h2>
                <li><?=$row['menu_name']?> <?=$row['price']?>
                <a href="/option.php?id=<?=$row['id']?>">담기</a></li>
             <?php
                }
             ?>
    </ul>

    <ul class="smoothie">
        <h2>smoothie</h2>
    <?php
    $sql =  "select * from menu where kind = 'smoothie' ";
    $result = $mysqli->query($sql);
                foreach($result as $row) {
             ?>
                <h2></h2>
                <li><?=$row['menu_name']?> <?=$row['price']?>
                <a href="/option.php?id=<?=$row['id']?>">담기</a></li>
             <?php
                }
             ?>
    </ul>

    <ul class="SIGNATURE">
        <h2>SIGNATURE</h2>
    <?php
    $sql =  "select * from menu where kind = 'SIGNATURE' ";
    $result = $mysqli->query($sql);
                foreach($result as $row) {
             ?>
                <h2></h2>
                <li><?=$row['menu_name']?> <?=$row['price']?>
                <a href="/option.php?id=<?=$row['id']?>">담기</a></li>
             <?php
                }
             ?>
    </ul>

</body>
</html>