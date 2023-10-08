<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>option</title>
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root'; // 사용자명
        $pass = '1234'; // 비밀번호
        $db = 'kproject'; // 데이터베이스명
        
        // 연결 생성
        $mysqli = new mysqli($host, $user, $pass, $db);
        
        $select =  "select * from kproject.menu where id =' " . $_GET['id'] . " ' ";
        $array =  mysqli_query($mysqli, $select);
        
        if(isset($_POST["id"])) {
            $sql = "insert into kproject.cart values '" . $_POST["cart_menu_name"] . "', '" . $_POST["cart_price"] . "', '" . $_POST["cart_shot"] . "', '" . $_POST["cart_tem"] . "', '" . $_POST["cart_num"] ."' " ;
            $result = mysqli_query($mysqli, $sql);

			if($result != null) {
				echo "<script>alert('장바구니에 담겼습니다.')</script>";
                echo "<script>location.replace('/menu.php')</script>";
			}
		}

        // // $_GET['id'] 값 확인
        // if(isset($_GET['id'])) {
        //     $id = $mysqli->real_escape_string($_GET['id']);
        //     $select = "select * from kproject.menu where id ='$id'";
        //     $array =  mysqli_query($mysqli, $select);
        // } else {
        //     echo "ID 값이 없습니다.";
        //     exit;
        // }

    ?>

<?php foreach ($array as $row) { ?>
    <form action="/option.php" method="post">
    <h1><?=$row['menu_name']?></h1>

    <h2>가격</h2>
    <label><input type="radio" name="price" value=<?=$row['price']?>>가격</label>
    <label><?=$row['price']?></label>
    
    <h2>hot/ice</h2>
    <label><input type="radio" name="tem" value="ice"> ice</label>
    <label><input type="radio" name="tem" value="hot"> hot</label>

    <h2>샷추가</h2>
    <label><input type="radio" name="shot" value=0>샷추가 없음</label>
    <label><input type="radio" name="shot" value=1>1샷추가</label>
    
    <h2>수량</h2>
    <input type="number" name="number" placeholder="수량을 입력하세요">

    <input type="submit" value="담기">
    </form>
<?php } ?>


</body>
</html>