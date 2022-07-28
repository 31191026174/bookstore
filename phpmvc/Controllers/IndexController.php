<?php

class IndexController extends BaseController{
   private $categoryModel;
   private $homeModel;
   public function __construct()
   {   
       $this->loadModel('CategoryModel');
       $this->categoryModel= new CategoryModel();
       $this->loadModel('HomeModel');
       $this->homeModel=new HomeModel();
       
   }

   public function index(){
       $categoryId=$_GET['id'] ?? null;
       $catrgoryMenu= $this->categoryModel->getCategoryForMenu();
       $listProduct=$this->homeModel->getHotProduct();
       $listBlog=$this->homeModel->getHotBlog();

       
       
       return $this->view('frontend.homes.index',['menu'=>$catrgoryMenu,"listproduct"=>$listProduct,"listblog"=>$listBlog]);
    }
}



?>