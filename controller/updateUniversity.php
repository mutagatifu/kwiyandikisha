<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 12:12
 */
include '../include/university.php';
$university = new University();
$universityId = $_POST['uniId'];
$uniName = $_POST['name'];
$country = $_POST['country'];
$province = $_POST['province'];
$city = $_POST['city'];
$description = $_POST['short'];
$logo = $_FILES['logo']['name'];
$logotmp = $_FILES['logo']['tmp_name'];
$updateDate = date("Y-m-d h:i:s");


$university->setName($uniName);
$university->setCountry($country);
$university->setProvince($province);
$university->setCity($city);
$university->setLogo($logo);
$university->setDescription($description);

$target = "uploads/" . basename($logo);
$sendimage = move_uploaded_file($logotmp, $target);
$query = $university->updateUniversity($universityId,$updateDate);
if ($query){
    echo "success!";
}
else{
    echo "failed";
}

?>