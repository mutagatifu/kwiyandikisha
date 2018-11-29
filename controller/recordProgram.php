<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 16:10
 */

include '../include/program.php';
$program =new Program();

$name = $_POST['name'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$university = $_POST['university'];
$startingDate = $_POST['starting'];

if (!empty($name) && !empty($duration) && !empty($language) && !empty($university) && !empty($startingDate)) {


    $program->setName($name);
    $program->setDuration($duration);
    $program->setLanguage($language);
    $program->setUniversity($university);
    $program->setStartingDate($startingDate);
    $query1 = $program->verifyProgram();

    if (mysqli_num_rows($query1) > 0) {
        echo "this program is alredy registerd";
    }
    else{
//        echo "ni amahoro";
        $query = $program->recordProgram();
    if ($query) {
        echo "success";
    } else {
        echo "failed";
    }
}
}
else{

    echo "no field would be left empty";
}
?>