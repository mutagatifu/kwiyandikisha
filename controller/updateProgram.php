<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 16:10
 */

include '../include/program.php';
$program =new Program();
$programId=$_POST['programId'];
$name = $_POST['name'];
$duration = $_POST['duration'];
$startingDate = $_POST['starting'];
$update = date("Y-m-d h:i:s");
if (!empty($programId)){
    $program->setId($programId);
    $program->setName($name);
    $program->setDuration($duration);
    $program->setStartingDate($startingDate);

    $query = $program->updateProgram($update);
    if ($query) {
        $message="success";
        $status = $query;
    } else {
        $message="failed";
        $status = $query;
    }
}
else{
    $message="specify the data to update";
    $status =0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);

?>