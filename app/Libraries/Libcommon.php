<?php
  /*
   * SQLITE3 Database Class
   * Connect to database
   * Create query statements
   * Return rows and results
   * CRUD OPeration
   * 
   */
  class Libcommon{
    private $db;
    private $stmt;
    private $error;
    private $table;

    public function __construct($table=""){
      $this->table=$table;
      $this->openDBConnection();
        
    }
    public function closeDBConnection($db){
      $this->db = null;
    }
    public function table($table){
      return $this->table;
    }
    
    // Prepare statement with query
    public function openDBConnection(){
      try{
      //  echo dirname(dirname(dirname(__FILE__))).'/database/'.DB;
      // Opening and reading of SQLITE database
          $this->db=new SQLITE3(dirname(dirname(dirname(__FILE__))).'/database/'.DB);
      //   if (class_exists('SQLite3')) {
      //     echo 'SQLite3 extension loaded<br>';
      //  }
  
        } catch(Exception $e){
          $this->error = $e->getMessage();
          echo $this->error;
        }
    }

    //statement with query
    public function query($sql){
      return $this->db->query($sql);
    }

    // Get the data which has following id
    public function findByID($id,$fields="*"){
      $sql = "SELECT $fields FROM $this->table WHERE id=$id";
      //echo $sql;
     
        $result = $this->query($sql);
        if($this->query($sql))
        {
          return $result->fetchArray(SQLITE3_ASSOC);
        }
        else
        {
          return "ERROR! failed to update ".$this->table." Info.";
        }

    }
  // Get the data which has following email
  public function findByEmail($id,$fields="*"){
    $sql = "SELECT $fields FROM $this->table WHERE email='$id'";
   
      $result = $this->query($sql);
      if($this->query($sql))
      {
        return $result->fetchArray(SQLITE3_ASSOC);
      }
      else
      {
        return "ERROR! failed to update ".$this->table." Info.";
      }

  }
    public function get($fields="*",$condition="1=1"){
      $sql = "SELECT $fields FROM $this->table WHERE $condition";
     
        $result = $this->query($sql);
        if($result)
        {
          return $result;
        }
        else
        {
          return "ERROR! failed to update ".$this->table." Info.";
        }
      
    }
  
    public function paginate($fields="*",$value=LIMIT){
      $sql = "SELECT $fields FROM $this->table limit $value";
      // return $sql;
      //echo $sql."<br>";
      
        $result = $this->query($sql);
        if($result)
        {
          return $result;
        }
        else
        {
          return "ERROR! failed to update ".$this->table." Info.";
        }
    
    }
    
    

    

	public function getArray($fields="*",$condition="1=1"){
	
		  $sql = "SELECT $fields FROM $this->table WHERE $condition";
		  //echo $sql;
	
      $result = $this->query($sql);
      if($this->query($sql))
			{
				return $result->fetchArray(SQLITE3_ASSOC);
			}
			else
			{
				return "ERROR! failed to update ".$this->table." Info.";
			}
		
		
  }
  
  public function create($data) {


    $key = array_keys($data);
    $val = array_values($data);
    if($val==""){
      $_SESSION['Error']=[];
      $_SESSION['Error'];
      
    }else{
          

    $sql = "INSERT INTO $this->table (" . implode(', ', $key) . ") "
         . "VALUES ('" . implode("', '", $val) . "')";
 
      $result=$this->query($sql);
      if($result){
        $_SESSION['success']="Data has been successfully inserted";
        return $this->db->lastInsertRowID(); 

      }else{
        // $_SESSION['error']="Data has been successfully inserted";
       
        return "error while inserting data";
      }
  }
  }
  
  public function update($data,$id)
	{
		$counter = 0;
		$sql = "UPDATE $this->table SET ";
		foreach($data as $key=>$value)
		{
			++$counter;
			$sql.=$key."='".addslashes(trim($value))."'";
			if($counter<count($data))
			{
				$sql .=", ";
			}
		}
		$sql .= " WHERE id=".$id;
		//return $sql."<br>";
		
			if($this->query($sql))
			{
				return "success";
			}
			else
			{
				return "ERROR! failed to update ".$this->table." Info.";
			}
		
  }
  public function delete($id)
	{
		$sql = "DELETE FROM $this->table WHERE id=$id";
	
			if($this->query($sql))
			{
				return "The selected ".ucfirst(str_replace("_"," ",str_replace("tbl_","",$this->table)))." has been deleted Successfully.";
			}
			else
			{
				return "ERROR! failed to delete selected ".ucfirst(str_replace("_"," ",str_replace("tbl_","",$this->table))).".";
			}
		
	}

  public function sum(){

  }
  public function count(){
    
  }
  public function clean4urlcode($urlcode)
	{
		$urlcode = str_replace(".","",stripslashes($urlcode));
		$urlcode = str_replace("'","",$urlcode);
		$urlcode = str_replace('"','',$urlcode);
		$urlcode = str_replace('?','',$urlcode);
		$urlcode = str_replace(":","-",$urlcode);
		$urlcode = str_replace(";","-",$urlcode);
		$urlcode = str_replace("<","-",$urlcode);
		$urlcode = str_replace(">","-",$urlcode);
		$urlcode = str_replace("(","-",$urlcode);
		$urlcode = str_replace(")","",$urlcode);
		$urlcode = str_replace("{","-",$urlcode);
		$urlcode = str_replace("}","",$urlcode);
		$urlcode = str_replace("[","-",$urlcode);
		$urlcode = str_replace("]","",$urlcode);
		$urlcode = str_replace("|","",$urlcode);
		$urlcode = str_replace("\\","",$urlcode);
		$urlcode = str_replace("#","",$urlcode);
		$urlcode = trim($urlcode);
		$urlcode = str_replace(" ","-",stripslashes($urlcode));
		$urlcode = str_replace("/","-",stripslashes($urlcode));
		$urlcode = str_replace(",","",stripslashes($urlcode));
		$urlcode = str_replace('&','and',$urlcode);
		$urlcode = str_replace("--","-",stripslashes($urlcode));
		$urlcode = str_replace("---","-",stripslashes($urlcode));
		$urlcode = str_replace("----","-",stripslashes($urlcode));
		$urlcode = str_replace("-----","-",stripslashes($urlcode));
		return strtolower($urlcode);
  }
  
  function CleanString($str)
	{
		$st = htmlentities(sqlite_escape_string(trim($str)));
		return $st;
	}
	function OutString($str)
	{
		$st = html_entity_decode(stripslashes($str));
		return $st;
	}

  
 
}