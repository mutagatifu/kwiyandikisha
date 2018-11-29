<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 16:10
 */

include '../include/program.php';
$program =new Program();
$programId=$_POST['programId'];
$name = $_POST['name'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$university = $_POST['university'];
$startingDate = $_POST['starting'];

$updateTime = date("Y-m-d h:i:s");
    $program->setName($name);
    $program->setDuration($duration);
    $program->setLanguage($language);
    $program->setUniversity($university);
    $program->setStartingDate($startingDate);

//        echo "ni amahoro";
        $query = $program->updateProgram($programId,$updateTime);
        if ($query) {
            echo "success";
        } else {
            echo "failed";
        }

?>