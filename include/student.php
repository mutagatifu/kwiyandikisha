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
//experience 2
    private $from2;
    private $to2;
    private $school2;//or company that he/she was working to
    private $field2;
//relationships
private $relation;
private $relative;
private $ages;
private $relativeEmail;
private $phoneNumber;
private $company;
private $occupation;
private $profile;
private $studFiles;

//employements history
    private $fromjob;
    private $tojob;
    private $companyjob;//or company that he/she was working to
    private $occupationjob;

//relationship2
    private $relation2;
    private $relative2;
    private $ages2;
    private $relativeEmail2;
    private $phoneNumber2;
    private $company2;
    private $occupation2;

    /**
     * @return mixed
     */
    public function getFromjob()
    {
        return $this->fromjob;
    }

    /**
     * @param mixed $fromjob
     */
    public function setFromjob($fromjob)
    {
        $this->fromjob = $fromjob;
    }

    /**
     * @return mixed
     */
    public function getTojob()
    {
        return $this->tojob;
    }

    /**
     * @param mixed $tojob
     */
    public function setTojob($tojob)
    {
        $this->tojob = $tojob;
    }

    /**
     * @return mixed
     */
    public function getCompanyjob()
    {
        return $this->companyjob;
    }

    /**
     * @param mixed $companyjob
     */
    public function setCompanyjob($companyjob)
    {
        $this->companyjob = $companyjob;
    }

    /**
     * @return mixed
     */
    public function getOccupationjob()
    {
        return $this->occupationjob;
    }

    /**
     * @param mixed $occupationjob
     */
    public function setOccupationjob($occupationjob)
    {
        $this->occupationjob = $occupationjob;
    }

    /**
     * @return mixed
     */
    public function getFrom2()
    {
        return $this->from2;
    }

    /**
     * @param mixed $from2
     */
    public function setFrom2($from2)
    {
        $this->from2 = $from2;
    }

    /**
     * @return mixed
     */
    public function getTo2()
    {
        return $this->to2;
    }

    /**
     * @param mixed $to2
     */
    public function setTo2($to2)
    {
        $this->to2 = $to2;
    }

    /**
     * @return mixed
     */
    public function getSchool2()
    {
        return $this->school2;
    }

    /**
     * @param mixed $school2
     */
    public function setSchool2($school2)
    {
        $this->school2 = $school2;
    }

    /**
     * @return mixed
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * @param mixed $field2
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
    }

    /**
     * @return mixed
     */
    public function getRelation2()
    {
        return $this->relation2;
    }

    /**
     * @param mixed $relation2
     */
    public function setRelation2($relation2)
    {
        $this->relation2 = $relation2;
    }

    /**
     * @return mixed
     */
    public function getRelative2()
    {
        return $this->relative2;
    }

    /**
     * @param mixed $relative2
     */
    public function setRelative2($relative2)
    {
        $this->relative2 = $relative2;
    }

    /**
     * @return mixed
     */
    public function getAges2()
    {
        return $this->ages2;
    }

    /**
     * @param mixed $ages2
     */
    public function setAges2($ages2)
    {
        $this->ages2 = $ages2;
    }

    /**
     * @return mixed
     */
    public function getRelativeEmail2()
    {
        return $this->relativeEmail2;
    }

    /**
     * @param mixed $relativeEmail2
     */
    public function setRelativeEmail2($relativeEmail2)
    {
        $this->relativeEmail2 = $relativeEmail2;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * @param mixed $phoneNumber2
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;
    }

    /**
     * @return mixed
     */
    public function getCompany2()
    {
        return $this->company2;
    }

    /**
     * @param mixed $company2
     */
    public function setCompany2($company2)
    {
        $this->company2 = $company2;
    }

    /**
     * @return mixed
     */
    public function getOccupation2()
    {
        return $this->occupation2;
    }

    /**
     * @param mixed $occupation2
     */
    public function setOccupation2($occupation2)
    {
        $this->occupation2 = $occupation2;
    }

    /**
     * @return mixed
     */
    public function getProfile2()
    {
        return $this->profile2;
    }

    /**
     * @param mixed $profile2
     */
    public function setProfile2($profile2)
    {
        $this->profile2 = $profile2;
    }

    /**
     * @return mixed
     */
    public function getStudFiles2()
    {
        return $this->studFiles2;
    }

    /**
     * @param mixed $studFiles2
     */
    public function setStudFiles2($studFiles2)
    {
        $this->studFiles2 = $studFiles2;
    }

    /**
     * @return mixed
     */
    public function getStudFiles()
    {
        return $this->studFiles;
    }
    /**
     * @param mixed $studFiles
     */
    public function setStudFiles($studFiles)
    {
        $this->studFiles = $studFiles;
    }
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
    public function verifyStudent(){
        $query = $this->connection->query("select * from student");
        return $query;
    }
    public function verifypresenceOfPrimaryKey(){
        $query = $this->connection->query("select * from student where passPort='$this->passPort'");
        return $query;
    }
    public function verifyNumberOfApplication(){
        $query = $this->connection->query("select * from registration where passPort='$this->passPort'");
        return $query;
    }
    public function recordStudent(){
        $query = $this->connection->query("INSERT INTO `student`(`passPort`, `firstName`, `lastName`, `nationality`, `dateOfBirth`, `placeOfBirth`, `locationOfBirth`, `validUntil`, `nativeLanguage`, `emailAddress`, `weChatNumber`, `chineseLevel`, `Religion`, `hobby`,`profileImage`) 
VALUES ('$this->passPort','$this->firstName','$this->lastName','$this->nationality','$this->dateOfB','$this->placeOfB','$this->locationOfBirth','$this->ppValid','$this->nativeLang','$this->email','$this->weChat','$this->chineseLevel','$this->religion','$this->hobby','$this->profile')");
        return $query;
    }
    public function recordSAcademicHistory(){
        $query = $this->connection->query("INSERT INTO `academichistory`(`studentsPC`, `from`, `to`, `school`, `field`) 
                                          VALUES ('$this->passPort','$this->from','$this->to','$this->school','$this->field')");
        return $query;
    }
    public function registrate($registrationNumber){
        $query = $this->connection->query("INSERT INTO `registration`(`id`, `passPort`, `university`, `program`, `faculity`, `tlanguage`, `studentPlan`, `studentsFiles`) 
                                          VALUES ('$registrationNumber','$this->passPort','$this->university','$this->program','$this->faculity','$this->preferedLanguage','$this->studentPlan','$this->studFiles')");

        if($query)
        {
            return $query;
        }
        else{
            return $query.mysqli_error($this->connection);
        }
    }
    public function studentRelationShip(){
        $query = $this->connection->query("INSERT INTO `relationships`(`relation`, `studentsPC`, `names`, `ages`, `emails`, `phoneNumber`, `company`, `occupation`) 
                                          VALUES ('$this->relation','$this->passPort','$this->relative','$this->ages','$this->relativeEmail','$this->phoneNumber','$this->company','$this->occupation')");
        return $query;
    }
    public function studentRelationShip2(){
        $query = $this->connection->query("INSERT INTO `relationships2`(`relation2`, `studentsPC`, `names2`, `ages2`, `emails2`, `phoneNumber2`, `company2`, `occupation2`) 
                                          VALUES ('$this->relation2','$this->passPort','$this->relative2','$this->ages2','$this->relativeEmail2','$this->phoneNumber2','$this->company2','$this->occupation2')");
        return $query;
    }
    public function recordSAcademicHistory2(){
        $query = $this->connection->query("INSERT INTO `academichistory2`(`studentsPC`, `from2`, `to2`, `school2`, `field2`) 
                                          VALUES ('$this->passPort','$this->from2','$this->to2','$this->school2','$this->field2')");
        return $query;
    }
    public function recordExperince(){
        $query = $this->connection->query("INSERT INTO `experience`(`studentsPC`, `from`, `to`, `school`, `field`) 
                                          VALUES ('$this->passPort','$this->fromjob','$this->tojob','$this->companyjob','$this->occupationjob')");
        return $query;
    }
    public function returnStudentsWithPayments(){
        $query = $this->connection->query("select registration.id,registration.passPort,student.firstName,student.lastName,student.weChatNumber,student.profileImage,
        registration.university,university.name as university,registration.program,programs.names as degree,registration.faculity,faculity.name as course,registration.payment from 
        registration,student,university,programs,faculity where registration.passPort=student.passPort and registration.university=university.id and registration.program=programs.id 
        and registration.faculity=faculity.id");
        return $query;
    }
    public function confirmPayment($regId){
        $query = $this->connection->query("update registration set payment ='yes' where id='$regId'");
        return $query;
    }
    public function returnStudentBySearch($search){
        $query = $this->connection->query("SELECT registration.id, registration.passPort, student.firstName, student.lastName, student.weChatNumber, student.profileImage, 
registration.university, university.name AS university, registration.program, programs.names AS degree, registration.faculity, faculity.name AS course, registration.payment,registration.studentsFiles
FROM registration, student, university, programs, faculity
WHERE registration.passPort = student.passPort
AND registration.university = university.id
AND registration.program = programs.id
AND registration.faculity = faculity.id
AND (
registration.createdDate LIKE  '%$search%'
OR registration.passPort =  '$$search'
OR student.firstName LIKE  '%$search%'
OR student.lastName LIKE  '%$search%'
OR university.name LIKE  '%$search%'
)");
        return $query;
    }

}