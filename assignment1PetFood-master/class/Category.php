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
public $image;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $image
     */
    public function __construct($id, $name, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
    }

}
