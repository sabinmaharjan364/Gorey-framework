<?php
class Pages extends Controller{
    
    private $book;
    public function __construct(){
        
        //new model instancee
        $this->book=$this->model('Book');
        $this->author=$this->model('Author');
        $this->category=$this->model('Genre');
        $this->publishers=$this->model('Publisher');
        $this->user=$this->model('User');
    }
    public function index(){
        //get the data from book and author table
        $books = $this->book->paginate();
        $author = $this->author->paginate();
        $data=[
            'books'=>$books,
            'author'=>$author
        ];
        $this->view('pages/index', $data);
    }

    

    public function about(){
        $data='About';
        $this->view('pages/about', $data);
    }
    public function author(){
        //get the data from author table

        $data = $this->author->paginate();
        // P($data);
        $this->view('pages/author', $data);
    }

    public function trending(){

        $books = $this->book->paginate(); 
        $categories = $this->category->get(); 
        $data=[
            'books'=>$books,
            'categories'=>$categories
        ];
        $this->view('pages/trending', $data);
    }
    public function report(){
        $data='Report';
        $this->view('pages/report', $data);
    }

    public function cart(){
        $data='Cart';
        
        
        $this->view('pages/cart', $data);
    }
    public function showCart(){
        if(isset($_POST[''])){

            
            for($i=0;$i<count($_SESSION['src']);$i++)
            {
            echo "<div class='cart_items'>";
            echo "<img src='".$_SESSION['src'][$i]."'>";
            echo "<p>".$_SESSION['name'][$i]."</p>";
            echo "<p>".$_SESSION['price'][$i]."</p>";
            echo "</div>";
            }
        }
    }
    public function addToCart(){
        
        if(!empty($_POST['id'])) {

            $book_detail = $this->book->findByID($_POST['id']);    
            $itemArray=[
                $book_detail['id']=>[
                    'id'=>$book_detail['id'],
                    'title'=>$book_detail['title'],
                    'quantity'=>1,
                    'price'=>$book_detail['price'],
                    'image'=>$book_detail['image'],
                ]
            ];
            // print_r($itemArray);
            if(!empty($_SESSION["cart_item"])) {

                    if(in_array($book_detail["id"],array_keys($_SESSION["cart_item"]))) {
    
                        foreach($_SESSION["cart_item"] as $k => $v) {
                              if($book_detail["id"] == $k) {
                                  if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                      $_SESSION["cart_item"][$k]["quantity"] = 0;
                                  }
                                $_SESSION["cart_item"][$k]["quantity"]++;
                                // echo count($_SESSION["cart_item"]);
                              }
                        }
                    } else {
                        $_SESSION["cart_item"] = $_SESSION["cart_item"]+$itemArray;
                        // echo count($_SESSION["cart_item"]);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                    // echo count($_SESSION["cart_item"]);
                }
                echo count($_SESSION['cart_item']);

            }
        // return encode_json($data);
        // echo "hello";        
    }
    public function test(){
        
        return "hello";
    }
    public function register(){
        $data='Register';
        if(authCheck()){
            redirect('genres/index');
         } 
        $this->view('pages/register', $data);
    }
    public function login(){
        if(authCheck()){
           redirect('genres/index');
        } 
        $data="You need to login to access this page";
        $this->view('pages/login',$data);
    }
    public function search(){
        if(isset($_GET['search'])){
            $search_data=$_GET['search'];
            $genres=$this->category->get();
            $author=$this->author->get();
            $publisher=$this->publishers->get();
            $books=$this->book->get("*","title like '%".$search_data."%' or price like '%".$search_data."%'");
            if($books){
       

                $data=[
                    'genres'=>$genres,
                    'author'=>$author,
                    'books'=>$books,
                    'publishers'=>$publisher,
                ];
                $this->view('pages/search', $data);
            }else{
                $data="No result found";
                $this->view('pages/search', $data);

            }
        }
    }
    public function checkCart(){
        if(isset($_POST['total_cart_items'])){
            echo count($_SESSION['cart_item']);
            exit();
        }
        
              
    }
    // public function updateCart(){
    //     $book_detail = $this->book->findByID($_POST['id']);    

    //     if(isset($_POST['total_cart_items'])){
    //         echo count($_SESSION['cart_item']);
    //         exit();
    //     }  
    // }
    public function removeCartItem(){
        if(!empty($_POST['id'])) {
            $id=$_POST['id'];
            foreach($_SESSION["cart_item"] as $k => $v) {
    
                if($id == $k){
                    unset($_SESSION["cart_item"][$k]);
                }
                if(empty($_SESSION["cart_item"])){
                    unset($_SESSION["cart_item"]);
                    
                }

            }
            
        }
        if(isset($_SESSION['cart_item'])){
            echo count($_SESSION['cart_item']);
            
        } 

              
    }
    
