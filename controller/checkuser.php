<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 11:18
 */
include '../include/admin.php';

$login = new admin();

$usermail = $_POST['email'];
$pword = $_POST['password'];
$login->setEmails($usermail);
$login->setPassword($pword);

if(!empty($usermail) && !empty($pword)){
    $query = $login->checkLogin();
    $count = mysqli_num_rows($query);
    if ($count > 0){
        $user = $query->fetch_object();
      $_SESSION['user'] = $user->firstName;
      header('Location:');
        //echo $_SESSION['user'];
    }
    else{
        echo "username and password mismatch";
    }
}


?>