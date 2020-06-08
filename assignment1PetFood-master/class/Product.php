<?php


class Product
{
public $id;
public $name;
public $price;
Public $description;
public $categoryId;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $categoryId
     */
    public function __construct($id, $name, $price, $description, $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->categoryId = $categoryId;
    }
}