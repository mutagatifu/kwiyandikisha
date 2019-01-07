<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 07/01/2019
 * Time: 12:38
 */

include "../include/university.php";

$university = new University();
$faculitId = $_POST['faculityId'];
if (!empty($faculitId)){

    $university->setFaculityId($faculitId);

    $query = $university->deleteFaculity();
    if ($query){
        $message = "success";
        $status = $query;
    }
    else{
        $message = "failed";
        $status = $query;
    }

}
else{
    $message = "specify the id";
    $status = 0;
}

$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);