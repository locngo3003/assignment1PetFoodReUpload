<?php
/**
 * Class Category
 * author Loc Ngo
 * 6-9-20
 * version 1
 */
include_once "DB.php";
include_once "Category.php";
include_once  "Product.php";
class User
{
    public $id;
    public $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * @name viewCategories
     * @return category array
     */
    public function viewCategories()
    {
        $conn = (new DB())->connection;// create connection from class
        $sql = "select * from Category"; //my query
        $categories = array(); // my categories in an array
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $category = new category(["id"], $row["name"], $row["picture"]);
                array_push($categories, $category);
            }
        }
        $conn->close();
        return $categories;
    }

    public function showProductsByCategory($categoryId){
        $conn = (new DB())->connection;
        $sql = "select * from Product where categoryid=".$categoryId; //. means merge two string
        $products = array();
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
                $product = new Product($row["id"],$row["name"],$row["price"],$row["description"],$row["categoryId"]);
                array_push($products, $product);
            }
        }

        $conn->close();
        return $products;
    }
}