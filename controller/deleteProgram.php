<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 18/12/2018
 * Time: 15:25
 */

include '../include/program.php';
$program = new Program();
$id = $_POST['programId'];
if (!empty($id)){
    $program->setId($id);
    $query = $program->deleteProgram();
    if ($query){
        $message = "success";
        $status=$query;
    }
    else{
        $message = "failed";
        $status=$query;
    }
}
else{
    $message = "failed";
    $status=0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);
