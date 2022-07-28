<?php 
class CartController extends BaseController{
    private $productModel;
    private $cartModel;
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel= new ProductModel();
        $this->loadModel('CartModel');
        $this->cartModel= new CartModel();
    }
    public function index(){
        // $promo=$_GET['promo']??0;
        $promo=$_SESSION['phantram']??0;
        $products=$_SESSION['cart']??null;
        
        
        
        $this->view('frontend.carts.index',['products'=>$products,'promo'=>$promo]);
    }
    public function store(){
        $productId=$_GET['id']??null;
        $product=$this->productModel->findbyID($productId);
        
        if(empty($_SESSION['cart']) || !array_key_exists($productId,$_SESSION['cart'])){
            $product['soluong']=1;
            $_SESSION['cart'][$productId]=$product;
        }
        else {
            $product['soluong']=$_SESSION['cart'][$productId]['soluong'] +1;
            $_SESSION['cart'][$productId]=$product;
        }
        header('Location: index.php?controller=cart');


    }
    public function delete(){
           $productId=$_GET['id']??null;
           unset($_SESSION['cart'][$productId]);
           header("Location: index.php?controller=cart");
     
           
    }
    public function update(){
        foreach($_POST['soluong'] as $productId => $soluong ){
            if($soluong <0 || !is_numeric($soluong) ){
                continue;
            }
            if($soluong==0){
                unset($_SESSION['cart'][$productId]);
            }
            else 
               { $_SESSION['cart'][$productId]['soluong']=$soluong;}

        }
        header("Location: index.php?controller=cart");
    }
    public function validatePromotion(){
        $promotion=$this->cartModel->getPromotion();
        $string=$_POST['madcnhap'];
        
        foreach($promotion as $item){
            if($string===$item['code']){ 
                // $promo=$item['phantram'];
                $_SESSION['phantram']=$item['phantram'];
                  
        }

        }
        

        // header("Location: index.php?controller=cart&promo=".($promo??0));
        header("Location: index.php?controller=cart");

    }
    public function changenum(){
        $id=$_GET['id'];
        $soluong=$_GET['soluong'];
        $_SESSION['cart'][$id]['soluong']=$soluong;

       
        header("Location: index.php?controller=cart");
        
    }

}

?>