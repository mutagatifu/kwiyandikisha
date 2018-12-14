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
$gender = $_POST['gender'];
$studentPhoneNumber=$_POST['studentphonenumber'];
$adviser = $_POST['advisernumber'];
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
$visaNumber = $_POST['visanumber'];
$validVisa = $_POST['validvisa'];
if (empty($visaNumber)){
    $visaNumbers = "none";
}
else{
    $visaNumbers=$visaNumber;
}
if (empty($validVisa)){
    $validVisas = "none";
}
else{
    $validVisas=$validVisa;
}
$highDegree = $_POST['highdegree'];
$score = $_POST['scorenumber'];
$studentPlan = $_POST['studeplan'];
$studFiles = $_FILES['studfiles']['name'];
$studFilestmp = $_FILES['studfiles']['tmp_name'];
$studFileSize = $_FILES['studfiles']['size'];
    //getimagesize($studFilestmp);
    //$_FILES['studfiles']['size'];
//academic history
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
//experiences
$fromjob = $_POST['fromjob'];
$tojob = $_POST['tojob'];
$companjob = $_POST['companyjob'];//or company that he/she was working to
$occupationjob = $_POST['occupationjob'];
//academic history2
$from2 = $_POST['from2'];
$to2 = $_POST['to2'];
$school2 = $_POST['school2'];//or company that he/she was working to
$field2 = $_POST['field2'];
//relationships2
$relation2 = $_POST['isano2'];
$relative2 = $_POST['relative2'];
$ages2 = $_POST['age2'];
$relativeEmail2 = $_POST['relativemail2'];
$phoneNumber2 = $_POST['relativephone2'];
$company2 = $_POST['company2'];
$occupation2 = $_POST['occupation2'];



