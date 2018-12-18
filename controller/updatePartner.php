<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 18/12/2018
 * Time: 12:33
 */

include "../include/partners.php";
$partner = new partners();

$name=$_POST['name'];
$id=$_POST['id'];
$image = $_FILES['profile']['name'];
$imagetmp = $_FILES['profile']['tmp_name'];
$update = date("Y-m-d h:i:s");

if (!empty($id)){
    $message = "proceed";
    $status=1;

     $imageExtension = pathinfo($image, PATHINFO_EXTENSION);
    $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');

    if (!in_array($imageExtension, $allowedtype)) {
        echo "this " . $imageExtension . " type is not supported";
    }
    else {
        $target = "uploads/" . basename($image);
        $sendimage = move_uploaded_file($imagetmp, $target);
        if (!$sendimage) {
            $message = "image not uploaded";
            $status=0;
        }

        else{
            $partner->setId($id);
            $partner->setName($name);
            $partner->setImage($image);
            $query = $partner->updatePartners($update);
            if ($query){
                $message = "proceed".$query;
                $status=1;
            }
            else{
                $message = "failed to update".$query;
                $status=0;
            }

        }

}

}
else{
    $message = "success";
    $status=1;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);