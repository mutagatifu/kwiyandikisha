<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/12/2018
 * Time: 10:28
 */
include '../include/university.php';
$universit = new University();

$unId = $_POST['university'];
$faculity = $_POST['faculity'];

if (!empty($unId) && !empty($faculity)){
    //echo "byse birahari";
    for($i=0;$i<sizeof($faculity);$i++){
        $facul=$faculity[$i];
        $query = $universit->recordUniversityfaculity($unId, $facul);
//        echo "ni ".$faculity[$i]."byose";
//        echo "university is: ".$unId;
    }
    echo "success";
}
else{
    echo "no field would be left empty";
}
?>