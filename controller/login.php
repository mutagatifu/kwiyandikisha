<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 14:12
 */
include '../include/accounts.php';
$login = new accounts();
$usermail = $_POST['email'];
$pword = $_POST['password'];
$regId=$_POST['myid'];
$login->setEmail($usermail);
$login->setPassword($pword);

if(!empty($usermail) && !empty($pword)){
    $query = $login->studentLogin();
    $count = mysqli_num_rows($query);
    if ($count > 0){
        $user = $query->fetch_object();
//      $_SESSION['user'] = $user->fullName;
      $_SESSION['email'] = $user->email;
      $_SESSION['requirements']=$regId;
      header('Location:');
      $_SESSION['user']." and ".$_SESSION['email'];
    }
    else{
        echo "username and password mismatch";
    }
}
?>
