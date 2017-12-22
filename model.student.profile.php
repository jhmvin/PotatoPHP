<?php require 'potato.connection.php';
#|Date Created: 2017-04-23 17:43:39
#|jhmvin
/*
##########################################################
# Mashed Potato Object Relational Mapping                #
# version 17.03.07                                       #
# College of Information and Communications Technology   #
# Bulacan State University                               #
# Author: Jhon Melvin N. Perello -- BSIT3A-G1            #
#--------------------------------------------------------#
#             >>>>>> POTATO MODELS <<<<<<                #
#      This code is computer generated. Do not modify    #
# use controllers instad.                                #
##########################################################*/

class Student_profile {

/*Start Declaration*/
private $id_safe;
private $STUDENT_id_safe;
private $mobile_safe;
private $province_safe;
private $city_safe;
private $brgy_safe;
private $street_safe;
private $house_no_safe;
private $birthdate_safe;
private $birthplace_safe;
private $sex_safe;
private $height_safe;
private $weight_safe;
private $civil_status_safe;
private $nationality_safe;
private $email_safe;
private $father_name_safe;
private $father_work_safe;
private $mother_name_safe;
private $mother_work_safe;
private $elementary_safe;
private $elem_grad_safe;
private $highschool_safe;
private $high_grad_safe;
private $educ_others_safe;
private $ice_name_safe;
private $ice_relation_safe;
private $ice_address_safe;
private $ice_contact_safe;
private $created_by_safe;
private $created_date_safe;
private $modified_by_safe;
private $modified_date_safe;

/*End Declaration*/

/*Statics*/
private static $con;
private static $instance;
/*End Statics*/


/*Constructor*/
function __construct(){
     self::$con = PotatoConnection::getInstance();
}
/*End Constructor*/

/*SINGLETON*/
static function getInstance(){
     if(!isset(self::$instance)){
          self::$instance = new self();
     }
     return self::$instance;
}
/*End SINGLETON*/

/*Accessors*/
public function getId(){
     return $this->id_safe;
}
public function getSTUDENT_id(){
     return $this->STUDENT_id_safe;
}
public function getMobile(){
     return $this->mobile_safe;
}
public function getProvince(){
     return $this->province_safe;
}
public function getCity(){
     return $this->city_safe;
}
public function getBrgy(){
     return $this->brgy_safe;
}
public function getStreet(){
     return $this->street_safe;
}
public function getHouse_no(){
     return $this->house_no_safe;
}
public function getBirthdate(){
     return $this->birthdate_safe;
}
public function getBirthplace(){
     return $this->birthplace_safe;
}
public function getSex(){
     return $this->sex_safe;
}
public function getHeight(){
     return $this->height_safe;
}
public function getWeight(){
     return $this->weight_safe;
}
public function getCivil_status(){
     return $this->civil_status_safe;
}
public function getNationality(){
     return $this->nationality_safe;
}
public function getEmail(){
     return $this->email_safe;
}
public function getFather_name(){
     return $this->father_name_safe;
}
public function getFather_work(){
     return $this->father_work_safe;
}
public function getMother_name(){
     return $this->mother_name_safe;
}
public function getMother_work(){
     return $this->mother_work_safe;
}
public function getElementary(){
     return $this->elementary_safe;
}
public function getElem_grad(){
     return $this->elem_grad_safe;
}
public function getHighschool(){
     return $this->highschool_safe;
}
public function getHigh_grad(){
     return $this->high_grad_safe;
}
public function getEduc_others(){
     return $this->educ_others_safe;
}
public function getIce_name(){
     return $this->ice_name_safe;
}
public function getIce_relation(){
     return $this->ice_relation_safe;
}
public function getIce_address(){
     return $this->ice_address_safe;
}
public function getIce_contact(){
     return $this->ice_contact_safe;
}
public function getCreated_by(){
     return $this->created_by_safe;
}
public function getCreated_date(){
     return $this->created_date_safe;
}
public function getModified_by(){
     return $this->modified_by_safe;
}
public function getModified_date(){
     return $this->modified_date_safe;
}
/*End Accessors*/

/*Mutators*/
public function setId($value){
     $this->id_safe = $value;
}
public function setSTUDENT_id($value){
     $this->STUDENT_id_safe = $value;
}
public function setMobile($value){
     $this->mobile_safe = $value;
}
public function setProvince($value){
     $this->province_safe = $value;
}
public function setCity($value){
     $this->city_safe = $value;
}
public function setBrgy($value){
     $this->brgy_safe = $value;
}
public function setStreet($value){
     $this->street_safe = $value;
}
public function setHouse_no($value){
     $this->house_no_safe = $value;
}
public function setBirthdate($value){
     $this->birthdate_safe = $value;
}
public function setBirthplace($value){
     $this->birthplace_safe = $value;
}
public function setSex($value){
     $this->sex_safe = $value;
}
public function setHeight($value){
     $this->height_safe = $value;
}
public function setWeight($value){
     $this->weight_safe = $value;
}
public function setCivil_status($value){
     $this->civil_status_safe = $value;
}
public function setNationality($value){
     $this->nationality_safe = $value;
}
public function setEmail($value){
     $this->email_safe = $value;
}
public function setFather_name($value){
     $this->father_name_safe = $value;
}
public function setFather_work($value){
     $this->father_work_safe = $value;
}
public function setMother_name($value){
     $this->mother_name_safe = $value;
}
public function setMother_work($value){
     $this->mother_work_safe = $value;
}
public function setElementary($value){
     $this->elementary_safe = $value;
}
public function setElem_grad($value){
     $this->elem_grad_safe = $value;
}
public function setHighschool($value){
     $this->highschool_safe = $value;
}
public function setHigh_grad($value){
     $this->high_grad_safe = $value;
}
public function setEduc_others($value){
     $this->educ_others_safe = $value;
}
public function setIce_name($value){
     $this->ice_name_safe = $value;
}
public function setIce_relation($value){
     $this->ice_relation_safe = $value;
}
public function setIce_address($value){
     $this->ice_address_safe = $value;
}
public function setIce_contact($value){
     $this->ice_contact_safe = $value;
}
public function setCreated_by($value){
     $this->created_by_safe = $value;
}
public function setCreated_date($value){
     $this->created_date_safe = $value;
}
public function setModified_by($value){
     $this->modified_by_safe = $value;
}
public function setModified_date($value){
     $this->modified_date_safe = $value;
}
/*End Mutators*/

/*Reset*/
public function release(){
               $this->id_safe = null;
               $this->STUDENT_id_safe = null;
               $this->mobile_safe = null;
               $this->province_safe = null;
               $this->city_safe = null;
               $this->brgy_safe = null;
               $this->street_safe = null;
               $this->house_no_safe = null;
               $this->birthdate_safe = null;
               $this->birthplace_safe = null;
               $this->sex_safe = null;
               $this->height_safe = null;
               $this->weight_safe = null;
               $this->civil_status_safe = null;
               $this->nationality_safe = null;
               $this->email_safe = null;
               $this->father_name_safe = null;
               $this->father_work_safe = null;
               $this->mother_name_safe = null;
               $this->mother_work_safe = null;
               $this->elementary_safe = null;
               $this->elem_grad_safe = null;
               $this->highschool_safe = null;
               $this->high_grad_safe = null;
               $this->educ_others_safe = null;
               $this->ice_name_safe = null;
               $this->ice_relation_safe = null;
               $this->ice_address_safe = null;
               $this->ice_contact_safe = null;
               $this->created_by_safe = null;
               $this->created_date_safe = null;
               $this->modified_by_safe = null;
               $this->modified_date_safe = null;
}
/*End Reset*/


/*Retrieve*/
/*Find*/
public function find($keyvalue,$mode){
$key = explode(':',$keyvalue);
$sql = "SELECT * FROM student_profile WHERE $key[0] = '$key[1]'";
$result = self::$con->query($sql);
     while($row = $result->fetch_assoc()){
          $res['id'] = $row['id'];
               $this->id_safe = $row['id'];
          $res['STUDENT_id'] = $row['STUDENT_id'];
               $this->STUDENT_id_safe = $row['STUDENT_id'];
          $res['mobile'] = $row['mobile'];
               $this->mobile_safe = $row['mobile'];
          $res['province'] = $row['province'];
               $this->province_safe = $row['province'];
          $res['city'] = $row['city'];
               $this->city_safe = $row['city'];
          $res['brgy'] = $row['brgy'];
               $this->brgy_safe = $row['brgy'];
          $res['street'] = $row['street'];
               $this->street_safe = $row['street'];
          $res['house_no'] = $row['house_no'];
               $this->house_no_safe = $row['house_no'];
          $res['birthdate'] = $row['birthdate'];
               $this->birthdate_safe = $row['birthdate'];
          $res['birthplace'] = $row['birthplace'];
               $this->birthplace_safe = $row['birthplace'];
          $res['sex'] = $row['sex'];
               $this->sex_safe = $row['sex'];
          $res['height'] = $row['height'];
               $this->height_safe = $row['height'];
          $res['weight'] = $row['weight'];
               $this->weight_safe = $row['weight'];
          $res['civil_status'] = $row['civil_status'];
               $this->civil_status_safe = $row['civil_status'];
          $res['nationality'] = $row['nationality'];
               $this->nationality_safe = $row['nationality'];
          $res['email'] = $row['email'];
               $this->email_safe = $row['email'];
          $res['father_name'] = $row['father_name'];
               $this->father_name_safe = $row['father_name'];
          $res['father_work'] = $row['father_work'];
               $this->father_work_safe = $row['father_work'];
          $res['mother_name'] = $row['mother_name'];
               $this->mother_name_safe = $row['mother_name'];
          $res['mother_work'] = $row['mother_work'];
               $this->mother_work_safe = $row['mother_work'];
          $res['elementary'] = $row['elementary'];
               $this->elementary_safe = $row['elementary'];
          $res['elem_grad'] = $row['elem_grad'];
               $this->elem_grad_safe = $row['elem_grad'];
          $res['highschool'] = $row['highschool'];
               $this->highschool_safe = $row['highschool'];
          $res['high_grad'] = $row['high_grad'];
               $this->high_grad_safe = $row['high_grad'];
          $res['educ_others'] = $row['educ_others'];
               $this->educ_others_safe = $row['educ_others'];
          $res['ice_name'] = $row['ice_name'];
               $this->ice_name_safe = $row['ice_name'];
          $res['ice_relation'] = $row['ice_relation'];
               $this->ice_relation_safe = $row['ice_relation'];
          $res['ice_address'] = $row['ice_address'];
               $this->ice_address_safe = $row['ice_address'];
          $res['ice_contact'] = $row['ice_contact'];
               $this->ice_contact_safe = $row['ice_contact'];
          $res['created_by'] = $row['created_by'];
               $this->created_by_safe = $row['created_by'];
          $res['created_date'] = $row['created_date'];
               $this->created_date_safe = $row['created_date'];
          $res['modified_by'] = $row['modified_by'];
               $this->modified_by_safe = $row['modified_by'];
          $res['modified_date'] = $row['modified_date'];
               $this->modified_date_safe = $row['modified_date'];
     $phpobject[] = $res;
     if($mode == 'self'){break;}
     }
if($mode == 'array'){
return $phpobject;
}else if($mode == 'self'){
return true;
     }
}
/*End Find*/


/*WHERE Function*/
public function where($arg1,$condition,$arg2){
     $sql = "SELECT * FROM student_profile WHERE $arg1 $condition ?";
     $statement = self::$con->getConnection()->prepare($sql);
     $statement->bind_param("s",$arg2);
     $statement->execute();
     $result = $statement->get_result();
     while($row = $result->fetch_assoc()){
          $res['id'] = $row['id'];
               $this->id_safe = $row['id'];
          $res['STUDENT_id'] = $row['STUDENT_id'];
               $this->STUDENT_id_safe = $row['STUDENT_id'];
          $res['mobile'] = $row['mobile'];
               $this->mobile_safe = $row['mobile'];
          $res['province'] = $row['province'];
               $this->province_safe = $row['province'];
          $res['city'] = $row['city'];
               $this->city_safe = $row['city'];
          $res['brgy'] = $row['brgy'];
               $this->brgy_safe = $row['brgy'];
          $res['street'] = $row['street'];
               $this->street_safe = $row['street'];
          $res['house_no'] = $row['house_no'];
               $this->house_no_safe = $row['house_no'];
          $res['birthdate'] = $row['birthdate'];
               $this->birthdate_safe = $row['birthdate'];
          $res['birthplace'] = $row['birthplace'];
               $this->birthplace_safe = $row['birthplace'];
          $res['sex'] = $row['sex'];
               $this->sex_safe = $row['sex'];
          $res['height'] = $row['height'];
               $this->height_safe = $row['height'];
          $res['weight'] = $row['weight'];
               $this->weight_safe = $row['weight'];
          $res['civil_status'] = $row['civil_status'];
               $this->civil_status_safe = $row['civil_status'];
          $res['nationality'] = $row['nationality'];
               $this->nationality_safe = $row['nationality'];
          $res['email'] = $row['email'];
               $this->email_safe = $row['email'];
          $res['father_name'] = $row['father_name'];
               $this->father_name_safe = $row['father_name'];
          $res['father_work'] = $row['father_work'];
               $this->father_work_safe = $row['father_work'];
          $res['mother_name'] = $row['mother_name'];
               $this->mother_name_safe = $row['mother_name'];
          $res['mother_work'] = $row['mother_work'];
               $this->mother_work_safe = $row['mother_work'];
          $res['elementary'] = $row['elementary'];
               $this->elementary_safe = $row['elementary'];
          $res['elem_grad'] = $row['elem_grad'];
               $this->elem_grad_safe = $row['elem_grad'];
          $res['highschool'] = $row['highschool'];
               $this->highschool_safe = $row['highschool'];
          $res['high_grad'] = $row['high_grad'];
               $this->high_grad_safe = $row['high_grad'];
          $res['educ_others'] = $row['educ_others'];
               $this->educ_others_safe = $row['educ_others'];
          $res['ice_name'] = $row['ice_name'];
               $this->ice_name_safe = $row['ice_name'];
          $res['ice_relation'] = $row['ice_relation'];
               $this->ice_relation_safe = $row['ice_relation'];
          $res['ice_address'] = $row['ice_address'];
               $this->ice_address_safe = $row['ice_address'];
          $res['ice_contact'] = $row['ice_contact'];
               $this->ice_contact_safe = $row['ice_contact'];
          $res['created_by'] = $row['created_by'];
               $this->created_by_safe = $row['created_by'];
          $res['created_date'] = $row['created_date'];
               $this->created_date_safe = $row['created_date'];
          $res['modified_by'] = $row['modified_by'];
               $this->modified_by_safe = $row['modified_by'];
          $res['modified_date'] = $row['modified_date'];
               $this->modified_date_safe = $row['modified_date'];
     $phpobject[] = $res;
     }
return $phpobject;
}
/*End Where*/
/*End Retrieve*/

/*All Function*/
public function all(){
     $sql = "SELECT * FROM student_profile";
$result = self::$con->query($sql);
     while($row = $result->fetch_assoc()){
          $res['id'] = $row['id'];
               $this->id_safe = $row['id'];
          $res['STUDENT_id'] = $row['STUDENT_id'];
               $this->STUDENT_id_safe = $row['STUDENT_id'];
          $res['mobile'] = $row['mobile'];
               $this->mobile_safe = $row['mobile'];
          $res['province'] = $row['province'];
               $this->province_safe = $row['province'];
          $res['city'] = $row['city'];
               $this->city_safe = $row['city'];
          $res['brgy'] = $row['brgy'];
               $this->brgy_safe = $row['brgy'];
          $res['street'] = $row['street'];
               $this->street_safe = $row['street'];
          $res['house_no'] = $row['house_no'];
               $this->house_no_safe = $row['house_no'];
          $res['birthdate'] = $row['birthdate'];
               $this->birthdate_safe = $row['birthdate'];
          $res['birthplace'] = $row['birthplace'];
               $this->birthplace_safe = $row['birthplace'];
          $res['sex'] = $row['sex'];
               $this->sex_safe = $row['sex'];
          $res['height'] = $row['height'];
               $this->height_safe = $row['height'];
          $res['weight'] = $row['weight'];
               $this->weight_safe = $row['weight'];
          $res['civil_status'] = $row['civil_status'];
               $this->civil_status_safe = $row['civil_status'];
          $res['nationality'] = $row['nationality'];
               $this->nationality_safe = $row['nationality'];
          $res['email'] = $row['email'];
               $this->email_safe = $row['email'];
          $res['father_name'] = $row['father_name'];
               $this->father_name_safe = $row['father_name'];
          $res['father_work'] = $row['father_work'];
               $this->father_work_safe = $row['father_work'];
          $res['mother_name'] = $row['mother_name'];
               $this->mother_name_safe = $row['mother_name'];
          $res['mother_work'] = $row['mother_work'];
               $this->mother_work_safe = $row['mother_work'];
          $res['elementary'] = $row['elementary'];
               $this->elementary_safe = $row['elementary'];
          $res['elem_grad'] = $row['elem_grad'];
               $this->elem_grad_safe = $row['elem_grad'];
          $res['highschool'] = $row['highschool'];
               $this->highschool_safe = $row['highschool'];
          $res['high_grad'] = $row['high_grad'];
               $this->high_grad_safe = $row['high_grad'];
          $res['educ_others'] = $row['educ_others'];
               $this->educ_others_safe = $row['educ_others'];
          $res['ice_name'] = $row['ice_name'];
               $this->ice_name_safe = $row['ice_name'];
          $res['ice_relation'] = $row['ice_relation'];
               $this->ice_relation_safe = $row['ice_relation'];
          $res['ice_address'] = $row['ice_address'];
               $this->ice_address_safe = $row['ice_address'];
          $res['ice_contact'] = $row['ice_contact'];
               $this->ice_contact_safe = $row['ice_contact'];
          $res['created_by'] = $row['created_by'];
               $this->created_by_safe = $row['created_by'];
          $res['created_date'] = $row['created_date'];
               $this->created_date_safe = $row['created_date'];
          $res['modified_by'] = $row['modified_by'];
               $this->modified_by_safe = $row['modified_by'];
          $res['modified_date'] = $row['modified_date'];
               $this->modified_date_safe = $row['modified_date'];
     $phpobject[] = $res;
     }
return $phpobject;
}
/*End Where*/
/*End Retrieve*/

/*Update*/
public function update($keyvalue){
$key = explode(':',$keyvalue);
$sql = "UPDATE student_profile SET ";
$type = "";
     if(!is_null($this->id_safe)){$sql .= "id = ?,";$values[] = $this->id_safe;$type .="s";}
     if(!is_null($this->STUDENT_id_safe)){$sql .= "STUDENT_id = ?,";$values[] = $this->STUDENT_id_safe;$type .="s";}
     if(!is_null($this->mobile_safe)){$sql .= "mobile = ?,";$values[] = $this->mobile_safe;$type .="s";}
     if(!is_null($this->province_safe)){$sql .= "province = ?,";$values[] = $this->province_safe;$type .="s";}
     if(!is_null($this->city_safe)){$sql .= "city = ?,";$values[] = $this->city_safe;$type .="s";}
     if(!is_null($this->brgy_safe)){$sql .= "brgy = ?,";$values[] = $this->brgy_safe;$type .="s";}
     if(!is_null($this->street_safe)){$sql .= "street = ?,";$values[] = $this->street_safe;$type .="s";}
     if(!is_null($this->house_no_safe)){$sql .= "house_no = ?,";$values[] = $this->house_no_safe;$type .="s";}
     if(!is_null($this->birthdate_safe)){$sql .= "birthdate = ?,";$values[] = $this->birthdate_safe;$type .="s";}
     if(!is_null($this->birthplace_safe)){$sql .= "birthplace = ?,";$values[] = $this->birthplace_safe;$type .="s";}
     if(!is_null($this->sex_safe)){$sql .= "sex = ?,";$values[] = $this->sex_safe;$type .="s";}
     if(!is_null($this->height_safe)){$sql .= "height = ?,";$values[] = $this->height_safe;$type .="s";}
     if(!is_null($this->weight_safe)){$sql .= "weight = ?,";$values[] = $this->weight_safe;$type .="s";}
     if(!is_null($this->civil_status_safe)){$sql .= "civil_status = ?,";$values[] = $this->civil_status_safe;$type .="s";}
     if(!is_null($this->nationality_safe)){$sql .= "nationality = ?,";$values[] = $this->nationality_safe;$type .="s";}
     if(!is_null($this->email_safe)){$sql .= "email = ?,";$values[] = $this->email_safe;$type .="s";}
     if(!is_null($this->father_name_safe)){$sql .= "father_name = ?,";$values[] = $this->father_name_safe;$type .="s";}
     if(!is_null($this->father_work_safe)){$sql .= "father_work = ?,";$values[] = $this->father_work_safe;$type .="s";}
     if(!is_null($this->mother_name_safe)){$sql .= "mother_name = ?,";$values[] = $this->mother_name_safe;$type .="s";}
     if(!is_null($this->mother_work_safe)){$sql .= "mother_work = ?,";$values[] = $this->mother_work_safe;$type .="s";}
     if(!is_null($this->elementary_safe)){$sql .= "elementary = ?,";$values[] = $this->elementary_safe;$type .="s";}
     if(!is_null($this->elem_grad_safe)){$sql .= "elem_grad = ?,";$values[] = $this->elem_grad_safe;$type .="s";}
     if(!is_null($this->highschool_safe)){$sql .= "highschool = ?,";$values[] = $this->highschool_safe;$type .="s";}
     if(!is_null($this->high_grad_safe)){$sql .= "high_grad = ?,";$values[] = $this->high_grad_safe;$type .="s";}
     if(!is_null($this->educ_others_safe)){$sql .= "educ_others = ?,";$values[] = $this->educ_others_safe;$type .="s";}
     if(!is_null($this->ice_name_safe)){$sql .= "ice_name = ?,";$values[] = $this->ice_name_safe;$type .="s";}
     if(!is_null($this->ice_relation_safe)){$sql .= "ice_relation = ?,";$values[] = $this->ice_relation_safe;$type .="s";}
     if(!is_null($this->ice_address_safe)){$sql .= "ice_address = ?,";$values[] = $this->ice_address_safe;$type .="s";}
     if(!is_null($this->ice_contact_safe)){$sql .= "ice_contact = ?,";$values[] = $this->ice_contact_safe;$type .="s";}
     if(!is_null($this->created_by_safe)){$sql .= "created_by = ?,";$values[] = $this->created_by_safe;$type .="s";}
     if(!is_null($this->created_date_safe)){$sql .= "created_date = ?,";$values[] = $this->created_date_safe;$type .="s";}
     if(!is_null($this->modified_by_safe)){$sql .= "modified_by = ?,";$values[] = $this->modified_by_safe;$type .="s";}
     if(!is_null($this->modified_date_safe)){$sql .= "modified_date = ?,";$values[] = $this->modified_date_safe;$type .="s";}
     $sql = substr($sql,0,strlen($sql)-1);
     $sql .= " WHERE $key[0] = ?";
          $statement = self::$con->getConnection()->prepare($sql);
          $type .= "s";
          $values[] = $key[1];
          for($v = 0 ; $v < count($values); $v++){$params[] = &$values[$v];}
          call_user_func_array(array($statement, "bind_param"), array_merge(array($type), $params));
          if($statement->execute()){return self::$con->affected_rows();}else{return false;}
}
/*End Update*/

/*Insert*/
public function insert(){
$sql = "INSERT INTO student_profile (";
     if(!is_null($this->id_safe)){$sql .= "id,";$values[] = $this->id_safe;}
     if(!is_null($this->STUDENT_id_safe)){$sql .= "STUDENT_id,";$values[] = $this->STUDENT_id_safe;}
     if(!is_null($this->mobile_safe)){$sql .= "mobile,";$values[] = $this->mobile_safe;}
     if(!is_null($this->province_safe)){$sql .= "province,";$values[] = $this->province_safe;}
     if(!is_null($this->city_safe)){$sql .= "city,";$values[] = $this->city_safe;}
     if(!is_null($this->brgy_safe)){$sql .= "brgy,";$values[] = $this->brgy_safe;}
     if(!is_null($this->street_safe)){$sql .= "street,";$values[] = $this->street_safe;}
     if(!is_null($this->house_no_safe)){$sql .= "house_no,";$values[] = $this->house_no_safe;}
     if(!is_null($this->birthdate_safe)){$sql .= "birthdate,";$values[] = $this->birthdate_safe;}
     if(!is_null($this->birthplace_safe)){$sql .= "birthplace,";$values[] = $this->birthplace_safe;}
     if(!is_null($this->sex_safe)){$sql .= "sex,";$values[] = $this->sex_safe;}
     if(!is_null($this->height_safe)){$sql .= "height,";$values[] = $this->height_safe;}
     if(!is_null($this->weight_safe)){$sql .= "weight,";$values[] = $this->weight_safe;}
     if(!is_null($this->civil_status_safe)){$sql .= "civil_status,";$values[] = $this->civil_status_safe;}
     if(!is_null($this->nationality_safe)){$sql .= "nationality,";$values[] = $this->nationality_safe;}
     if(!is_null($this->email_safe)){$sql .= "email,";$values[] = $this->email_safe;}
     if(!is_null($this->father_name_safe)){$sql .= "father_name,";$values[] = $this->father_name_safe;}
     if(!is_null($this->father_work_safe)){$sql .= "father_work,";$values[] = $this->father_work_safe;}
     if(!is_null($this->mother_name_safe)){$sql .= "mother_name,";$values[] = $this->mother_name_safe;}
     if(!is_null($this->mother_work_safe)){$sql .= "mother_work,";$values[] = $this->mother_work_safe;}
     if(!is_null($this->elementary_safe)){$sql .= "elementary,";$values[] = $this->elementary_safe;}
     if(!is_null($this->elem_grad_safe)){$sql .= "elem_grad,";$values[] = $this->elem_grad_safe;}
     if(!is_null($this->highschool_safe)){$sql .= "highschool,";$values[] = $this->highschool_safe;}
     if(!is_null($this->high_grad_safe)){$sql .= "high_grad,";$values[] = $this->high_grad_safe;}
     if(!is_null($this->educ_others_safe)){$sql .= "educ_others,";$values[] = $this->educ_others_safe;}
     if(!is_null($this->ice_name_safe)){$sql .= "ice_name,";$values[] = $this->ice_name_safe;}
     if(!is_null($this->ice_relation_safe)){$sql .= "ice_relation,";$values[] = $this->ice_relation_safe;}
     if(!is_null($this->ice_address_safe)){$sql .= "ice_address,";$values[] = $this->ice_address_safe;}
     if(!is_null($this->ice_contact_safe)){$sql .= "ice_contact,";$values[] = $this->ice_contact_safe;}
     if(!is_null($this->created_by_safe)){$sql .= "created_by,";$values[] = $this->created_by_safe;}
     if(!is_null($this->created_date_safe)){$sql .= "created_date,";$values[] = $this->created_date_safe;}
     if(!is_null($this->modified_by_safe)){$sql .= "modified_by,";$values[] = $this->modified_by_safe;}
     if(!is_null($this->modified_date_safe)){$sql .= "modified_date,";$values[] = $this->modified_date_safe;}
     $sql = substr($sql,0,strlen($sql)-1);
     $sql .= ") values (";
     $type = "";
     for($v = 0 ; $v < count($values); $v++){$sql .= "?,";$type .= "s";}
     $sql = substr($sql,0,strlen($sql)-1);
     $sql .= ")";
     for($v = 0 ; $v < count($values); $v++){$params[] = &$values[$v];}
     $statement = self::$con->getConnection()->prepare($sql);
     call_user_func_array(array($statement, "bind_param"), array_merge(array($type), $params));
     if($statement->execute()){
          if(isset($this->id_safe)){
               return 1;}
          else{
               return self::$con->last_id();}
          }else{return 0;}
}
/*End Insert*/
/*
##########################################################
#             >>>>>> POTATO MODELS <<<<<<                #
#      This code is computer generated. Do not modify    #
# use controllers instad.                                #
##########################################################*/


}?>