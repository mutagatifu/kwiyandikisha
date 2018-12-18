<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 17:18
 */
include '../include/event.php';
$event =new Event();
$id=$_POST['id'];

if(!empty($id)){

    $event->setId($id);
    $query = $event->deletEvent();
    if ($query){
        $message="success";
        $status=1;
    }
    else{
        $message="deletion failed";
        $status=0;
    }


}
else{
    $message ="please provide the event to be removed";
    $status=0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);
?>