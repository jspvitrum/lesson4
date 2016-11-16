<?php
/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 16.11.16
 * Time: 6:41
 */

namespace Model;


class lecturer
{
private $id;
    private $names;
    private $surname;
    private $chair;
    private $students;

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param mixed $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * @return mixed
     */
    public function getChair()
    {
        return $this->chair;
    }

    /**
     * @param mixed $chair
     */
    public function setChair($chair)
    {
        $this->chair = $chair;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param mixed $names
     */
    public function setNames($names)
    {
        $this->names = $names;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}