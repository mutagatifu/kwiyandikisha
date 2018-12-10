<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 13:19
 */
include 'dbconnection.php';
class accounts extends DbConnection
{
    private $fullNames;
    private $email;
    private $phoneNumber;
    private $password;

    /**
     * @return mixed
     */
    public function getFullNames()
    {
        return $this->fullNames;
    }

    /**
     * @param mixed $fullNames
     */
    public function setFullNames($fullNames)
    {
        $this->fullNames = $fullNames;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function createAccount(){
        $query = $this->connection->query("INSERT INTO `users`(`fullName`, `email`, `password`, `phoneNumber`) 
VALUES ('$this->fullNames','$this->email','$this->password','$this->phoneNumber')");
        return $query;
    }
    public function checkEmail(){
        $query = $this->connection->query("select * from users where email = '$this->email'");
        return $query;
    }
    public function studentLogin(){
        $query = $this->connection->query("select * from users where email = '$this->email' and password = '$this->password'");
        return $query;
    }
}