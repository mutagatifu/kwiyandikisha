<?php
include '../include/university.php';
$university = new University();
$unId = $_POST['universityId'];

if (!empty($unId))
{
    $university->setId($unId);
    $query = $university->deleteUniversity();
    if($query){
        $message = "success";
        $status = $query;
    }
    else{
        $message = "failed to delete";
        $status = $query;
    }
}
else{
    $message = "specify the data to delete";
    $status = 0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);
