<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 11/12/2018
 * Time: 19:57
 */

include '../include/university.php';
$university = new University();
$unId = $_POST['university'];

$univers = array();
$univ = array();
$progra = array();
$program = array();
$byose = array();

$query = $university->returnUniversity($unId);
$row=$query->fetch_object();
//$univers[]=$row->id;
$univers[] = $row;
$query1 = $university->universityProgram($unId);
foreach ($query1 as $result){
    $progra[]=$result;
}
$program[]=$row;
$program[]=$progra;
$byose[]=$program;
$returnJs=array('status'=>1,'message'=>"success",'data'=>$byose);

echo json_encode($returnJs);


?>