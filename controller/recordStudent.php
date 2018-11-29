<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 29/11/2018
 * Time: 08:15
 */
include '../include/student.php';
$student = new Student();
$passPort = $_POST['passport'];
$firstName = $_POST['fname'];
$lastName  = $_POST['lname'];
$nationality = $_POST['nationality'];
$dateOfB = $_POST['birthdate'];
$placeOfB = $_POST['placeofBirth'];
$locationOfBirth = $_POST['locatOfBirth'];
$ppValid = $_POST['passportvalid'];
$nativeLang = $_POST['nativelanguage'];
$email = $_POST['studentemail'];
$weChat = $_POST['wechatnumber'];
$chineseLevel = $_POST['chineselevel'];
$religion = $_POST['religion'];
$hobby = $_POST['hobby'];
$profile =$_FILES['profile']['name'];
$profiletmp = $_FILES['profile']['tmp_name'];
//registration table
$university = $_POST['university'];
$program = $_POST['program'];
$faculity = $_POST['faculity'];
$preferedLanguage = $_POST['preflanguage'];
$studentPlan = $_POST['studeplan'];
//experiences
$from = $_POST['from'];
$to = $_POST['to'];
$school = $_POST['school'];//or company that he/she was working to
$field = $_POST['field'];
//relationships
$relation = $_POST['isano'];
$relative = $_POST['relative'];
$ages = $_POST['age'];
$relativeEmail = $_POST['relativemail'];
$phoneNumber = $_POST['relativephone'];
$company = $_POST['company'];
$occupation = $_POST['occupation'];
//validate the personal info
if (!empty($passPort) && !empty($firstName) && !empty($lastName) && !empty($nationality) && !empty($dateOfB) && !empty($placeOfB) && !empty($locationOfBirth) && !empty($ppValid) && !empty($nativeLang) && !empty($email) && !empty($weChat) && !empty($chineseLevel) && !empty($religion) && !empty($hobby)){
    //registration information
    if (!empty($university) && !empty($program) && !empty($faculity) && !empty($preferedLanguage) && !empty($studentPlan))
    {
        //experiences
        if (!empty($from) && !empty($to) && !empty($school) && !empty($field)){
            //relationship
            if (!empty($relation) && !empty($relative) && !empty($ages) && !empty($relativeEmail) && !empty($phoneNumber) && !empty($company) && !empty($occupation)) {
                /*
                 * all the queries to the database senedind datas to the database
                 *
                 * */
                $imageExtension = pathinfo($profile, PATHINFO_EXTENSION);
                $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');

                if (!in_array($imageExtension, $allowedtype)) {
                    echo "this " . $imageExtension . " type is not supported";
                } else {
                    $target = "uploads/" . basename($profile);
                    $sendimage = move_uploaded_file($profiletmp, $target);
                    if (!$sendimage) {
                        echo "failed to upload";
                    } else {
                        echo "bimz neza";

                    }
                }
            }
            else{
                echo "relationships information are empty";
            }
        }
        else{
                echo "the experience info are empty";
        }
    }else{
        echo "fill the registration info";
    }
}
else{
    echo "provide all personal informatios";
}
?>