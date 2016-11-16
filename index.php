<?php

require_once __DIR__ . '/vendor/autoload.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="insert.php" method="get">
    <input type="submit" value="Заполнить БД данными">
</form>

<form action="universitets.php" method="get">
    <input type="submit" value="Университеты">
</form>

<form action="chair.php" method="get">
    <input type="submit" value="Кафедры">
</form>

<form action="students.php" method="get">
    <input type="submit" value="Студенты">
</form>

<form action="homework.php" method="get">
    <input type="submit" value="Список дз">
</form>

</body>
</html>



