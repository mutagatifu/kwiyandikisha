<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/12/2018
 * Time: 10:45
 */
include '../include/faculity.php';
$faculit = new Faculity();

$unId = $_POST['university'];
$faculities = array();
if (!empty($unId)){
    //echo $unId;
    $query = $faculit->returnFaculityNotOnUniversity($unId);

    foreach ($query as $rows){
    $faculities[]=$rows;
    }
    echo json_encode($faculities);
}
else{
    echo "no university is provided";
}
?>