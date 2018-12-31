<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 20/12/2018
 * Time: 14:45
 */
include '../include/university.php';
$university = new University();
$universityId=$_POST['university'];
$universitys = array();
if (!empty($universityId)){
    $university->setId($universityId);
    $query = $university->returnUniversity();
    $count = mysqli_num_rows($query);
    if ($count){
        $message="success";
        $status=1;
        foreach ($query as $rows){
            $universitys[]=$rows;
        }
    }
    else{
        $message="failed";
        $status=0;
        $universitys[]=0;
    }

}
else{
    $message="no field is to be left empty";
    $status = 0;
}
echo json_encode($universitys);
