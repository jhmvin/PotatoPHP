<?php
require_once 'potato.connection.php';
require_once 'potato.env.php';


class Spongebob {
	//editable properties
	private $table_name = "import_student";
	private $database = "cict";
	private $classname = "StudentORM";
	private $package = "pojo";
	
	//connection
	private $dc;
	private $result;

	
	//dynamics properties
	private $dynamic_update = "true";
	private $dynamic_insert = "true";
	
	
	private $nl = "<br>";
	private $tab = "&nbsp&nbsp&nbsp&nbsp&nbsp";
	
	function __construct(){
		$this->dc = PotatoConnection::getInstance();
		
		
		$this->imports();
		echo $this->nl.$this->nl;
		
		$this->details();
		echo $this->nl.$this->nl;
		
		$this->class_header();
		echo $this->nl;
		
		$this->class_start(); //start class
		echo $this->nl.$this->nl;
		
		$this->declare_vars();
		echo $this->nl.$this->nl;
		
		$this->generate_contents();
		echo $this->nl.$this->nl;
		
		$this->class_end(); //end class
	}
	
		function details(){
		$dt = new DateTime();
		$cache = "//|Date Created: ".$dt->format('Y-m-d H:i:s'). $this->nl;
		$cache .= "//|jhmvin". $this->nl;
		$cache .= "<pre>/*". $this->nl;
		$cache .= "##########################################################" . $this->nl;
		$cache .= "# Mashed Potato Object Relational Mapping                #" . $this->nl;
		$cache .= "# version 17.03.07                                       #" . $this->nl;
		$cache .= "# Hibernate Extension Object                             #" . $this->nl;
		$cache .= "# College of Information and Communications Technology   #" . $this->nl;
		$cache .= "# Bulacan State University                               #" . $this->nl;
		$cache .= "# Author: Jhon Melvin N. Perello -- BSIT3A-G1            #" . $this->nl;
		$cache .= "#--------------------------------------------------------#" . $this->nl;
		$cache .= "#             >>>>>> POTATO MODELS <<<<<<                #" . $this->nl;
		$cache .= "#      This code is computer generated. Do not modify    #" . $this->nl;
		$cache .= "# use controllers instad.                                #" . $this->nl;
		$cache .= "##########################################################*/</pre>" . $this->nl;

		echo $cache;
	}
	
	function imports(){
		echo "package $this->package;".$this->nl.$this->nl;
		echo "import javax.persistence.Column;".$this->nl;
		echo "import javax.persistence.Entity;".$this->nl;
		echo "import javax.persistence.GeneratedValue;".$this->nl;
		echo "import static javax.persistence.GenerationType.IDENTITY;".$this->nl;
		echo "import javax.persistence.Id;".$this->nl;
		echo "import javax.persistence.Table;".$this->nl;
		echo "import javax.persistence.Temporal;".$this->nl;
	}
	
	function class_header(){
		echo "@Entity".$this->nl;
		echo "@org.hibernate.annotations.Entity(dynamicInsert = $this->dynamic_insert , dynamicUpdate = $this->dynamic_update)".$this->nl;
		echo "@Table(name = \"$this->table_name\", catalog = \"$this->database\")";
	}
	
	function class_start(){
		echo "public class $this->classname implements java.io.Serializable {";
	}
	
	function class_end(){
		echo "}";
	}
	
	function declare_vars(){
		$this->result = $this->dc->query("show columns from ".$this->table_name);
		echo "/*Declarations*/<br>";
		while($row = $this->result->fetch_assoc()){
			echo "private ".$this->dataType($row['Type'])." ".$row['Field'].";<br>";
		}
		echo "/*End Declarations*/";
	}
	
	function generate_contents(){
		$this->result = $this->dc->query("show columns from ".$this->table_name);
		while($row = $this->result->fetch_assoc()){
			if($row['Key'] == "PRI"){
				echo "@Id".$this->nl;
				if($row['Extra'] == "auto_increment"){
					echo "@GeneratedValue(strategy = IDENTITY)".$this->nl;
				}
			}
				//get nullable
				$nullating = "";
				if($row['Null'] == "YES"){
					$nullating = "true";
				}else{
					$nullating = "false";
				}
				
				//get length
				$spliter = explode('(',$row['Type']);
				$type = "";

				//annotation
				if($spliter[0] == "int"){
					echo "@Column(name = \"".$row['Field']."\", nullable = ".$nullating.", length = ".$this->dataLength($row['Type']).")".$this->nl;
				}else if($spliter[0] == "date" || $spliter[0] == "year" || $spliter[0] == "datetime"){
					echo "@Column(name = \"".$row['Field']."\", nullable = ".$nullating.")".$this->nl;
					echo "@Temporal(javax.persistence.TemporalType.DATE)".$this->nl;
				}else if($spliter[0] == "varchar"){
					echo "@Column(name = \"".$row['Field']."\", nullable = ".$nullating.", length = ".$this->dataLength($row['Type']).")".$this->nl;
				}
				
				//getter
				echo "public ".$this->dataType($row['Type'])." get".ucfirst($row['Field'])."(){".$this->nl;
				
				echo $this->tab."return this.".$row['Field'].";";
				echo $this->nl."}".$this->nl;
				//setter
				echo "public "."void"." set".ucfirst($row['Field'])."(".$this->dataType($row['Type'])." ".$row['Field']."){".$this->nl;
				
				echo $this->tab."this.".$row['Field']." = ".$row['Field']." ;";
				echo $this->nl."}".$this->nl;
				
			
		}
	}
	
	
	//class functions
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

$sb = new Spongebob();

//$dc = PotatoConnection::getInstance();
//$sql = "show columns from student_profile";
//$result = $dc->query($sql);
//show_table($result);
?>



<?php function show_table($result){?>
<table border = 1 width = 100%>
<tr> <th>Field</th><th>Type</th><th>Nullable</th><th>Key</th><th>Default</th><th>Extra</th> </tr>
<?php

		while($row = $result->fetch_assoc()){
?>
		<tr> <td align = center><?php echo $row['Field'] ?></td> 
			 <td align = center><?php echo $row['Type'] ?></td> 
			 <td align = center><?php echo $row['Null'] ?></td> 
			 <td align = center><?php echo $row['Key'] ?></td> 
			 <td align = center><?php echo $row['Default'] ?></td> 
			 <td align = center><?php echo $row['Extra'] ?></td> 
		</tr>
<?php }} //end table?>
</table>
<?php # end function ?>