//validate the personal info
if (!empty($passPort) && !empty($firstName) && !empty($lastName) && !empty($nationality) && !empty($dateOfB) && !empty($placeOfB) && !empty($locationOfBirth) && !empty($ppValid) &&
    !empty($nativeLang) && !empty($email) && !empty($weChat) && !empty($chineseLevel) && !empty($religion) && !empty($hobby) && !empty($gender) && !empty($adviser) && !empty($studentPhoneNumber)){
    //echo " personal info are available";
    if (!empty($university) && !empty($program) && !empty($faculity) && !empty($preferedLanguage) && !empty($studentPlan) && !empty($highDegree) && !empty($score)){
        //echo "registration info are available";
        if (!empty($from) && !empty($to) && !empty($school) && !empty($field)){
            //echo "academic info 1 are avalable";
            if (!empty($relation) && !empty($relative) && !empty($ages) && !empty($relativeEmail) && !empty($phoneNumber) && !empty($company) && !empty($occupation)){
                //echo "relation 1 is present";
                if(!empty($relation2) && !empty($relative2) && !empty($ages2) && !empty($relativeEmail2) && !empty($phoneNumber2) && !empty($company2) && !empty($occupation2)) {
                    //echo "relation 2 is present";
                    //
                    $imageExtension = pathinfo($profile, PATHINFO_EXTENSION);
                    $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');

                    if (!in_array($imageExtension, $allowedtype)) {
                        echo "this " . $imageExtension . " type is not supported";
                    } else {
                        $target = "uploads/" . basename($profile);
                        $sendimage = move_uploaded_file($profiletmp, $target);
                        if ($sendimage) {
                            $filesExtension = pathinfo($studFiles, PATHINFO_EXTENSION);
                            $filestype = array('zip', 'ZIP', 'rar');
                            if (!in_array($filesExtension, $filestype)) {
                                echo "please Zip the documents in one folder not exceeding 2M, name it your familly name and try again";
                            }
                            else {
                                $filestarget = "documents/" . basename($studFiles);
                                $sendfiles = move_uploaded_file($studFilestmp, $filestarget);
                                if (!$sendfiles) {
                                    //else if ()
                                    echo "your fdocuments exceeds 2M";
                                } else {
                                    //echo "documents in size".$studFileSize;
                                    echo "start querying";
                                    $student->setPassPort($passPort);
                                    $student->setFirstName($firstName);
                                    $student->setLastName($lastName);
                                    $student->setAdviserNumber($adviser);
                                    $student->setGender($gender);
                                    $student->setStudentPhoneNumber($studentPhoneNumber);
                                    $student->setNationality($nationality);
                                    $student->setDateOfB($dateOfB);
                                    $student->setPlaceOfB($placeOfB);
                                    $student->setLocationOfBirth($locationOfBirth);
                                    $student->setPpValid($ppValid);
                                    $student->setNativeLang($nativeLang);
                                    $student->setEmail($email);
                                    $student->setWeChat($weChat);
                                    $student->setChineseLevel($chineseLevel);
                                    $student->setReligion($religion);
                                    $student->setHobby($hobby);
                                    $student->setProfile($profile);

                                    //registration table

                                    $student->setUniversity($university);
                                    $student->setProgram($program);
                                    $student->setFaculity($faculity);
                                    $student->setPreferedLanguage($preferedLanguage);
                                    $student->setVisaNumber($visaNumbers);
                                    $student->setValidVisa($validVisas);
                                    $student->setHighDegree($highDegree);
                                    $student->setScore($score);
                                    $student->setStudentPlan($studentPlan);
                                    $student->setStudFiles($filestarget);
                                    /*$studFiles = $_FILES['studfiles']['name'];
                                    $studFilestmp = $_FILES['studfiles']['tmp_name'];*/

                                    //experiences

                                    $student->setFrom($from);
                                    $student->setTo($to);
                                    $student->setSchool($school);//or company that he/she was working to
                                    $student->setField($field);

                                    //relationships

                                    $student->setRelation($relation);
                                    $student->setRelative($relative);
                                    $student->setAges($ages);
                                    $student->setRelativeEmail($relativeEmail);
                                    $student->setPhoneNumber($phoneNumber);// = $_POST['relativephone'];
                                    $student->setCompany($company);// = $_POST['company'];
                                    $student->setOccupation($occupation);// = $_POST['occupation'];

                                    //relationship2

                                    $student->setRelation2($relation2);
                                    $student->setRelative2($relative2);
                                    $student->setAges2($ages2);
                                    $student->setRelativeEmail2($relativeEmail2);
                                    $student->setPhoneNumber2($phoneNumber2);
                                    $student->setCompany2($company2);
                                    $student->setOccupation2($occupation2);


                                    $registrationNumber = $passPort.date("m").date("s");
                                    $sqr = $student->verifypresenceOfPrimaryKey();
                                    $result = mysqli_num_rows($sqr);
                                    if($result > 0) {


                                        $registrations = $student->verifyNumberOfApplication();
                                        $countnumber = mysqli_num_rows($registrations);
                                        if ($countnumber >= 3) {
                                            echo "you have exceed your allowed registration";
                                        } else {
                                            //$registrationNumber
                                            $regist = $student->registrate($registrationNumber);
                                            if ($regist) {
                                                echo "success! you can now track your application using2 ". $regist. " " . $registrationNumber;
                                            }
                                            else{
                                                echo "registration failed".$regist;
                                            }
                                        }
                                    }
                                    else {
                                        $query = $student->recordStudent();
                                        if ($query) {
                                            //second query
                                            //echo "register student";
                                            $query1 = $student->registrate($registrationNumber);
                                            if ($query1) {
                                                //echo "student registration";
                                                //third query
                                                $query2 = $student->recordSAcademicHistory();
                                                if ($query2) {
                                                    //echo "academic record";
                                                    //fourth query
                                                    $query3 = $student->studentRelationShip();
                                                    if ($query3) {
                                                        //echo "relation1 ";
                                                        $query4 =$student->studentRelationShip2();
                                                        if($query4){
                                                            echo "success! you can now track your application using " . " " . $registrationNumber;
                                                            if (!empty($occupationjob) && !empty($fromjob) && !empty($tojob) && !empty($companjob) && !empty($occupationjob)){
                                                                $student->setOccupationjob($occupationjob);
                                                                $student->setFromjob($fromjob);
                                                                $student->setTojob($tojob);
                                                                $student->setCompanyjob($companjob);
                                                                $student->setOccupationjob($occupationjob);

                                                                $query5 = $student->recordExperince();
                                                                if ($query5){
                                                                    echo "success job registerd";
                                                                }
                                                                else{
                                                                    //echo "failed".$query5;
                                                                }
                                                            }
                                                            if(!empty($from2) && !empty($to2) && !empty($field2) && !empty($school2)){
                                                                $student->setFrom2($from2);
                                                                $student->setTo2($to2);
                                                                $student->setField2($field2);
                                                                $student->setSchool2($school2);
                                                                $query6 = $student->recordSAcademicHistory2();
                                                                if ($query6){
                                                                    //echo "success academic 2";
                                                                }
                                                                else{
                                                                    echo "failed academic 2".$query6;
                                                                }

                                                            }
                                                        }
                                                        else{
                                                            echo "registration failed at relation2";
                                                        }


                                                    }
                                                    else{
                                                        echo "problem in relation 1 ";
                                                    }
                                                }
                                                else{
                                                    echo "problem in academic history";
                                                }

                                                //
                                            }
                                            else{
                                                echo "problem in registration";
                                            }
                                        }
                                        else{
                                            echo "problem with query if registering the student info";
                                        }
                                    }

                                }

                            }


                        }


                        else {
                            echo "failed to upload an image";
                        }
                    }
                }
                else{
                    echo "no relation 2";
                }
            }

            else{
                echo "no relation 1";
            }
        }
        else{
            echo "no academic history";
        }
    }else{
        echo "registration info are empty";
    }

}
else{
    echo "please provide the personnal info";
}
?>