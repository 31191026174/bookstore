<?php 
  
  class AccountController extends BaseController{
      private $accountModel;
      private $productModel;
      private $categoryModel;
      public function __construct()
      {
        $this->loadModel("AccountModel");
        $this->accountModel= new AccountModel();
        $this->loadModel('ProductModel');
        $this->productModel= new ProductModel();

        $this->loadModel('CategoryModel');
        $this->categoryModel= new CategoryModel();

      }

      public function index(){
        if(isset($_SESSION['username'])){
          header("Location: index.php?controller=account&action=login");
        }

       else $this->view('frontend.accounts.index');
      }    
      public function viewIt(){
        if(isset($_SESSION['username'])){
          $info=$this->accountModel->getInfor($_SESSION['username']);
          $categoryMenu=$this->categoryModel->getCategoryForMenu();
          $listuser=$this->accountModel->getListUser();
          if(isset($_POST['keyword'])) {$_SESSION['keyword']=$_POST['keyword'];}

          $chimuc=$_GET['chimuc']??0;
          if(isset($_GET['msg'])){ $msg=$_GET['msg'];}
          $listbook=$this->productModel->findonkeyword($_POST['keyword']??$_SESSION['keyword']);
          
          switch($_SESSION['quyen']){
            case "admin": return $this->view('frontend.accounts.adminonly',["listbook"=>$listbook,'info'=>$info,'chimuc'=>$chimuc,'categorymenu'=>$categoryMenu,'msg'=>$msg??null,'listuser'=>$listuser]); break;
            case "mod": return $this->view('frontend.accounts.modonly',["listbook"=>$listbook,'info'=>$info,'chimuc'=>$chimuc,'categorymenu'=>$categoryMenu,'msg'=>$msg??null]); break;
            
          }
        }
      }
      public function viewmsg(){
        if(isset($_SESSION['username'])){
          $info=$this->accountModel->getInfor($_SESSION['username']);
          $categoryMenu=$this->categoryModel->getCategoryForMenu();
          
          $chimuc=$_GET['chimuc']??0;
          if(isset($_GET['msg'])){ $msg=$_GET['msg'];}
          $listbook=$this->productModel->getAll();
          $listuser=$this->accountModel->getListUser();
          
          switch($_SESSION['quyen']){
            case "admin": return $this->view('frontend.accounts.adminonly',["listbook"=>$listbook,'info'=>$info,'chimuc'=>$chimuc,'categorymenu'=>$categoryMenu,'msg'=>$msg??null,'listuser'=>$listuser]); break;
            case "mod": return $this->view('frontend.accounts.modonly',["listbook"=>$listbook,'info'=>$info,'chimuc'=>$chimuc,'categorymenu'=>$categoryMenu,'msg'=>$msg??null]); break;
            
          }
        }
      }


      public function login(){
      $username=$_POST['username']??"";
      $password=$_POST['password']??"";


      if(isset($_SESSION['username'])){
        $info=$this->accountModel->getInfor($_SESSION['username']);
        $listbook=$this->productModel->getAll();
        
        $categoryMenu=$this->categoryModel->getCategoryForMenu();
        $listuser=$this->accountModel->getListUser();
        switch($_SESSION['quyen']){
          case "admin": return $this->view('frontend.accounts.adminonly',["listbook"=>$listbook,'info'=>$info,'categorymenu'=>$categoryMenu,'listuser'=>$listuser]); break;
          case "mod": return $this->view('frontend.accounts.modonly',["listbook"=>$listbook,'info'=>$info,'categorymenu'=>$categoryMenu]); break;
          case "user": return $this->view('frontend.accounts.useronly',["info"=>$info]); break;
        }
      }
      


      $result=$this->accountModel->handleLogin($username,$password);
        if($result){
          $info=$this->accountModel->getInfor($_SESSION['username']);
        $listbook=$this->productModel->getAll();
        $listuser=$this->accountModel->getListUser();
        
        $categoryMenu=$this->categoryModel->getCategoryForMenu();
        
        switch($_SESSION['quyen']){
          case "admin": return $this->view('frontend.accounts.adminonly',["listbook"=>$listbook,'info'=>$info,'categorymenu'=>$categoryMenu,'listuser'=>$listuser]); break;
          case "mod": return $this->view('frontend.accounts.modonly',["listbook"=>$listbook,'info'=>$info,'categorymenu'=>$categoryMenu]); break;
          case "user": return $this->view('frontend.accounts.useronly',["info"=>$info]); break;
        }
        }
        else { return $this->view('frontend.accounts.index',['msg'=>"dangnhapsai"]); }
          
      }
      public function res(){
        $username=$_POST['username']??"";
        $password1=$_POST['password1']??"";
        $password2=$_POST['password1']??"";
        $email=$_POST['email']??"";
        $sdt=$_POST['sdt']??"";  
        if($username && $password1 && $password2 && $email && $sdt){
          $msg=$this->accountModel->handleRes($username,$password1,$password2,$email,$sdt);
          return $this->view('frontend.accounts.index',['msg'=>$msg]);

        }
        else {return $this->view('frontend.accounts.index',['msg'=>"khongduocbotrong"]); 
        }

        
      }
      public function changeava(){
          $name=$_SESSION['username'];
          $this->accountModel->uploadAndRename("./public/images/avatar/","ava${name}.jpg");
          header("Location: index.php?controller=account");
      }
      public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['quyen']);
        header("Location: index.php?controller=account");

        
      }
      public function chinhsuathongtin(){
        $hoten=$_POST['hoten']??'';
        $matkhau=$_POST['matkhau']??'';
        echo $matkhau;
        $matkhaumoi=$_POST['matkhaumoi']??'';
        $sdt=$_POST['sdt']??'';
        $diachi=$_POST['diachi']??'';
         
        if($matkhau!=$matkhaumoi){
          
         return header("Location: index.php?controller=account");
          
        }
        if($matkhau){

        $this->accountModel->updateInfo($hoten,$matkhau,$sdt,$diachi);
        header("Location: index.php?controller=account");

        }
        

      }
      public function removeproduct(){
        $id=$_GET['id'];
        $this->productModel->deleteData($id);

        return header("Location: index.php?controller=account&action=viewit&chimuc=13");
      }
      public function removeuser(){
        $id=$_GET['id'];
        $tendangnhap=$_GET['tendangnhap'];
        $this->accountModel->deleteUser($id,$tendangnhap);
        return header("Location: index.php?controller=account&action=viewmsgadmin&chimuc=20");
 
      }
      public function viewmsgadmin(){
        if(isset($_SESSION['username'])){
          $info=$this->accountModel->getInfor($_SESSION['username']);
          $categoryMenu=$this->categoryModel->getCategoryForMenu();
          
          if(isset($_POST['keyword'])) {$_SESSION['keyword']=$_POST['keyword'];}
          if(isset($_POST['idnd'])) {$_SESSION['idnd']=$_POST['idnd'];}

          $chimuc=$_GET['chimuc']??0;
          if(isset($_GET['msg'])){ $msg=$_GET['msg'];}
          if(isset($_SESSION['keyword'])) $listbook=$this->productModel->findonkeyword($_POST['keyword']??$_SESSION['keyword']);
          else $listbook=$this->productModel->getAll();
          $listuser=$this->accountModel->getListUser($_POST['idnd']??0);
          
          
          switch($_SESSION['quyen']){
            case "admin": return $this->view('frontend.accounts.adminonly',["listbook"=>$listbook,'info'=>$info,'chimuc'=>$chimuc,'categorymenu'=>$categoryMenu,'msg'=>$msg??null,'listuser'=>$listuser]); break;
            
            
          }
        }
      }
      public function addproduct(){
        $id=$_POST['id_sanpham'];
        $ten=$_POST['ten_sanpham'];
        $iddm=$_POST['id_danhmuc'];
        $gia=$_POST['gia'];
        $url=$_POST['url'];
        $mota=$_POST['mota'];
        
        $this->productModel->AddaProduct($id,$ten,$iddm,$gia,$url,$mota);
        
        $this->accountModel->uploadAndRename("./public/images/product/","${url}.jpg");
        return header("Location: index.php?controller=account&action=viewmsg&chimuc=12&msg=done");
        
        
        

      }
      public function suaproduct(){
        $id=$_POST['id_sanpham'];
        $tacgia=$_POST['tacgia'];
        $url1=$_POST['url1'];
        $url2=$_POST['url2'];
        $url3=$_POST['url3'];
        $url4=$_POST['url4'];;
        $isHot=$_POST['isHot'];

        $this->productModel->modifyProduct($id,$tacgia,$url1,$url2,$url3,$url4,$isHot);
        return header("Location: index.php?controller=account&action=viewmsg&chimuc=12&msg=done");
      }
      public function updatequyen(){
        foreach($_POST['quyencua'] as $Idnguoidung => $quyenso ){

          $this->accountModel->updatequyennd($Idnguoidung,$quyenso);

      }
      return header("Location: index.php?controller=account&action=viewmsgadmin&chimuc=20&msg=done");
      }

}
  

?>