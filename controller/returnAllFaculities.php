<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 12/12/2018
 * Time: 09:39
 */
include '../include/faculity.php';

$facul = new Faculity();

$byose=array();
$kimwe=array();
$query = $facul->returnAllPrograms();
//$programs = $query->fetch_object();
while($programs = $query->fetch_object())
{
    $poropgas = array();
    $faculities = array();
//    $kimwe['progrs']=$programs;
    $progId=$programs->id;
    $query2=$facul->returnFaculityByProgramId( $progId);
    while($result = $query2->fetch_object()){
        $faculities[]=$result;
    }
    $poropgas['programsName']=$programs->names;
    $poropgas['startingIn']=$programs->startingDate;
    $poropgas['ForPeriod']=$programs->duration;
    $poropgas['faculities']=$faculities;
    $byose[]=$poropgas;
}
$returnJS=array('status'=>1,'message'=>"success",'data'=>$byose);
echo json_encode($returnJS);
?>