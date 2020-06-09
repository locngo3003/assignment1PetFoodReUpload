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
    public $picture;
    public $description;
    public $categoryId;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $categoryID
     */
    public function __construct($id, $name, $price, $picture, $description, $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->picture = $picture;
        $this->description = $description;
        $this->categoryId = $categoryId;
    }


}