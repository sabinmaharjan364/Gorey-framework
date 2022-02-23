<?php
class Publishers extends Controller{
    private $model;
    private $table;

    public function __construct(){
        if(!authCheck()){
            $msg="You need to login to access this page";
            redirect('page/login?msg='.$msg);
        }
        //new model instancee
        $this->model=$this->model('Publisher');
        $table=$this->model->table;
    }
    

    public function index(){
        // $data = $this->model->getAll();
        $data=$this->model->get();
        $this->view('publisher/index', $data);     
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'title' => SQLite3::escapeString($_POST['title']),
                'description' => SQLite3::escapeString($_POST['description']),
                'suburb' => SQLite3::escapeString($_POST['suburb']),
                'state' => SQLite3::escapeString($_POST['state']),
                'street' => SQLite3::escapeString($_POST['street']),
                'country' => SQLite3::escapeString($_POST['country']),
                'contact_number' => SQLite3::escapeString($_POST['contact_number'])
            ];
      
            $data = $this->model->create($data);
            if($data){
                flash('success', 'Data has beeen successfully added');

                redirect('publishers/index');
            }
            
            
        }
    }
    public function edit($id){
        
       $datas = $this->model->get();
        $single=$this->model->findByID($id);
        $data=[
            'publishers'=>$datas,
            'single'=>$single

        ];
       
     
        $this->view('publisher/edit', $data);
      
        
    }
    
    public function update($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'title' => SQLite3::escapeString($_POST['title']),
                'description' => SQLite3::escapeString($_POST['description']),
                'suburb' => SQLite3::escapeString($_POST['suburb']),
                'state' => SQLite3::escapeString($_POST['state']),
                'street' => SQLite3::escapeString($_POST['street']),
                'country' => SQLite3::escapeString($_POST['country']),
                'contact_number' => SQLite3::escapeString($_POST['contact_number'])
            ];

            $single=$this->model->update($data,$id);
            if($single){
                redirect('publishers/index');
            }
        }

    }
   
    public function show($id){
        $single=$this->model->findByID($id);
        $datas = $this->model->get();
        $data=[
        'publishers'=>$datas,
        'single'=>$single

        ];
        $this->view('publisher/show',$data);

    }

    public function delete($id){
        $data=$this->model->delete($id);
        redirect('publishers/index');
    }
 
}
?>