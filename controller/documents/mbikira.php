<?php
///**
// * Created by PhpStorm.
// * User: Hview
// * Date: 07/12/2018
// * Time: 11:25
// */
//
//else {
//    $student->setPassPort($passPort);
//    $student->setFirstName($firstName);
//    $student->setLastName($lastName);
//    $student->setNationality($nationality);
//    $student->setDateOfB($dateOfB);
//    $student->setPlaceOfB($placeOfB);
//    $student->setLocationOfBirth($locationOfBirth);
//    $student->setPpValid($ppValid);
//    $student->setNativeLang($nativeLang);
//    $student->setEmail($email);
//    $student->setWeChat($weChat);
//    $student->setChineseLevel($chineseLevel);
//    $student->setReligion($religion);
//    $student->setHobby($hobby);
//    $student->setProfile($profile);
//
//    //registration table
//
//    $student->setUniversity($university);
//    $student->setProgram($program);
//    $student->setFaculity($faculity);
//    $student->setPreferedLanguage($preferedLanguage);
//    $student->setStudentPlan($studentPlan);
//    $student->setStudFiles($filestarget);
//    /*$studFiles = $_FILES['studfiles']['name'];
//    $studFilestmp = $_FILES['studfiles']['tmp_name'];*/
//
//    //experiences
//
//    $student->setFrom($from);
//    $student->setTo($to);
//    $student->setSchool($school);//or company that he/she was working to
//    $student->setField($field);
//
//    //relationships
//
//    $student->setRelation($relation);
//    $student->setRelative($relative);
//    $student->setAges($ages);
//    $student->setRelativeEmail($relativeEmail);
//    $student->setPhoneNumber($phoneNumber);// = $_POST['relativephone'];
//    $student->setCompany($company);// = $_POST['company'];
//    $student->setOccupation($occupation);// = $_POST['occupation'];
//    $registrationNumber = $passPort.date("m").date("s");
//    /*/*
//* all the queries to the database senedind datas to the database
//     *
//*
//* */
//
//    $sqr = $student->verifypresenceOfPrimaryKey();
//    $result = mysqli_num_rows($sqr);
//    if($result > 0) {
//
//
//        $registrations = $student->verifyNumberOfApplication();
//        $countnumber = mysqli_num_rows($registrations);
//        if ($countnumber >= 3) {
//            echo "you have exceed your allowed registration";
//        } else {
//            //$registrationNumber
//            $regist = $student->registrate($registrationNumber);
//            if ($regist) {
//                echo "success! you can now track your application using " . " " . $registrationNumber;
//            } else{
//                echo "registration failed";
//            }
//        }
//    }
//    else{
//        $query = $student->recordStudent();
//        if ($query) {
//            //second query
//            $query1 = $student->registrate($registrationNumber);
//            if ($query1) {
//                //third query
//                $query2 = $student->recordSAcademicHistory();
//                if ($query2) {
//                    //fourth query
//                    $query3 = $student->studentRelationShip();
//                    if ($query3) {
//
//                        /*about the second academic history experiences or relations ships*/
//
////                                                if(!empty($occupationjob) && !empty($fromjob) && !empty($tojob) && !empty($companjob) && !empty($occupationjob)){
////                                                     echo "experiences zirahari".$registrationNumber;
////                                                     if (!empty($relation2) && !empty($relative2) && !empty($ages2) && !empty($relativeEmail2) && !empty($phoneNumber2) && !empty($company2) && !empty($occupation2)){
////                                                            echo "isano 2 ryabonetse";
////                                                     }
////                                                    else{
////                                                        echo "nta sano2";
////                                                    }
////                                                }else{
////                                                    echo "no experiences";
////                                                }
//
//
//
//                        //echo "success! you can now track your application ".$registrationNumber;
//                    } else {
//                        echo "error in relatioships ";
//                    }
//                } else {
//                    echo "error in querrying the academic and experiens";
//                }
//            } else {
//                echo "registration table is not being querried";
//            }
//        }
//
//        //may be the rest after absenceof the primary in student
//        else{
//            echo "problem in student's query";
//        }
//        //echo "byose biri neza";
//    }
//}
//?>
<!---->
<!---->
<!--if (!empty($passPort) && !empty($firstName) && !empty($lastName) && !empty($nationality) && !empty($dateOfB) && !empty($placeOfB) && !empty($locationOfBirth) && !empty($ppValid) && !empty($nativeLang) && !empty($email) && !empty($weChat) && !empty($chineseLevel) && !empty($religion) && !empty($hobby)){-->
<!---->
<!--    //registration information-->
<!--    if (!empty($university) && !empty($program) && !empty($faculity) && !empty($preferedLanguage) && !empty($studentPlan))-->
<!--    {-->
<!--        //ishuri-->
<!--        if (!empty($from) && !empty($to) && !empty($school) && !empty($field)) {-->
<!--    ///relationship2-->
<!--            if(!empty($relation2) && !empty($relative2) && !empty($ages2) && !empty($relativeEmail2) && !empty($phoneNumber2) && !empty($company2) && !empty($occupation2)){}-->
<!--        }-->
<!--            //relationship-->
<!--            else-->
<!--                {if (!empty($relation) && !empty($relative) && !empty($ages) && !empty($relativeEmail) && !empty($phoneNumber) && !empty($company) && !empty($occupation)) {-->
<!---->
<!--                    $imageExtension = pathinfo($profile, PATHINFO_EXTENSION);-->
<!--                    $allowedtype = array('PNG', 'jpg', 'jpeg', 'png', 'JPG', 'JPEG');-->
<!---->
<!--                    if (!in_array($imageExtension, $allowedtype)) {-->
<!--                        echo "this " . $imageExtension . " type is not supported";-->
<!--                    } else {-->
<!--                        $target = "uploads/" . basename($profile);-->
<!--                        $sendimage = move_uploaded_file($profiletmp, $target);-->
<!--                        if ($sendimage) {-->
<!--                            $filesExtension = pathinfo($studFiles, PATHINFO_EXTENSION);-->
<!--                            $filestype = array('zip','ZIP','rar');-->
<!--                            if(!in_array($filesExtension,$filestype)){-->
<!--                                echo "please Zip the documents in one folder, name it your familly name and try again";-->
<!--                            }-->
<!--                            else {-->
<!--                                $filestarget = "documents/".basename($studFiles);-->
<!--                                $sendfiles = move_uploaded_file($studFilestmp,$filestarget);-->
<!--                                if(!$sendfiles){-->
<!--                                    echo "failed to send the docs";-->
<!--                                }-->
<!--                                else {-->
<!--                                    echo "start querying";-->
<!--                                }-->
<!--                                //may be-->
<!--                            }-->
<!--                        }-->
<!--                        else {-->
<!--                            echo "failed to upload image";-->
<!---->
<!--                        }-->
<!--                    }-->
<!--                }}-->
<!--            }-->
<!--            else{-->
<!--                echo "relationships information are empty";-->
<!--            }-->
<!--        }-->
<!--        else{-->
<!--                echo "the experience info are empty";-->
<!--        }-->
<!--    }else{-->
<!--        echo "fill the registration info";-->
<!--    }-->
<!--}-->
<!--else{-->
<!--    echo "provide all personal informatios";-->
<!--}-->
