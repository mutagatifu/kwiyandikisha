<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 11/12/2018
 * Time: 09:36
 */
include '../include/student.php';
$student = new Student();
$query = $student->returnStudentsWithPayments();
$students = array();
foreach ($query as $rows){
    $students[]=$rows;
}
echo json_encode($students);
?>