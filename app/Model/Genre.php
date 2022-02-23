<?php
class Genre extends Libcommon{
    
    public $table="tbl_genre";

    public function __construct()
    {
         parent::__construct($this->table);
       
    }   
    // public function getAll(){
    //     // $query=$this->db->query('select * from tbl_genre');
    //     $query=$this->get();
    //     return $query;
    // }
    
    // public function getAllFramework(){
    //     // $query=$this->query("select * from tbl_genre");
    //     $query=$this->getQuery("*",$this->table);
    //     return $query; 
    // }

    // public function save($data){
    //     $query=$this->query("insert into tbl_genre(title,description) values ('".$data['title']."','".$data['description']."')");
    // //    $query=$this->create("tbl_genre",$data,0);
    //     return $query;      
       
    // }
    // public function update($id,$data){
    //     $query=$this->query("update tbl_genre set title='".$data['title']."', description='".$data['description']."' where id='".$id."'");
    //     return $query;      
       
    // }

    // public function findByID($id){
    //     $query=$this->query("select * from tbl_genre where id=".$id);
        
    //     return $query->fetchArray();      
       
    // }

    


    
}
?>