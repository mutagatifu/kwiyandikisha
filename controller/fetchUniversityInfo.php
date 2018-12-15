<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 15/12/2018
 * Time: 14:05
 */

include '../include/university.php';
$univ = new University();

$universities=array();

$byose = array();

$byombi=array();
$progra=array();

$universit=array();

$unId = $_POST['university'];

$query = $univ->returnUniversity($unId);
//while() {
    if($resul = $query->fetch_object()){
   // ;
//print_r($resul);
//$universities[]=$resul;
    $programs = array();
    $unID = $resul->id;

    $query2 = $univ->returnProgramsByUniversity($unId);

    while ($rows = $query2->fetch_object()) {
        $progra = array();
        $faculities=array();
        //$programs[]=$rows;
//    $programs[]=$rows->names;
//    $programs[]=$rows->startingDate;
//    $programs[]=$rows->duration;
//    $progra[]=$programs;
        $proId = $rows->program;
        $query3 = $univ->returnUniversityInfo($unID, $proId);
      while ($result = $query3->fetch_object()) {
            $faculities[] = $result;
       }

//
        $progra['programName'] = $rows->names;
        $progra['programStarting'] = $rows->startingDate;
        $progra['programDuration'] = $rows->duration;
        $progra['faculity'] = $faculities;
////    $byombi['programs']=$progra;
////    $progra[]=$programs;
////    $byombi[]=$faculities;
       $byombi[] = $progra;
    }

    $byose['university'] = $resul;
    $byose['programms'] = $byombi;
    $universit[]=$byose;

}
//$universities[] = $byose;
echo json_encode($universit);
