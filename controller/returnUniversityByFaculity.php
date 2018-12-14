<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/12/2018
 * Time: 17:03
 */

include '../include/university.php';
$univ = new University();
$faculity = $_POST['faculity'];
$universities=array();
$query = $univ->returnUniversityByFaculity($faculity);

foreach ($query as $rows){
    $universities[]=$rows;
}
echo json_encode($universities);
?>