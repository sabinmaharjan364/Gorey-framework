<?php
class Book extends Libcommon{
    public $table="tbl_books";
    public function __construct()
    {
         parent::__construct($this->table);
    }   
    
}
?>