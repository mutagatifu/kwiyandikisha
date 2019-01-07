<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 07/01/2019
 * Time: 12:02
 */
include "../include/university.php";

$university = new University();
$accomId = $_POST['id'];
if (!empty($accomId)){
    $university->setAccomodationId($accomId);

    $query = $university->deleteAccomodImage();
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