<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 18/12/2018
 * Time: 14:50
 */

include '../include/faculity.php';
$faculity = new Faculity();

$id = $_POST['FaculityId'];

if (!empty($id)){
    $faculity->setId($id);
    $query = $faculity->deleteFaculity();
    if ($query){
        $message="success";
        $status=$query;
    }
    else{
        $message="failed to delete";
        $status=$query;
    }
}
else{
    $message="specify the record to delete";
    $status=0;
}
$returnJs = array('status'=>$status,'message'=>$message);
echo json_encode($returnJs);