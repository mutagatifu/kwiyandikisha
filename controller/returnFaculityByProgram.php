<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 30/11/2018
 * Time: 12:10
 */
 include '../include/faculity.php';
$faculities = new Faculity();
$programId = $_POST['program'];
$query = $faculities->returnFaculityByProgramId($programId);
$faculi = array();

$count = mysqli_num_rows($query);
if ($count > 0){
    $status = 1;
    $message = "success";
    foreach ($query as $row){
        $faculi[]=$row;
    }
}
else{
    $status = 0;
    $message = "no data";
    $faculi[]=0;
}
$returnJS = array('status'=>$status,'message'=>$message,'data'=>$faculi);
echo json_encode($returnJS);
?>