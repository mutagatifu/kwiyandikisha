<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 10:37
 */
include 'dbconnection.php';
class Program extends DbConnection
{
private $name;
private $duration;
//private $language;
//private $university;
private $startingDate;

    /**
     * @return mixed
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }
    /**
     * @param mixed $startingDate
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    /**
     * @return mixed
     */
    public function getUniversity()
    {
        return $this->university;
    }
    /**
     * @param mixed $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }
public function verifyProgram(){
        $query = $this->connection->query("select * from programs where names='$this->name' and startingDate='$this->startingDate' and duration='$this->duration'");
        return $query;
    }
public function recordProgram(){
        $query = $this->connection->query("INSERT INTO `programs`( `names`, `startingDate`, `duration`) VALUES 
                                          ('$this->name','$this->startingDate','$this->duration')");
        return $query;
}
/*fetch all programs*/
    public function returnPrograms(){
        $query = $this->connection->query("select * from programs where status!=99");
        return $query;
    }
public function returnProgramByUniversity($universityID){
        $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,universityfaculity.faculity,universityfaculity.language,
universityfaculity.price,faculity.name,faculity.program,programs.names from universityfaculity,faculity,programs 
where universityfaculity.faculity=faculity.id and faculity.program=programs.id and universityfaculity.university='$universityID' group by faculity.program;");
        return $query;
}
public function updateProgram($programId,$updateDate){
        $query = $this->connection->query("UPDATE `programs` SET `names`='$this->name',`startingDate`='$this->startingDate',
`duration`='$this->duration',`university`='$this->university',`language`='$this->language',`updatedDate`='$updateDate' WHERE id='$programId'");
        return $query;
}
public function deleteProgram($programId){
        $query = $this->connection->query("update programs set status=99 where id='$programId'");
        return $query;
}



}