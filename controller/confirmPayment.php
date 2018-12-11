<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 11/12/2018
 * Time: 09:40
 */
include '../include/student.php';
$student = new Student();
$regId = $_POST['studId'];
$query = $student->confirmPayment($regId);
if ($query){
    echo "success!";
}
else{
    echo "failed";
}

?>