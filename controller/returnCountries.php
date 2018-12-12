<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 16:33
 */
include '../include/university.php';

$university = new University();
$query = $university->fetchCountries();
$countries = array();
foreach ($query as $row){
    $countries[]=$row;
}
//$returnJS = array('status'=>1,'message'=>"successfull",'data'=>$countries);
echo json_encode($countries);
?>