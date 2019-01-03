<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/01/2019
 * Time: 08:59
 */
include "../include/program.php";
$program = new Program();
$programs = array();
$programId = $_POST['id'];

if (!empty($programId)){
    $program->setId($programId);
    $query = $program->fetchProgramById();
    $count = mysqli_num_rows($query);
    if ($count > 0){
        $message = "success";
        $status = 1;
        foreach ($query as $rows){
            $programs[]=$rows;
        }
    }
    else{
        $message = "no data returned";
        $status = 0;
        $programs[]=0;
    }
}
else{
    $message = "specify the program";
    $status = 0;
}
$returnJS=array('status'=>$status,'message'=>$message,'data'=>$programs);
echo json_encode($returnJS);