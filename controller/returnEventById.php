<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/01/2019
 * Time: 12:52
 */

include "../include/event.php";
$events = new Event();
$event=array();
$eventId=$_POST['id'];
if (!empty($eventId)){
    $events->setId($eventId);
    $query = $events->fetchEventById();
    $count = mysqli_num_rows($query);
    if ($count > 0){
        $message = "success";
        $status=1;
        foreach ($query as $rows){
            $event[]=$rows;
        }
    }
    else{
        $message = "no data returned";
        $status=0;
        $event[]=0;
    }



}
else{
    $message = "specify the event to modify";
    $status=0;
}
$returnJs=array('status'=>$status,'message'=>$message,'data'=>$event);
echo json_encode($returnJs);