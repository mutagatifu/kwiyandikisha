<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 30/11/2018
 * Time: 11:17
 */
include '../include/program.php';

$porogaramu = new Program();

$query = $porogaramu->returnPrograms();

$progr = array();

foreach ($query as $row){
    $progr[]=$row;
}

echo json_encode($progr);


?>