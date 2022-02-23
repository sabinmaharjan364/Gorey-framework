<?php
class Store extends Libcommon{
    private $db;
    public $table="tbl_stores";
    public function __construct()
    {
         parent::__construct();
    }   
    public function getAll(){
        // $query=$this->db->query('select * from tbl_stores');
        $query=$this->getQuery("*","tbl_stores");
        return $query;
    }
    
    public function getAllFramework(){
        // $query=$this->query("select * from tbl_stores");
        $query=$this->getQuery("*","tbl_stores");
        return $query; 
    }

    public function save($data){
        $query=$this->query("insert into tbl_stores(title,description) values ('".$data['title']."','".$data['description']."')");
    //    $query=$this->create("tbl_stores",$data,0);
        return $query;      
       
    }
    public function update($id,$data){
        $query=$this->query("update tbl_stores set title='".$data['title']."', description='".$data['description']."' where id='".$id."'");
        return $query;      
       
    }

    public function findByID($id){
        $query=$this->query("select * from tbl_stores where id=".$id);
        
        return $query->fetchArray();      
       
    }

    public function delete($id){
        $query=$this->query("delete from tbl_stores where id=".$id);
        
        return $query;      
       
    }


    
}
?>