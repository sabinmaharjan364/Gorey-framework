<?php
//Start session
session_start();

//Check whether the session variable SESS_MEMBER_ID is present or not

// if (!isset($_SESSION['id']) && (isset($_POST['submit']) == '')) {
//     header("location:index.php?page=login");
// }

// $session_id = $_SESSION['id'];
$_SESSION['toastr'] = array(
    'type'      => 'error', // or 'success' or 'info' or 'warning'
    'message' => 'error message here!',
    'title'     => 'title here!'
);

function authCheck(){
    if(isset($_SESSION['user_id'])){
        // echo $_SESSION['id'];
        if($_SESSION['user_role']=="superadmin"){
            return "superadmin";
        }elseif($_SESSION['user_role']=="admin"){
            return "admin";
        }else{
            return "user";
        }
    }else{
        return false;
    }
}

function checkCart(){
    if(isset($_SESSION['cart_item']))
  {
	return true;
  }else{
      return false;
  }
}


function flash($name = '', $message = '', $class = 'alert alert-success'){
    if(!empty($name)){
        if(!empty($message) && empty($_SESSION[$name])){
            if(!empty($_SESSION[$name])){
                unset($_SESSION[$name]);
            }

            if(!empty($_SESSION[$name . '_class'])){
                unset($_SESSION[$name]);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        }elseif(empty($message) && !empty($_SESSION[$name])){
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : ''; 
            echo '<div class="'. $class .'" id="msg-flash">'. $_SESSION[$name]. '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}
?>