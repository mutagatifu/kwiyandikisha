<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 15:12
 */
include '../include/university.php';
$university = new University();
$byose = array();
$univers = array();
$query = $university->fetchUniversity();
$universities = array();
$faculities = array();
while ($rows=$query->fetch_object()){
    $progra = array();
    $univs=array();
    $uniId=$rows->id;
    $query1 = $university->returnProgramByUniversity($uniId);
    while($progs = $query1->fetch_object()) {
        $progra[]=$progs;
    }
    $univs['universities']=$rows;
    $univs['programs']=$progra;
    $univers[]=$univs;
}
echo json_encode($univers);
?>