<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 30/11/2018
 * Time: 08:49
 */

include '../include/university.php';

$universities = new University();
$kaminuza = $universities->fetchUniversity();
$kaminuzas = array();

foreach ($kaminuza as $row){
    $kaminuzas[]=$row;
}
$returnJS = array('staus'=>"1",'message'=>"success",'data'=>$kaminuzas);
echo json_encode($returnJS);
?>