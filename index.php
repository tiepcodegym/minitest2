<?php
include_once "action.php";
include_once "person.php";
$persons = loadData();
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
<h2>Danh sách người </h2>
<p>Theo tuổi tăng dần </p>
<a href="create.php">Thêm tên</a><br>
<a href="search.php">Tìm kiếm</a>
<table border="1px" cellpadding="5" cellspacing="0">
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($persons as $key=>$person):?>
        <tr>
            <td><?php echo $person->getName(); ?></td>
            <td><?php echo $person->getAge(); ?></td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<?php

?>

</body>
</html>