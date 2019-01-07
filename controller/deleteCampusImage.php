<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 07/01/2019
 * Time: 12:30
 */

include "../include/university.php";

$university = new University();

$imageId = $_POST['id'];
if (!empty($imageId)){
    $university->setCampusImageId($imageId);

    $query = $university->deleteCampusImage();
    if ($query){
        $message="success";
        $status = $query;
    }
    else{
        $message="failed";
        $status = $query;
    }
}
else{
    $message="no data";
    $status = 0;
}

$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);