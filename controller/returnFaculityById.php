<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/01/2019
 * Time: 08:38
 */
include "../include/faculity.php";

$faculit = new Faculity();

$faculityId=$_POST['id'];
$faculities = array();
if (!empty($faculityId)){
    $faculit->setId($faculityId);

    $query = $faculit->fetchFaculityById();
    $count = mysqli_num_rows($query);
    if ($count > 0){
        $message = "success";
        $status=1;
        foreach ($query as $rows){
            $faculities[]=$rows;
        }
    }
    else {
        $status = 0;
        $message="no data returned";
        $faculities[]=0;
        }
}
else{
    $status = 0;
    $message="specify the faculity";
}

$returnJs=array('status'=>$status,'message'=>$message,'data'=>$faculities);
echo json_encode($returnJs);