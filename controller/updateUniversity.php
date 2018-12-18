<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 12:12
 */
include '../include/university.php';
$university = new University();
$universityId = $_POST['universityId'];
$uniName = $_POST['name'];
$country = $_POST['country'];
$province = $_POST['province'];
$city = $_POST['city'];
$description = $_POST['short'];
$update = date("Y-m-d h:i:s");

if (!empty($universityId)){
    $university->setId($universityId);
    $university->setName($uniName);
    $university->setCountry($country);
    $university->setProvince($province);
    $university->setCity($city);
    $university->setDescription($description);

    $query = $university->updateUniversity($update);
    if ($query){
        $message = "success";
        $status=$query;
    }
    else{
        $message = "update failed";
        $status=$query;
    }
}
else{
    $message = "specify the data to update";
    $status=0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);

?>