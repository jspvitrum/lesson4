<?php
require_once __DIR__ . '/vendor/autoload.php';

$connection = new \Db\Connect('127.0.0.1', 3306, 'root', '0971461847', 'Geekhub');
$faker = Faker\Factory::create();

$university = new \Model\University();
$university->setCity($faker->city);
$university->setName( $faker->name);
$university->setSite($faker->url);
$university->setId("1");

$sth = $connection->getDefaultConnection()->prepare("INSERT INTO universitets  (names, city, site)  VALUES ( ?, ?, ?)");
$sth->execute(array($university->getName() , $university->getCity(), $university->getSite()));

$chair=new \Model\Chair();
$chair->setId(1);
$chair->setNames($faker->company);
$chair->setUniversitets($university->getId());

$sth = $connection->getDefaultConnection()->prepare("INSERT INTO chair  ( names, universitets)  VALUES ( ?, ?)");
$sth->execute(array($chair->getNames(), $chair->getUniversitets()));

$discipline=new \Model\Discipline();
$discipline->setId(1);
$discipline->setNames($faker->company);
$discipline->setChair($chair->getId());

$sth = $connection->getDefaultConnection()->prepare("INSERT INTO discipline  ( names, chair)  VALUES ( ?, ?)");
$sth->execute(array($discipline->getNames(), $discipline->getChair()));

$student=new \Model\Students();
$student->setId(1);
$student->setNames($faker->firstName);
$student->setSurname($faker->firstNameMale);
$student->setEmail($faker->email);
$student->setPhone($faker->phoneNumber);
$student->setChair($chair->getId());

$sth = $connection->getDefaultConnection()->prepare("INSERT INTO students  ( names, surname, email, phone, chair) 
 VALUES ( ?, ? , ?, ?, ?)");
$sth->execute(array($student->getNames(),$student->getSurname(), $student->getEmail(), $student->getPhone(), $student->getId()));

$lecturer=new \Model\Lecturer();
$lecturer->getId(1);
$lecturer->setNames($faker->firstNameMale);
$lecturer->setSurname($faker->lastName);
$lecturer->setChair(1);

$sth = $connection->getDefaultConnection()->prepare("INSERT INTO lecturer  ( names, surname, chair) 
 VALUES ( ?, ? , ?)");
$sth->execute(array($lecturer->getNames(), $lecturer->getSurname(), $lecturer->getChair()));


$homework=new \Model\Homework();
$homework->setId(1);
$homework->setNames($faker->userName);
$homework->setDisciplines($discipline->getId());
$homework->setResult($faker->month);
$homework->setStudent($student->getId());

$sth = $connection->getDefaultConnection()->prepare("INSERT INTO homework  (names, disciplines, result, student ) 
 VALUES ( ?, ? , ?,  ?)");
$sth->execute(array($homework->getNames(), $homework->getDisciplines(), $homework->getResult(), $homework->getStudent()));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
</head>
<body>
<H1>Дані завантаженні в базу.</H1>
<form action="index.php" method="get">
    <input type="submit" value="Повернутися назад">
</form>

</body>
</html>