<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 14:32
 */

include '../include/university.php';

$university = new University();

$name = $_POST['name'];
$country = $_POST['country'];
$province = $_POST['province'];
$city = $_POST['city'];
$description = $_POST['shortDescription'];
$faculity = $_POST['faculity'];
$logo =$_FILES['profile']['name'];
$logotmp = $_FILES['profile']['tmp_name'];

if (!empty($name) && !empty($country) && !empty($province) && !empty($city) && !empty($description)){

    $imageExtension = pathinfo($logo, PATHINFO_EXTENSION);
    $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');

    if (!in_array($imageExtension, $allowedtype)) {
        echo "this " . $imageExtension . " type is not supported";
    }
    else {
        $target = "uploads/" . basename($logo);
        $sendimage = move_uploaded_file($logotmp, $target);
        if (!$sendimage) {
            echo "failed to upload";
        }
        else{
            $university->setName($name);
            $university->setCountry($country);
            $university->setProvince($province);
            $university->setCity($city);
            $university->setLogo($logo);
            $university->setDescription($description);

            $query = $university->verifyUniversity();

            if (mysqli_num_rows($query) > 0) {
                    echo "this university seems to be already in";
            }
            else{
                $query1 = $university->recordUniversity();
                if ($query1) {
                    $maxuni = $university->returnMaxUniversityId();
                        if ($maxuni){
                    $univer = $maxuni->fetch_object();
                    $ids = $univer->id;

                    for ($i = 0; $i < sizeof($faculity); $i++) {
                        $facul = $faculity[$i];
                        //echo $facul." ".$ids."<br/>";
                        $query2 = $university->recordUniversityfaculity($ids, $facul);
                    }
                    echo "success";

                }
                else{
                    echo "didn't bring maximum id";
                }
                } else {
                    echo "problem in query";
                }
            }
        }
    }
}
else{
    echo "no field would be left empty";
}
?>