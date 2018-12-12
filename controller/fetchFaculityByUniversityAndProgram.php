<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 12/12/2018
 * Time: 16:27
 */
include '../include/university.php';
$univerfacul = new University();

$faculities = array();

$unId = $_POST['university'];

$progId = $_POST['program'];

$univerfacul->setUniversityId($unId);
$univerfacul->setProgramId($progId);
$query = $univerfacul->returnFaculityByUniversityAndProgram();


foreach ($query as $rows){
    $faculities[]=$rows;
}

echo json_encode($faculities);
//public function returnFaculityByUniversityAndProgram($unId,$progId)

?>