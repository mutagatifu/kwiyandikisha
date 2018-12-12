
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
    private $name;
    private $program;
    private $fees;
    private $language;
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
    public function updateFaculity($faculityId,$updateDate){
        $query = $this->connection->query("UPDATE `faculity` SET `name`='$this->name',`program`='$this->program',`fees`='$this->fees',`language`='$this->language',`updatedDate`='$updateDate' WHERE id='$faculityId'");
        return $query;
    }
    public function deleteFaculity($faculityId){
        $query = $this->connection->query("update faculity set status=99 where id='$faculityId'");
        return $query;
    }
    public function returnFaculities(){
        $query = $this->connection->query("select * from faculity where status !=99");
        return $query;
    }

}