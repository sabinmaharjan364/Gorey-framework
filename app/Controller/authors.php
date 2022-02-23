<?php
class Authors extends Controller{
    private $author;
    public function __construct(){
        //new model instancee
        if(!authCheck()){
            redirect('pages/login');
        }elseif(authcheck()=="user"){
            redirect('pages/error_503');

        }
        $this->author=$this->model('Author');
     
       ;
    }
    

    public function index(){
        $data = $this->author->get();
        // var_dump($genres->fetchArray());
        $this->view('author/index', $data);
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            if(empty($_FILES["image"]["name"])){
                $img_name = "unknown.png";
            }
            else{
                //Validation for file formats
                $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
                if(!in_array($imageFileType,ALLOWED_FILE_FORMAT)){
                header("Location: ERROR/503.php?msg=Only JPG, JPEG and PNG files are allowed.");
                exit;
                }
                //Validation for file size
                if($_FILES['image']['size']>UPLOAD_FILE_SIZE){
                    header("Location: ERROR/503.php?msg=Maximum file size of ".UPLOAD_FILE_SIZE." bytes is only allowed.");
                    exit;
                }
  
            
                $img_name = strtolower(str_replace(" ","_",$_POST["title"])).".".$imageFileType;

                // Check if file already exists
                if (file_exists($img_name)) {
                    unlink($img_name);
                }
                //Upload File to Server
                move_uploaded_file($_FILES["image"]["tmp_name"], "public/images/uploads/author/".$img_name);
            }
            $data=[
                'full_name'=>SQLite3::escapeString($_POST['full_name']),
                'description'=>SQLite3::escapeString($_POST['description']),
                'DOB'=>SQLite3::escapeString($_POST['DOB']),
                'image'=>$img_name
                
            ];
            if($this->author->create($data)){
                redirect('authors/index');
            }else{
                echo "error";
            }
        
        }



    
    }
    public function edit($id){
        $datas = $this->author->get();
        $single=$this->author->findByID($id);
       
        $data=[
            'authors'=>$datas,
            'single'=>$single
        ];
       
     
        $this->view('author/edit', $data);
    }

    public function update($id){
        if(empty($_FILES["image"]["name"])){
            $data=[
                'title'=>SQLite3::escapeString($_POST['title']),
                'description'=>SQLite3::escapeString($_POST['description']),
                'DOB'=>SQLite3::escapeString($_POST['DOB']),
                
            ];
            $single=$this->author->update($data,$id);
            if($single){
                echo $single;
                die();
                redirect('authors/index');
            }
          }
          else{
            //Validation for file formats
            $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
            if(!in_array($imageFileType,ALLOWED_FILE_FORMAT)){
            header("Location: ERROR/503.php?msg=Only JPG, JPEG and PNG files are allowed.");
            exit;
            }
          //Validation for file size
          if($_FILES['image']['size']>UPLOAD_FILE_SIZE){
            header("Location: ERROR/503.php?msg=Maximum file size of ".UPLOAD_FILE_SIZE." bytes is only allowed.");
            exit;
        }
            $img_name = strtolower(str_replace(" ","_",$_POST["title"])).".".$imageFileType;

            // Check if file already exists
            if (file_exists($img_name)) {
            unlink($img_name);
            }

            //Upload File to Server
            move_uploaded_file($_FILES["image"]["tmp_name"], "public/images/uploads/authors/".$img_name);
            $data=[
                'full_name'=>SQLite3::escapeString($_POST['full_name']),
                'description'=>SQLite3::escapeString($_POST['description']),
                'DOB'=>SQLite3::escapeString($_POST['DOB']),
                'image'=>$img_name
                
            ];
            $single=$this->author->update($data,$id);
            if($single){
                redirect('authors/index');
            }
        }
    }
   
    public function show($id){
        $single=$this->author->findByID($id);
        $datas = $this->author->get();
        $data=[
        'author'=>$datas,
        'single'=>$single

        ];
        $this->view('author/show',$data);
    }

    public function delete($id){
        $data=$this->author->delete($id);
        redirect('authors/index');
    }
 
}
?>