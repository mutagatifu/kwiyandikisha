<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 14/12/2018
 * Time: 08:32
 */
include '../include/university.php';
$requirement = new University();

$ids = $_POST['id'];
if(!empty($ids)){
    $query = $requirement->returnRegistrationData($ids);
    $requirements = array();
    foreach ($query as $rows){
        $requirements[]=$rows;
    }

    echo json_encode($requirements);
}
else{
    echo "no data provided";
}

?>