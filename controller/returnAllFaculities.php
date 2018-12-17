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
$query = $facul->returnAllPrograms();
//$programs = $query->fetch_object();
while($programs = $query->fetch_object())
{
    $faculities = array();
    $poropgas = array();
    $progId=$programs->id;
    $query2=$facul->returnFaculityByProgramId( $progId);
    while($result = $query2->fetch_object()){
        $faculities[]=$result;
    }
    $poropgas['programs']=$programs;
    $poropgas['faculities']=$faculities;
    $byose[]=$poropgas;

}
echo json_encode($byose);
?>