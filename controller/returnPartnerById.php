<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/01/2019
 * Time: 09:09
 */
include "../include/partners.php";

$partner = new partners();
$partnerId = $_POST['id'];
$partners = array();

if (!empty($partnerId)){
    $partner->setId($partnerId);
    $query = $partner->returnPartnerById();
    $count = mysqli_num_rows($query);
    if ($count > 0){
        $message = "success";
        $status = 1;
        foreach ($query as $rows){
            $partners[]=$rows;
        }
    }
    else{
        $message = "no data returned";
        $status = 0;
        $partners[]=0;
    }
}
else{
    $message = "spaecify the partner to edit";
    $status = 0;
}
$returnJS=array('status'=>$status,'message'=>$message,'data'=>$partners);
echo json_encode($returnJS);