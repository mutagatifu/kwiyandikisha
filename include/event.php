<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 14:07
 */

include 'dbconnection.php';

class Event extends DbConnection
{

    private $name;
    private $descriptions;
    private $location;
    private $time;
    private $image;

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
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * @param mixed $descriptions
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    }
    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function recordEvents(){
        $query = $this->connection->query("INSERT INTO `events`(`name`, `descriptions`, `location`, `image`, `time`) VALUES ('$this->name','$this->descriptions','$this->location','$this->image','$this->time')");
        return $query;
    }
    /*return all event*/
public function fetchAllEvents(){
    $query = $this->connection->query("select * from events");
    return $query;
}

}