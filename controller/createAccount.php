<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 13:28
 */
include '../include/accounts.php';

$account = new accounts();

$fullname = $_POST['fullName'];
$emails = $_POST['email'];
$phoneNumber = $_POST['phone'];
$password = $_POST['pass'];

if(!empty($fullname) && !empty($emails) && !empty($phoneNumber) && !empty($password)) {
    //echo "now you can ceate";
    $account->setFullNames($fullname);
    $account->setEmail($emails);
    $account->setPhoneNumber($phoneNumber);
    $account->setPassword($password);

    $check = $account->checkEmail();
    $count = mysqli_num_rows($check);
    if ($count > 0) {

 echo "this email have been already taken";
    }
    else{
    $query = $account->createAccount();
    if ($query) {
        echo "success";
    } else {
        echo "failed";
    }
}
}
else{
    echo "no field would be left empty";
}
?>