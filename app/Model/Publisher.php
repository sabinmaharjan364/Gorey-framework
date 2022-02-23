<?php
class Publisher extends Libcommon{
    private $db;
    public $table="tbl_publishers";
    public function __construct()
    {
         parent::__construct($this->table);
    }       
}
?>