<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 18/12/2018
 * Time: 14:20
 */

include '../include/partners.php';
$partner=new partners();
$id= $_POST['id'];

if (!empty($id))
{
    $partner->setId($id);
    $query = $partner->deletePartners();
    if ($query){
        $status = 1;
        $message = "success";
    }
    else{
        $status = 0;
        $message = "failed";
    }
}
else{
    $status = 0;
    $message = "no id is provided";
}
$returnJS = array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);