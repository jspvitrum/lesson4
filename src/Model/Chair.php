<?php

namespace Model;

class Chair
{

    private $id;
    private $names;
    private $universitets;

    /**
     * @return mixed
     */
    public function getUniversitets()
    {
        return $this->universitets;
    }

    /**
     * @param mixed $universitets
     */
    public function setUniversitets($universitets)
    {
        $this->universitets = $universitets;
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