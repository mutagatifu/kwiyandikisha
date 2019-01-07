<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/01/2019
 * Time: 11:05
 */
include '../include/university.php';
$university = new University();
$universities = array();
$query = $university->returnGroupedStudentsByUniversity();
$count = mysqli_num_rows($query);
if ($count > 0){
    $message="success";
    $status=1;
    foreach ($query as $rows){
        $universities[]=$rows;
    }
}
else{
    $message="no data returned";
    $status=0;
    $universities[]=0;
}
$returnJS=array('status'=>$status,'message'=>$message,'data'=>$universities);
echo json_encode($returnJS);