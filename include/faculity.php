<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 10:38
 */
include '../include/dbconnection.php';
class Faculity extends DbConnection
{
    private $id;
    private $name;
    private $program;
    private $fees;
    private $language;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getProgram()
    {
        return $this->program;
    }
    /**
     * @param mixed $program
     */
    public function setProgram($program)
    {
        $this->program = $program;
    }
    /**
     * @return mixed
     */
    public function getFees()
    {
        return $this->fees;
    }
    /**
     * @param mixed $fees
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
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
    public function recordFaculity(){
        $query = $this->connection->query("INSERT INTO `faculity`(`name`, `program`) 
                                  VALUES ('$this->name','$this->program')");
        return $query;
    }
    public function returnFaculityByProgramId($programId){
        $query = $this->connection->query("select * from faculity where program='$programId' and status!=99");
        return $query;
    }
    public function updateFaculity($updateDate){
        $query = $this->connection->query("UPDATE `faculity` SET `name`='$this->name',`program`='$this->program',`updatedDate`='$updateDate' WHERE id='$this->id'");

        if ($query){
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }
    }
    public function deleteFaculity(){
        $query = $this->connection->query("update faculity set status=99 where id='$this->id'");
        if ($query){
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }
    }
    public function returnFaculities(){
        $query = $this->connection->query("select * from faculity where status !=99");
        return $query;
    }

    // public function returnFaculityNotOnUniversity($unId){
    //     $query = $this->connection->query("select * from faculity where id not in (select faculity from universityfaculity where university='$unId')");
    //     return $query;
    // }

    public function returnFaculityNotOnUniversity($unId,$prog){
        $query = $this->connection->query("select * from faculity where id not in (select faculity from universityfaculity where university='$unId') and faculity.program='$prog'");
        return $query;
    }


    public function returnAllPrograms(){
        $query = $this->connection->query("select * from programs where status!=99");
        if ($query){
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }
    }


    public function fetchFaculityById(){
        $query = $this->connection->query("select faculity.id, name, faculity.program,programs.names FROM faculity,programs where faculity.program=programs.id and faculity.id='$this->id'");
        return $query;
    }

}