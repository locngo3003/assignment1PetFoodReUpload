<?php

/**
 * Class Category
 * author Loc Ngo
 * 6-9-20
 * version 1
 */
class Product
{
public $id;
public $name;
public $price;
public $image;
Public $description;
public $categoryId;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $image
     * @param $description
     * @param $categoryId
     */
    public function __construct($id, $name, $price,$image, $description, $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;
        $this->categoryId = $categoryId;
    }
}