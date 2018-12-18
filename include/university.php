<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 10:37
 */
include 'dbconnection.php';
class University extends DbConnection
{
    private $id;
    private $name;
    private $country;
    private $province;
    private $city;
    private $logo;
    private $description;
    private $faculity;
    private $language;
    private $price;
    private $program;
    private $programId;
    private $universityId;

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
    public function getProgramId()
    {
        return $this->programId;
    }
    /**
     * @param mixed $programId
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;
    }
    /**
     * @return mixed
     */
    public function getUniversityId()
    {
        return $this->universityId;
    }
    /**
     * @param mixed $universityId
     */
    public function setUniversityId($universityId)
    {
        $this->universityId = $universityId;
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
    public function getFaculity()
    {
        return $this->faculity;
    }
    /**
     * @param mixed $faculity
     */
    public function setFaculity($faculity)
    {
        $this->faculity = $faculity;
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
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }
    public function recordUniversity(){
        $query = $this->connection->query("INSERT INTO `university`(`name`, `country`, `province`, `city`, `logo`,`description`)
                                          VALUES ('$this->name','$this->country','$this->province','$this->city','$this->logo','$this->description')");
        return $query;
    }
    public function returnMaxUniversityId(){
        $query = $this->connection->query("select Max(id) as id from university");
        return $query;
    }
    public function recordUniversityfaculity($university,$faculity){
        $query = $this->connection->query("INSERT INTO `universityfaculity`(`university`, `faculity`) 
                                                  VALUES ('$university','$faculity')");
        return $query;
    }

    public function verifyUniversity(){
        $query = $this->connection->query("select * from university where name='$this->name' and country='$this->country' and city='$this->city'");
        return $query;
    }
    public function fetchUniversity(){
        $query=$this->connection->query("select * from university where status!=99");
        return $query;
    }

    public function updateUniversity($updateDate){
        $query = $this->connection->query("UPDATE `university` SET `name`='$this->name',`country`='$this->country',
                                            `province`='$this->province',`city`='$this->city',`description`='$this->description',`updatedDate`='$updateDate' WHERE id='$this->id'");
        if ($query){
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }
    }
public function fetchCountries(){
        $query = $this->connection->query("select * from country");
        return $query;
}

public function deleteUniversity(){
    $query = $this->connection->query("update university set status=99 where id='$this->id'");
    if ($query){
        return $query;
    }
    else{
        return $query.mysqli_error($this->connection);
    }
}
public function returnProgramByUniversity($uniId){
    $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,universityfaculity.program,programs.names as degrees,programs.startingDate,programs.duration,
universityfaculity.faculity,faculity.name as courses,universityfaculity.language,universityfaculity.price from universityfaculity,programs,faculity where universityfaculity.program=programs.id and 
universityfaculity.faculity=faculity.id and universityfaculity.university='$uniId'");
    return $query;
}

    public function returnFaculityByUniversity($uniId){
        $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,universityfaculity.faculity,faculity.name,universityfaculity.language,universityfaculity.price 
from universityfaculity,faculity where universityfaculity.faculity=faculity.id and universityfaculity.university='$uniId'");
        return $query;
    }


    public function returnUniversity($unId){
        $query=$this->connection->query("select * from university where id='$unId'");
        return $query;
    }

   public function universityProgram($unId)
   {
       $query = $this->connection->query("select universityprogram.program,programs.names from universityprogram,programs where universityprogram.program=programs.id and university='$unId'");
       return $query;
   }
    /*return faculity by university and programs*/
    public function returnFaculityByUniversityAndProgram(){
        $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,universityfaculity.faculity,universityfaculity.language,
universityfaculity.price,faculity.name,faculity.program from  universityfaculity,faculity
where universityfaculity.faculity=faculity.id and universityfaculity.university='$this->universityId' and faculity.program='$this->programId'");
        return $query;
    }
   public function updateFaculityOnUniversity($faculityId){

        $query = $this->connection->query("UPDATE `universityfaculity` SET `language`='$this->language',`price`='$this->price' where id='$faculityId'");
        return $query;
   }
    public function returnUniversityByFaculity($faculity){
       $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,university.name as universityName,university.logo,universityfaculity.faculity,faculity.name as 
faculityName,faculity.program,programs.names as degree,universityfaculity.language,universityfaculity.price from universityfaculity,faculity,university,programs where 
universityfaculity.faculity=faculity.id and universityfaculity.university=university.id and university.status!=99 and faculity.program=programs.id and universityfaculity.faculity='$faculity'");
       return $query;
    }
    public function returnRegistrationData($id){
       $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,university.name as universityName,university.province,university.logo,universityfaculity.faculity,faculity.name as 
faculityName,faculity.program,programs.names as degree,programs.startingDate,universityfaculity.language,universityfaculity.price from universityfaculity,university,faculity,programs where 
universityfaculity.id='$id' and universityfaculity.university=university.id and universityfaculity.faculity=faculity.id and faculity.program=programs.id");
       return $query;
    }
    public function returnUniversityInfo($university,$program){
        $query = $this->connection->query("select universityfaculity.id,universityfaculity.university,universityfaculity.faculity,universityfaculity.language,universityfaculity.price,faculity.name,faculity.program,programs.names as 
degree,programs.startingDate,programs.duration from universityfaculity,faculity,programs where universityfaculity.faculity=faculity.id and faculity.program=programs.id and 
universityfaculity.university='$university' and faculity.program='$program'");
        return $query;
        
    }

    public function returnProgramsByUniversity($unId)
    {
        $query = $this->connection->query("select universityfaculity.university,universityfaculity.faculity,universityfaculity.language,count(faculity.name) as 
faculities,faculity.program,programs.names,programs.startingDate,programs.duration from universityfaculity,faculity,programs where universityfaculity.faculity=faculity.id and 
faculity.program=programs.id and universityfaculity.university='$unId' group by universityfaculity.university,faculity.program");
        return $query;
}


}