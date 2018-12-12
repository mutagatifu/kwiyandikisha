<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 12/12/2018
 * Time: 09:39
 */

include '../include/faculity.php';

$facul = new Faculity();

$query = $facul->returnFaculities();
$falulities = array();

foreach ($query as $rows){
    $falulities[]=$rows;
}

echo json_encode($falulities);
?>