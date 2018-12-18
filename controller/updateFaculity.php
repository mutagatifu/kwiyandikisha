<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 18/12/2018
 * Time: 14:35
 */
include '../include/faculity.php';
$faculity = new Faculity();
$id=$_POST['id'];
$name = $_POST['faculity'];
$programs = $_POST['program'];
$update =date("Y-m-d h:i:s");

if (!empty($id)){
    $faculity->setId($id);
    $faculity->setName($name);
    $faculity->setProgram($programs);

    $query = $faculity->updateFaculity($update);
    if ($query){
        $message = "success";
        $status = 1;
    }
    else{
        $message = "failed to update";
        $status = 0;
    }
}
else{
    $message = "specify the record to update";
    $status = 0;
}
$returnJS = array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);