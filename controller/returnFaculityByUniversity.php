
<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 12/12/2018
 * Time: 11:38
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


$query1 = $university->returnFaculityByUniversity($unId);
foreach ($query1 as $result){
    $progra[]=$result;
}
$program['university']=$row;
$program['faculity']=$progra;
$byose[]=$program;

$returnJs=array('status'=>1,'message'=>"success",'datas'=>$byose);

echo json_encode($returnJs);

?>