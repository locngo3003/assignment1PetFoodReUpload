<?php
/**
 * Class Category
 * author Loc Ngo
 * 6-9-20
 * version 1
 */

class Category
{
public $id;
public $name;
public $pictrure;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $pictrure
     */
    public function __construct($id, $name, $pictrure)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pictrure = $pictrure;
    }

}
