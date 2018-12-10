<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 14:14
 */
include '../include/event.php';
$event = new Event();

$name = $_POST['name'];
$descriptions= $_POST['description'];
$location= $_POST['location'];
$time= $_POST['time'];
$profile = $_FILES['profile']['name'];
$profiletmp = $_FILES['profile']['tmp_name'];


if(!empty($name ) && !empty($descriptions) && !empty($location) && !empty($time)){

    $imageExtension = pathinfo($profile, PATHINFO_EXTENSION);
    $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');

    if (!in_array($imageExtension, $allowedtype)) {
        echo "this " . $imageExtension . " type is not supported";
    } else {
        $target = "uploads/" . basename($profile);
        $sendimage = move_uploaded_file($profiletmp, $target);
        if ($sendimage){
            $event->setName($name);
        $event->setDescriptions($descriptions);
        $event->setLocation($location);
        $event->setTime($time);
        $event->setImage($profile);

            $query = $event->recordEvents();
            if ($query){
                echo "success";
            }
            else{
                echo "failed";
            }
        }
        else{
            echo "failed to upload an image";

        }

}
}
else{
    echo "no fileld is to left empty";
}


?>