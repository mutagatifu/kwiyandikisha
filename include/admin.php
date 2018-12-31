<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 10/12/2018
 * Time: 11:10
 */
include 'dbconnection.php';
class admin extends DbConnection
{
private $fname;
private $lname;
private $emails;
private $password;

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param mixed $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
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

public function recordAdmins(){
    $query=$this->connection->query("INSERT INTO `admin`(`firstName`, `lastName`, `email`, `password`) 
                                    VALUES ('$this->fname','$this->lname','$this->emails','$this->password')");
    return $query;
}
public function checkLogin(){
        $query = $this->connection->query("select * from admin where email='$this->emails' and password='$this->password'");
        return $query;
}
public function checkmails(){
    $query = $this->connection->query("select * from admin where email='$this->emails'");
    return $query;
}
public function resetPassword(){
    $query=$this->connection->query("update admin set password='$this->password' where email='$this->emails'");
    return $query;
}

}