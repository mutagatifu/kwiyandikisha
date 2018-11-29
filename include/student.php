<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 28/11/2018
 * Time: 10:37
 */
include 'dbconnection.php';
class Student extends DbConnection
{
    //student's info
private $passPort;
private $firstName;
private $lastName;
private $nationality;
private $dateOfB;
private $placeOfB;
private $locationOfBirth;
private $ppValid;
private $nativeLang;
private $email;
private $weChat;
private $chineseLevel;
private $religion;
private $hobby;
//registration table
private $university;
private $program;
private $faculity;
private $preferedLanguage;
private $studentPlan;
//experiences
private $from;
private $to;
private $school;//or company that he/she was working to
private $field;
//relationships
private $relation;
private $relative;
private $ages;
private $relativeEmail;
private $phoneNumber;
private $company;
private $occupation;
private $profile;

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * @param mixed $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
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
    public function getLocationOfBirth()
    {
        return $this->locationOfBirth;
    }
    /**
     * @param mixed $locationOfBirth
     */
    public function setLocationOfBirth($locationOfBirth)
    {
        $this->locationOfBirth = $locationOfBirth;
    }
    /**
     * @return mixed
     */
    public function getChineseLevel()
    {
        return $this->chineseLevel;
    }
    /**
     * @param mixed $chineseLevel
     */
    public function setChineseLevel($chineseLevel)
    {
        $this->chineseLevel = $chineseLevel;
    }
    /**
     * @return mixed
     */
    public function getHobby()
    {
        return $this->hobby;
    }
    /**
     * @param mixed $hobby
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    }
    /**
     * @return mixed
     */
    public function getStudentPlan()
    {
        return $this->studentPlan;
    }
    /**
     * @param mixed $studentPlan
     */
    public function setStudentPlan($studentPlan)
    {
        $this->studentPlan = $studentPlan;
    }
    /**
     * @return mixed
     */
    public function getPassPort()
    {
        return $this->passPort;
    }
    /**
     * @param mixed $passPort
     */
    public function setPassPort($passPort)
    {
        $this->passPort = $passPort;
    }
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
    /**
     * @return mixed
     */
    public function getDateOfB()
    {
        return $this->dateOfB;
    }
    /**
     * @param mixed $dateOfB
     */
    public function setDateOfB($dateOfB)
    {
        $this->dateOfB = $dateOfB;
    }
    /**
     * @return mixed
     */
    public function getPlaceOfB()
    {
        return $this->placeOfB;
    }
    /**
     * @param mixed $placeOfB
     */
    public function setPlaceOfB($placeOfB)
    {
        $this->placeOfB = $placeOfB;
    }
    /**
     * @return mixed
     */
    public function getPpValid()
    {
        return $this->ppValid;
    }
    /**
     * @param mixed $ppValid
     */
    public function setPpValid($ppValid)
    {
        $this->ppValid = $ppValid;
    }
    /**
     * @return mixed
     */
    public function getNativeLang()
    {
        return $this->nativeLang;
    }
    /**
     * @param mixed $nativeLang
     */
    public function setNativeLang($nativeLang)
    {
        $this->nativeLang = $nativeLang;
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
    public function getWeChat()
    {
        return $this->weChat;
    }
    /**
     * @param mixed $weChat
     */
    public function setWeChat($weChat)
    {
        $this->weChat = $weChat;
    }
    /**
     * @return mixed
     */
    public function getReligion()
    {
        return $this->religion;
    }
    /**
     * @param mixed $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
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
    public function getPreferedLanguage()
    {
        return $this->preferedLanguage;
    }
    /**
     * @param mixed $preferedLanguage
     */
    public function setPreferedLanguage($preferedLanguage)
    {
        $this->preferedLanguage = $preferedLanguage;
    }
    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }
    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }
    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }
    /**
     * @param mixed $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }
    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }
    /**
     * @return mixed
     */
    public function getRelation()
    {
        return $this->relation;
    }
    /**
     * @param mixed $relation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
    }
    /**
     * @return mixed
     */
    public function getRelative()
    {
        return $this->relative;
    }
    /**
     * @param mixed $relative
     */
    public function setRelative($relative)
    {
        $this->relative = $relative;
    }
    /**
     * @return mixed
     */
    public function getAges()
    {
        return $this->ages;
    }
    /**
     * @param mixed $ages
     */
    public function setAges($ages)
    {
        $this->ages = $ages;
    }
    /**
     * @return mixed
     */
    public function getRelativeEmail()
    {
        return $this->relativeEmail;
    }
    /**
     * @param mixed $relativeEmail
     */
    public function setRelativeEmail($relativeEmail)
    {
        $this->relativeEmail = $relativeEmail;
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
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }
    /**
     * @return mixed
     */
    public function getOccupation()
    {
        return $this->occupation;
    }
    /**
     * @param mixed $occupation
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }
    public function recordStudent(){
        $query = $this->connection->query("INSERT INTO `student`(`passPort`, `firstName`, `lastName`, `nationality`, `dateOfBirth`, `placeOfBirth`, `locationOfBirth`, `validUntil`, `nativeLanguage`, `emailAddress`, `weChatNumber`, `chineseLevel`, `Religion`, `hobby`,`profileImage`) 
VALUES ('$this->passPort','$this->firstName','$this->lastName','$this->nationality','$this->dateOfB','$this->placeOfB','$this->locationOfBirth','$this->vaValid','$this->nativeLang','$this->email','$this->weChat','$this->chineseLevel','$this->religion','$this->hobby','$this->profile')");
        return $query;
    }
    public function recordSAcademicHistory(){
        $query = $this->connection->query("INSERT INTO `academichistory`(`studentsPC`, `from`, `to`, `school`, `field`) 
                                          VALUES ('$this->passPort','$this->from','$this->to','$this->school','$this->field')");
        return $query;
    }
    public function registrate(){
        $query = $this->connection->query("INSERT INTO `registration`(`passPort`, `university`, `program`, `faculity`, `tlanguage`, `studentPlan`) 
                                          VALUES ('$this->passPort','$this->university','$this->program','$this->faculity','$this->preferedLanguage','$this->studentPlan')");
        return $query;
    }
    public function studentRelationShip(){
        $query = $this->connection->query("INSERT INTO `relationships`(`relation`, `studentsPC`, `names`, `ages`, `emails`, `phoneNumber`, `company`, `occupation`) 
                                          VALUES ('$this->relation','$this->passPort','$this->relative','$this->ages','$this->relativeEmail','$this->phoneNumber','$this->company','$this->occupation')");
        return $query;
    }

}