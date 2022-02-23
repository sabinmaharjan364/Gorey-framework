<?php
class Dashboard extends Controller{
    private $model;

    public function __construct(){
        if(!authCheck()){
            $msg="You need to login to access this page";
            redirect('page/login?msg='.$msg);
        }
        //new model instancee
        $this->model=$this->model('Genre');
    }
    

    public function index(){
        // $data = $this->model->getAll();
        $data="Dashboard Page";
        $this->view('dashboard', $data);     
    }
    public function order(){
        $data=$this->model->query("select * from tbl_orders where user_id=".$_SESSION['user_id']);
        $this->view('pages/order',$data);
    }
  

    
 
}
?>