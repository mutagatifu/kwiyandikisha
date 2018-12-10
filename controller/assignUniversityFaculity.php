<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 08:13
 */
include '../include/university.php';

$university = new University();
$universityId = $_POST['university'];
$program = $_POST['program'];
$faculity = $_POST['faculity'];
$language = $_POST['language'];
$price = $_POST['price'];

if (!empty($universityId) && !empty($program) && !empty($faculity) && !empty($language) && !empty($price)){


    $university->setFaculity($faculity);
    $university ->setProgram($program);
    $university->setLanguage($language);
    $university->setPrice($price);

    $query = $university->recordUniversityFaculity($universityId);
    if($query){
        echo "success";
    }
    else{
        echo "failed";
    }
}


?>