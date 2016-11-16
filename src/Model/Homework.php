<?php
/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 16.11.16
 * Time: 6:47
 */

namespace Model;


class Homework
{
  private $id;
    private $names;
    private $disciplines;
    private $result;
    private $student;

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param mixed $student
     */
    public function setStudent($student)
    {
        $this->student = $student;
    }
    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getDisciplines()
    {
        return $this->disciplines;
    }

    /**
     * @param mixed $disciplines
     */
    public function setDisciplines($disciplines)
    {
        $this->disciplines = $disciplines;
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