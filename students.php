<?php
require_once __DIR__ . '/vendor/autoload.php';

$connection = new \Db\Connect('127.0.0.1', 3306, 'root', '0971461847', 'Geekhub');


$query = "SELECT * FROM students";
$student = $connection->getDefaultConnection()->query($query);
while ($row = $student->fetch())
{
    echo $row ['id'] , $row['names'] , $row['surname'], $row['email'], $row['phone']."\n";
}