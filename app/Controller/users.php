<?php
class Users extends Controller{
    private $user;
    public function __construct(){
        $this->user=$this->model('User');

    }

    public function login(){
         if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //process form 
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            //getting the input value of form field
           $data = [
               'email' => SQLite3::escapeString($_POST['email']),
               'password' => SQLite3::escapeString($_POST['password'])
           ];
           
            $loggedInUser = $this->user->login($data['email'], $data['password']);
            if($loggedInUser){
                




                echo "sucessful login";
                $this->createUserSession($loggedInUser);
            }else{
                $data="invalid credential";
                $this->view('pages/login', $data);
            }
           
            
        }
        
    }
    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

           //process form 
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
           //getting the input value of form field
          $data = [
              'full_name' => SQLite3::escapeString($_POST['full_name']),
              'email' => SQLite3::escapeString($_POST['email']),
              'dob' => SQLite3::escapeString($_POST['dob']),
              'security_password' => SQLite3::escapeString(md5($_POST['password'])),
              'user_role'=>'user',
              'user_discount'=>'0'

          ];
          
           $loggedInUser = $this->user->create($data);
           if($loggedInUser){
               $data= "sucessful Registered! now you can log in to the system";
               $this->view('pages/login', $data);
           }else{
               $data="Please insert data correctly";
               $this->view('pages/register', $data);
           
           }
          
           
       }
       
   }
     //setting user section variable
     public function createUserSession($user){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_role'] = $user['user_role'];
        if($user['user_role']=="superadmin" || $user['user_role']=="admin"){
            redirect('genres/index');
        }elseif($user['user_role']=="user"){
            redirect('pages/index');
            
        }
  
    }

    //logout and destroy user session
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        redirect('pages/login');
    }
    public function show(){
        // $data = $this->model->getAll();
        $data=$this->user->get();
        $this->view('users/index', $data);     
    }
    public function myProfile(){
        $id=$_SESSION['user_id'];
        $data=$this->user->findByID($id);
        $this->view('pages/profile', $data);
    }
    
   
}
?>