<?php
class Books extends Controller{
    private $book;
    public function __construct(){
        //new model instancee
        if(!authCheck()){
            redirect('pages/login');
        }elseif(authcheck()=="user"){
            redirect('pages/error_503');

        }
        $this->book=$this->model('Book');
        $this->genre=$this->model('Genre');
        $this->author=$this->model('Author');
        $this->publisher=$this->model('Publisher');
       ;
    }
    

    public function index(){
        $books = $this->book->get();
        // var_dump($genres->fetchArray());
       
        $genres = $this->genre->get();
        $authors = $this->author->get();
        $publishers = $this->publisher->get();
        $data=[
            'genres'=>$genres,
            'books'=>$books,
            'publishers'=>$publishers,
            'authors'=>$authors
        ];
        $this->view('book/index', $data);
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
                move_uploaded_file($_FILES["image"]["tmp_name"], "public/images/uploads/books/".$img_name);
            }
            $data=[
                'title'=>SQLite3::escapeString($_POST['title']),
                'description'=>SQLite3::escapeString($_POST['description']),
                'publication_date'=>SQLite3::escapeString($_POST['publication_date']),
                'price'=>SQLite3::escapeString($_POST['price']),
                'language'=>SQLite3::escapeString($_POST['language']),
                'image'=>$img_name,
                'genre_id'=>SQLite3::escapeString($_POST['genre_id']),
                'author_id'=>SQLite3::escapeString($_POST['author_id']),
                'publisher_id'=>SQLite3::escapeString($_POST['publisher_id']),
            ];
            if($this->book->create($data)){
                redirect('books/index');
            }else{
                echo "error";
            }
        
        }



    
    }
    public function edit($id){
        $datas = $this->book->get();
        $single=$this->book->findByID($id);
        $genres = $this->genre->get();
        $authors = $this->author->get();
        $publishers = $this->publisher->get();
        $data=[
            'genres'=>$genres,
            'books'=>$datas,
            'publishers'=>$publishers,
            'authors'=>$authors,
            'single'=>$single
        ];
       
     
        $this->view('book/edit', $data);
    }

    public function update($id){
        if(empty($_FILES["image"]["name"])){
            $data=[
                'title'=>SQLite3::escapeString($_POST['title']),
                'description'=>SQLite3::escapeString($_POST['description']),
                'publication_date'=>SQLite3::escapeString($_POST['publication_date']),
                'price'=>SQLite3::escapeString($_POST['price']),
                'language'=>SQLite3::escapeString($_POST['language']),
                'genre_id'=>SQLite3::escapeString($_POST['genre_id']),
                'author_id'=>SQLite3::escapeString($_POST['author_id']),
                'publisher_id'=>SQLite3::escapeString($_POST['publisher_id'])
            ];
            $single=$this->book->update($data,$id);
            if($single){
                echo $single;
                die();
                redirect('books/index');
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
            move_uploaded_file($_FILES["image"]["tmp_name"], "public/images/uploads/books/".$img_name);
            $data=[
                'title'=>$_POST['title'],
                'description'=>$_POST['description'],
                'publication_date'=>$_POST['publication_date'],
                'price'=>$_POST['price'],
                'language'=>$_POST['language'],
                'image'=>$img_name,
                'genre_id'=>$_POST['genre_id'],
                'author_id'=>$_POST['author_id'],
                'publisher_id'=>$_POST['publisher_id'],
            ];
            $single=$this->book->update($data,$id);
            if($single){
                redirect('books/index');
            }
        }
    }
   
    public function show($id){
        $single=$this->book->findByID($id);
        $datas = $this->book->get();
        $data=[
        'books'=>$datas,
        'single'=>$single

        ];
        $this->view('book/show',$data);
    }

    public function delete($id){
        $data=$this->book->delete($id);
        redirect('books/index');
    }
 
}
?>