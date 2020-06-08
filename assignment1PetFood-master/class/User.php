<?php
/**
 * Class Category
 * author Loc Ngo
 * 6-9-20
 * version 1
 */
include_once "DB.php";
include_once "Category.php";
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
    public function viewCategories(){
       $conn = (new DB())->connection;// create connection from class
       $sql = "select * from Category";
       $categories = array();
       $result = $conn ->query($sql);
       if ($result->num_rows >0){
           while ($row = $result ->fetch_assoc()){
               $category = new category(["id"],$row["name"],$row["picture"]);
               array_push($categories,$category);
           }
       }
       $conn->close();
        return $categories;
    }

}