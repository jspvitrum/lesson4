<?php

require_once __DIR__ . '/vendor/autoload.php';

$connection = new \Db\Connect('127.0.0.1', 3306, 'root', '0971461847', 'Geekhub');


$query = "SELECT * FROM chair";
$chair = $connection->getDefaultConnection()->query($query);
while ($row = $chair->fetch())
{
    echo $row ['id'] , $row['names'] , $row['universitets']."\n";
}

?>
