<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 13/12/2018
 * Time: 15:05
 */

include '../include/student.php';
$students=new Student();
$search = $_POST['search'];

$query = $students->returnStudentBySearch($search);
$studs = array();
foreach ($query as $rows){
    $studs[]=$rows;
}
echo json_encode($studs);
?>