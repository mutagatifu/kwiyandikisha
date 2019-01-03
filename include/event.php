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
    private $id;
    private $name;
    private $descriptions;
    private $location;
    private $time;
    private $image;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    $query = $this->connection->query("select * from events where status!=99");
    return $query;
}

// delete event
public function deletEvent(){
    $query = $this->connection->query("update events set status=99 where id='$this->id'");
    return $query;

}
/*update the event*/
    public function updatEvent($update){
        $query = $this->connection->query("UPDATE `events` SET `name`='$this->name',`descriptions`='$this->descriptions',`location`='$this->location',`time`='$this->time' ,`updatedDate`='$update' WHERE `id`='$this->id'");
        if($query){
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }

    }
/*fetch event by Id*/
    public function fetchEventById(){
        $query = $this->connection->query("select * from events where status!=99 and id='$this->id'");
        return $query;

    }




}