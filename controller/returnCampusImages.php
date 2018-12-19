<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 19/12/2018
 * Time: 11:43
 */
include "../include/university.php";

$university = new University();
$accomods=array();
$query =$university ->fetchCampusImage();
$count = mysqli_num_rows($query);
if ($count) {

    $message = "success";
    $status = 1;

    foreach ($query as $rows) {
        $accomods[] = $rows;
    }
}
else{
    $message="no data";
    $status=$query;
    $accomods[]=0;
}
$returnJs=array('status'=>$status,'message'=>$message,'data'=>$accomods,'returned data'=>$count);
echo json_encode($returnJs);
