<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 18/12/2018
 * Time: 11:24
 */
include '../include/event.php';

$event = new Event();
$id=$_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$location = $_POST['location'];
$time = $_POST['time'];
$update = date("Y-m-d h:i:s");
if (!empty($id)){
    $event->setId($id);
    $event->setName($name);
    $event->setDescriptions($description);
    $event->setLocation($location);
    $event->setTime($time);
    $query = $event->updatEvent($update);
    if ($query){
        $message="successfully updated";
        $status=1;
    }
    else{
        $message="failed to update";
        $status=0;
    }
}
else{
    $message="specify the record to update with id";
    $status=0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);
