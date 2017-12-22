<?php

require_once 'potato.connection.php';
require_once 'potato.env.php';


class Patrick {
	//editable properties
	private $table_name = "student_profile";
	private $database = "cict";
	private $classname = "StudentORM";
	private $package = "pojo";
	
	//connection
	private $dc;
	private $result;

	
	//dynamics properties
	private $dynamic_update = "true";
	private $dynamic_insert = "true";
	
	
	
	function __construct(){
		$this->dc = PotatoConnection::getInstance();
		
		$xml = new DOMDocument('1.0','utf-8');
		$implementation = new DOMImplementation();
		$xml->appendChild($implementation->createDocumentType("hibernate-mapping PUBLIC \"-//Hibernate/Hibernate Mapping DTD 3.0//EN\""."<br>"."\"http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd\""));
		
		$xml->formatOutput = true;
		$xml->preserveWhiteSpace = false;
		$hibernate_mapping = $xml->createElement("hibernate-mapping");
		
		$class = $xml->createElement("class");
		$class->setAttribute("name",$this->package.".".$this->classname);
		$class->setAttribute("table",$this->table_name);
		$class->setAttribute("catalog",$this->database);
		$class->setAttribute("dynamic-update",$this->dynamic_update);
		$class->setAttribute("dynamic-insert",$this->dynamic_insert);
		
		
		$this->result = $this->dc->query("show columns from ".$this->table_name);
		while($row = $this->result->fetch_assoc()){
			if($row['Key'] == "PRI"){
				$colid = $xml->createElement("id");
				$colid->setAttribute("name",$row['Field']);
				$colid->setAttribute("type",$this->dataType($row['Type']));
				
				$columns = $xml->createElement("column");
				$columns->setAttribute("name",$row['Field']);
				$colid->appendChild($columns);
				
				$generator = $xml->createElement("generator");
				$generator->setAttribute("class","identity");
				$colid->appendChild($generator);
				
				$class->appendChild($colid);
			}else{
				$property = $xml->createElement("property");
				$property->setAttribute("name",$row['Field']);
				$property->setAttribute("type",$this->dataType($row['Type']));
				
				$columns = $xml->createElement("column");
				$columns->setAttribute("name",$row['Field']);
				
					$spliter = explode('(',$row['Type']);
					if($spliter[0] == "int"){
						$columns->setAttribute("length","50");
					}else if($spliter[0] == "date" || $spliter[0] == "year" || $spliter[0] == "datetime"){
						//
					}else if($spliter[0] == "varchar"){
						$columns->setAttribute("length",$this->dataLength($row['Type']));
					}
				
				
				
				$property->appendChild($columns);
				
				$class->appendChild($property);
			}				
		}
		
		
		$hibernate_mapping->appendChild($class);
		
		$xml->appendChild($hibernate_mapping);
		$xml->save($this->table_name.".hbm.xml");
		

	}
	
	function dataType($string){
		$spliter = explode('(',$string);
		$type = "";
		if($spliter[0] == "int"){
			$type =  "java.lang.Integer";
		}else if($spliter[0] == "date" || $spliter[0] == "year" || $spliter[0] == "datetime"){
			$type =  "java.util.Date";
		}else if($spliter[0] == "varchar"){
			$type =  "java.lang.String";
		}
		return $type;
	}
	function dataLength($string){
		$spliter = explode('(',$string);
		$length = "";
		$length = substr($spliter[1],0,strlen($spliter[1]) -1);
		return $length;
	}
	
	

	
}

$p = new Patrick();

?>