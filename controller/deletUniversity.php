<?php
include '../include/university.php';
$deletUni = new University();
$unId = $_POST['id'];

$query = $deletUni->deleteUniversity($unId);
if($query){
    echo "deleted successfully";
}
else{
    echo "byanze";
}


?>