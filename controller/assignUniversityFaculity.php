<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 08:13
 */
include '../include/university.php';

$university = new University();
$faculityId = $_POST['faculitId'];
$language = $_POST['language'];
$price = $_POST['price'];

if (!empty($faculityId) && !empty($language) && !empty($price)){

    $university->setLanguage($language);
    $university->setPrice($price);

    $query = $university->updateFaculityOnUniversity($faculityId);
    if($query){
    $returnJS=array('status'=>$query,'message'=>"success",'data'=>1);
        echo json_encode($returnJS);
            //"success".$query;
    }
    else{
        //$returnJS=array('status'=>$query,'message'=>"failed",'data'=>0);
        echo "failed";

    }
}
else{
    echo "no field would be left empty";
}
?>