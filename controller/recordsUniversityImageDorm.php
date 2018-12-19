<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 19/12/2018
 * Time: 09:16
 */
include '../include/university.php';
$university = new University();
$universityId = $_POST['universityId'];


if (!empty($_FILES['image']['name']) && !empty($universityId)){

//    $dormImgExt = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');

    for ($i = 0; $i < count($_FILES['image']['name']); $i++)
    {
        $dormImgExt = pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);
        if (!in_array($dormImgExt,$allowedtype)){
            $message="please insert the valid images".$dormImgExt;
            $status = 0;
        }
        else{
            $target = "uploads/" . basename($_FILES['image']['name'][$i]);
            move_uploaded_file($_FILES['image']['tmp_name'][$i], $target);
            $university->setUniversityImages($_FILES['image']['name'][$i]);
            $university->setId($universityId);
            $university->recordUniversityImage();
            $message = "success".$_FILES['image']['name'][$i];
            $status = 1;
        }
        $message = "success".$_FILES['image']['name'][$i];
        $status = 1;

    }
}
else{
    $message="no field has to be empty";
    $status = 0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);