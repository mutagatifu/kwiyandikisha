<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 16:06
 */

include '../include/faculity.php';

$faculity = new Faculity();

$name = $_POST['name'];
$program = $_POST['program'];
$fees = $_POST['fee'];
$language = $_POST['language'];

if (!empty($name) && !empty($program) && !empty($fees) && !empty($language)){


    $faculity->setName($name);
    $faculity->setProgram($program);
    $faculity->setFees($fees);
    $faculity->setLanguage($language);
    $query = $faculity->recordFaculity();
    if($query){
        echo "success";
    }
    else{
        echo "failed";
    }
}
else{
    echo "no field would be left empty";

}
?>