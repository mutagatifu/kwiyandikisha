<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 10:37
 */
include 'dbconnection.php';
class University extends DbConnection
{
    private $name;
    private $country;
    private $province;
    private $city;
    private $logo;
    private $description;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
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
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }
    public function recordUniversity(){
        $query = $this->connection->query("INSERT INTO `university`(`name`, `country`, `province`, `city`, `logo`,`description`)
                                          VALUES ('$this->name','$this->country','$this->province','$this->city','$this->logo','$this->description')");
        return $query;
    }
    public function verifyUniversity(){
        $query = $this->connection->query("select * from university where name='$this->name' and country='$this->country' and city='$this->city'");
        return $query;
    }
    public function fetchUniversity(){
        $query=$this->connection->query("select * from university where status!=99");
        return $query;
    }

    public function updateUniversity($universityId,$updateDate){
        $query = $this->connection->query("");
        return $query;
    }



}