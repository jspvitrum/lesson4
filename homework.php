<?php
require_once __DIR__ . '/vendor/autoload.php';

$connection = new \Db\Connect('127.0.0.1', 3306, 'root', '0971461847', 'Geekhub');


$query = "SELECT * FROM homework";
$homework = $connection->getDefaultConnection()->query($query);
while ($row = $homework->fetch())
{
    echo $row ['id'] , $row['names'] , $row['disciplines'], $row['result'], $row['student']."\n";
}