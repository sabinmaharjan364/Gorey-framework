<?php
class Author extends Libcommon{
    private $db;
    public $table="tbl_author";
    public function __construct()
    {
         parent::__construct($this->table);
    }   
  
}
?>