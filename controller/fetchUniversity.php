<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 15:12
 */
include '../include/university.php';

$university = new University();
$univers = array();
$byose = array();
$univs=array();
$query = $university->fetchUniversity();
$universities = array();
$faculities = array();
$progra = array();

while ($rows=$query->fetch_object()){
    $uniId=$rows->id;
    //$universities[]=$rows;
    $query1 = $university->returnProgramByUniversity($uniId);
    while($progs = $query1->fetch_object()) {
        $progId = $progs->program;
        $progra[] = $progs;
        //print_r($query1);
    $query2 = $university->returnFaculityByPrograms($progId);
    while($facl = $query2->fetch_object()){
        $faculities[]=$facl;
    }
        $univers['programs']=$progra;
        $univers['faculities']=$faculities;
        $byose[]=$univers;
    }

    echo json_encode($byose);
    $univs[]=$rows;
    $univs[]=$univers;
    //print_r($univs);
        //$univs['faculities']=$univers;

//    $univs['universities']=$rows;
//    $univs['programs']=$progra;
//        $univs['universities']=$rows;
//        $univs[]=$univers;
//       $byose[]=$univs;

}



//print_r($byose);


//echo json_encode($byose);
?>