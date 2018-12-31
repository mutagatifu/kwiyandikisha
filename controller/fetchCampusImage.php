<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 20/12/2018
 * Time: 12:16
 */


include "../include/university.php";

$university = new University();

$universityId=$_POST['university'];
$accomods=array();
if (!empty($universityId)){
    $university->setId($universityId);
    $query =$university ->fetchCampusImageByUniversity();
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
}
else{
    $message="fill in university";
    $status=0;
}
$returnJs=array('status'=>$status,'message'=>$message,'data'=>$accomods,'returned data'=>$count);
echo json_encode($returnJs);