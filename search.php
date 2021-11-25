<?php
include_once "person.php";
include_once "action.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <a href="index.php">Quay lại </a><br>
    <p>Nhớ viết hoa chữ cái đầu </p>
    <label><input type="text" name="name" placeholder="Nhập tên người"></label>
    <button type="submit">Tìm</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_REQUEST["name"];
    $arr = loadData();
    foreach ($arr as $person) {
        if ($person->getName() === $name) {
            echo "Name: ".$person->getName().", Age: ".$person->getAge();
            return true;
        }
    }
    echo "Không có người bạn tìm ";
}
