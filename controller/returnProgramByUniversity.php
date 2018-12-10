<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 30/11/2018
 * Time: 09:01
 */
include '../include/program.php';

$programs = new Program();
$universityID = $_POST['university'];
$query = $programs->returnProgramByUniversity($universityID);
$numprograms = mysqli_num_rows($query);
$programms = array();
if ($numprograms > 0){
    foreach ($query as $row){
        $programms[]=$row;
    }
    $status=1;
    $message="success";
}
else{
    $status = 0;
    $message = "no dadas";
    $programms[]=0;
}
$returnJS = array('status'=>$status,'message'=>$message,'data'=>$programms);
echo json_encode($returnJS);


?>