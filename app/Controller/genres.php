<?php
class Genres extends Controller{
    private $model;
    private $table;

    public function __construct(){
        if(!authCheck()){
            $msg="You need to login to access this page";
            redirect('page/login?msg='.$msg);
        }
        //new model instancee
        $this->model=$this->model('Genre');
        $table=$this->model->table;
    }
    

    public function index(){
        // $data = $this->model->getAll();
        $data=$this->model->get();
        $this->view('genre/index', $data);     
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'title' => SQLite3::escapeString($_POST['title']),
                'description' => SQLite3::escapeString($_POST['description']),
            ];
      
            $data = $this->model->create($data);
            if($data){
                flash('success', 'Data has beeen successfully added');

                redirect('genres/index');
            }
            
            
        }
    }
    public function edit($id){
    //    echo "i am here with id=". $id;
       $datas = $this->model->get();
        $single=$this->model->findByID($id);
        $data=[
            'genres'=>$datas,
            'single'=>$single

        ];
       
     
        $this->view('genre/edit', $data);
      
        
    }
    
    public function update($id){
        $data = [
            'title' => trim($_POST['title']),
            'description' => trim($_POST['description']),
            
        ];


        $single=$this->model->update($data,$id);
        if($single){
            redirect('genres/index');
        }

    }
   
    public function show($id){
        $single=$this->model->findByID($id);
        $datas = $this->model->get();
        $data=[
        'genres'=>$datas,
        'single'=>$single

        ];
        $this->view('genre/show',$data);

    }

    public function delete($id){
        $data=$this->model->delete($id);
        redirect('genres/index');
    }
 
}
?>