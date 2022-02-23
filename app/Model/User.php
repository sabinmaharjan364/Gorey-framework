<?php
class User extends Libcommon{
    public $table="tbl_users";
    public function __construct()
    {
         parent::__construct($this->table);
    }   
    
    public function login($email, $password){
        $query=$this->query("SELECT * FROM tbl_users where email ='".$email."' and security_password='".md5($password)."'");
    
        return $query->fetchArray();
		
    }
    public function checkout() {
        if(!empty($_SESSION["cart_item"])) {
          // P($_SESSION["cart_item"]);
          $user_id=$_SESSION['user_id'];
          $cart=$_SESSION['cart_item'];
        // P($user_id);
          foreach($_SESSION["cart_item"] as $k=>$v) {
           $book_id= $_SESSION['cart_item'][$k]['id'];
           $quantity= $_SESSION['cart_item'][$k]['quantity'];
           $price= $_SESSION['cart_item'][$k]['price'];
            $sql = "INSERT INTO tbl_orders(book_id,user_id,ip,quantity,price,status) VALUES ('".$book_id."','".$user_id."',1,'".$quantity."','".$price."',0)";
    
            $result=$this->query($sql);
                               
          }
          unset($_SESSION["cart_item"]);
          
          
        }
    
        }
        
        
}