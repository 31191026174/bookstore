<?php

 class CategoryController extends BaseController{

    private $categoryModel;
    private $productModel;
    public function __construct()
    {   
        $this->loadModel('CategoryModel');
        $this->categoryModel= new CategoryModel();
        $this->loadModel('ProductModel');
        $this->productModel =  new ProductModel();
        
    }
    public function index(){
      $pageTitle="Danh muc san pham theo: Laptop";
      $this->categoryModel->getAll(['*'],['id_danhmuc','desc']);
   
    }
    public function show(){
        $categoryId=$_GET['id']?? null;
        $categoryMenu=$this->categoryModel->getCategoryForMenu();
        $category=$this->categoryModel->findbyID($categoryId);
        $products=$this->productModel->getCatorgyofProduct($categoryId);

        $this->view('frontend.categories.show',['menu'=>$categoryMenu,'category'=>$category,'products'=>$products]);

        
        
    }
    public function update()
    {   
        $data=[ 
            'ten_sanpham'=>'tieunhathanh','mota'=> 'thichthehien','gia'=>0,'id_danhmuc'=>102
        ]; 
        $id=304;
        $this->categoryModel->updateData($id,$data);
    }


 }