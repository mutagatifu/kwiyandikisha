<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 14/12/2018
 * Time: 13:28
 */

include '../include/accounts.php';
$studaccount = new accounts();
$fullNames = $_POST['fullname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phonenumber'];
$password = $_POST['password'];



if (!empty($fullNames) && !empty($email) && !empty($phoneNumber) && !empty($password)){
    //echo "present";
    $verify = $studaccount->checkEmail();
    $checkmails = mysqli_num_rows($verify);
    if ($checkmails > 0){
        $message="try another password";
        $status=0;
        $data=$checkmails;
        $returnJS = array('status'=>$status,'message'=>$message,'data'=>$data);
        echo json_encode($returnJS);
    }
    else{
        $query = $studaccount->createAccount();
        if($query) {
            $message = "success";
            $status = 1;
            $data = $query;
            $returnJS = array('status' => $status, 'message' => $message, 'data' => $data);
            echo json_encode($returnJS);
        }
        else{
            $message = "failed";
            $status = 0;
            $data = $query;
            $returnJS = array('status' => $status, 'message' => $message, 'data' => $data);
            echo json_encode($returnJS);
        }

    }
}
else{
    echo "ntabihari";
}

?>