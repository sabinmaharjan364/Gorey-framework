<?php
class Stores extends Controller{
    private $model;

    public function __construct(){
        if(!authCheck()){
            $msg="You need to login to access this page";
            redirect('page/login?msg='.$msg);
        }
        //new model instancee
        $this->model=$this->model('Store');
    }
    

    public function index(){
        // $data = $this->model->getAll();
        $data=$this->model->getQuery("*",$this->model->table);
        $this->view('store/index', $data);     
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
            ];
      
            $data = $this->model->save($data);
            if($data){
                echo "sucessful login";
                redirect('stores/index');
            }
            
            
        }
    }
    public function edit($id){
    //    echo "i am here with id=". $id;
       $datas = $this->model->getAll();
        $single=$this->model->findByID($id);
        $data=[
            'stores'=>$datas,
            'single'=>$single

        ];
       
     
        $this->view('store/edit', $data);
      
        
    }
    public function update($id){
        $data = [
            'title' => trim($_POST['title']),
            'description' => trim($_POST['description']),
            
        ];


        $single=$this->model->update($id,$data);
        if($single){
            redirect('stores/index');
        }

    }

    public function show($id){
        $single=$this->model->findByID($id);
        $datas = $this->model->getAll();
        $data=[
        'stores'=>$datas,
        'single'=>$single

        ];
        $this->view('store/show',$data);

    }
    public function delete($id){
        $data=$this->model->delete($id);
        redirect('stores/index');


    }
 
}
?>