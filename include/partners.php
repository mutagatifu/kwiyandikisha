<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 15/12/2018
 * Time: 14:08
 */
include 'dbconnection.php';
class partners extends DbConnection
{
private $name;
private $image;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

public function recordPartners(){
        $query=$this->connection->query("INSERT INTO `partners`(`name`, `logo`) 
                                  VALUES ('$this->name','$this->image')");
        if($query){
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }

}
public function verifyPartner(){
        $query =$this->connection->query("SELECT * FROM `partners` WHERE `name`='$this->name'");
        return $query;
}

public function returnPartners(){
        $query = $this->connection->query("select * from partners");
        return $query;
}

}