    public function error_503(){

        $this->view('503');   
    }
    public function error_404(){

        $this->view('404');   
    }
    public function error_500(){
        $this->view('500');   
    }
    public function bookDetail($id){

        $result=$this->book->query("
            select tbl_books.id,tbl_books.title,tbl_books.description,tbl_books.price,tbl_books.language,tbl_books.publication_date,tbl_books.image,  tbl_author.full_name,tbl_genre.title as category,tbl_publishers.title as publisher from tbl_books
            LEFT JOIN tbl_genre ON tbl_books.genre_id = tbl_genre.id 
            LEFT JOIN tbl_author ON tbl_books.author_id = tbl_author.id    
            LEFT JOIN tbl_publishers ON tbl_books.publisher_id = tbl_publishers.id
            where tbl_books.id=".$id);
           $data= $result->fetchArray();
            // print_r($data);exit;
            // $books = $this->book->findByID('id');  
            // $author=  $this->author->findByID($books['author_id']);  
            // $genre=  $this->genre->findByID($books['genre_id']);  
            // $publisher=  $this->publisher->findByID($books['publisher_id']);  
            // $data=[
            //     'books'=>$books,
            //     'author'=>$author,
            //     'genres'=>$genres,
            //     'publisher'=>$publisher
            // ];
        $this->view('pages/singleBook',$data);   
    }
    public function book_by_category($id){
        // $this->book->get();
        $categories=$this->category->get();
        $books=$this->book->query("
        select * from tbl_books where tbl_books.genre_id=".$id
        );
        // $data=$this->book->query("
        // select tbl_books.id,tbl_books.title,tbl_books.description,tbl_books.price,tbl_books.language,tbl_books.publication_date,tbl_books.image,tbl_books.genre_id, tbl_genre.title as category from tbl_books
        // LEFT JOIN tbl_genre ON tbl_books.genre_id = tbl_genre.id 
        // where tbl_books.genre_id=".$id
        // );
        // print_r($data->fetchArray());
        // exit;
        $data=[
            'categories'=>$categories,
            'books'=>$books
        ];
        $this->view('pages/book_by_category',$data);   
    }
    public function advanceSearch(){
        // V($_POST);   
        if(isset($_POST['advance_search'])){
            $title=$_POST['title'];
            $price_amount=$_POST['price'];
            $genres=$this->category->get();
            $author=$this->author->get();
            $publisher=$this->publishers->get();

            $price_explode=(explode("-",$price_amount));
            $price_min=$price_explode[0];
            $price_max=$price_explode[1];
            $price_max_final=explode("$",$price_explode[1]);
            $price_min_final=explode("$",$price_explode[0]);
            $price_min_final_price=$price_min_final[1];
            $price_max_final_price=$price_max_final[1];

            $sql="select tbl_books.id,tbl_books.title,tbl_books.description,tbl_books.price,tbl_books.language,tbl_books.publication_date,tbl_books.image from tbl_books
             WHERE 1=1";

            if(!empty($title))
            $sql = $sql." and tbl_books.title like '%".$title."%'";

            if(!empty($_POST['genre_id'])){
                $genre_id=$_POST['genre_id'];
                $sql = $sql." and tbl_books.genre_id = '".$genre_id."'";
            }
            if(!empty($_POST['author_id'])){
                $author_id=$_POST['author_id'];
                $sql = $sql." and tbl_books.author_id = '".$author_id."'";
            }
            if(!empty($_POST['publisher_id'])){
                $publisher_id=$_POST['publisher_id'];
                $sql = $sql." and tbl_books.publisher_id= '".$publisher_id."'";
            }
            else
            $sql = $sql." and price between '".$price_min_final_price."' and '".$price_max_final_price."'";
            $sql = $sql." order by tbl_books.title";
            $books=$this->book->query($sql);
            // E($books);
            $data=[
                'genres'=>$genres, 
                'author'=>$author,
                'books'=>$books,
                'publishers'=>$publisher,
            ];
            // E($data->fetchArray());
            $this->view('pages/search',$data);   
            
        } 

       
            

        
    }
    public function checkUserExist(){
               
        if(!empty($_POST['email'])) {
       $data= $this->user->findByEmail($_POST['email']);
       if($data){
        echo "email already exist";
      
       }else{
        echo  "";
       }
    }
    }
    public function checkout(){
        $this->user->checkout();
        $data="successfully checkout";
        $this->view('pages/cart',$data);
            
    }
    public function order(){
        $data=$this->user->query("select tbl_books.title,tbl_orders.price,tbl_orders.quantity from tbl_orders
        LEFT JOIN tbl_books ON tbl_orders.book_id = tbl_books.id 
        where tbl_orders.user_id=".$_SESSION['user_id']);
        $this->view('pages/order',$data);
            
    }
    
}
?>