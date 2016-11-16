<?php
/**
 * Created by PhpStorm.
 * User: volodymyr
 * Date: 15.11.16
 * Time: 21:17
 */

namespace Model;


class Discipline
{

    private $id;
    private $names;
    private $chair;

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