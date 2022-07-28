<?php 
  class SearchController extends BaseController{
    private $categoryModel;
    private $searchModel;
    public function __construct()
    {   
        $this->loadModel('CategoryModel');
        $this->categoryModel= new CategoryModel();
        $this->loadModel('SearchModel');
        $this->searchModel= new SearchModel();
        
    }

    public function index(){
        $page=$_GET['page']??1;
        $giatu=$_GET['giatu']??0;
        $sort=$_GET['orderby']??'';

        $totalpage=$this->searchModel->getTotalPage($giatu);// toan bo trang//
        
        $categoryMenu= $this->categoryModel->getCategoryForMenu();// Menu//

        $listProduct=$this->searchModel->getListProduce($page,$giatu,'',$sort); //Full san pham//

        return $this->view('frontend.searchs.index',['listproduct'=>$listProduct,'menu'=>$categoryMenu,'totalpage'=>$totalpage,'page'=>$page]);
    }


    public function searchByKeyword(){
        $page=$_GET['page']??1;
        // $keyword=$_GET['keyword']??"";
        $keyword=$_POST['keyword']??"";
        if(isset($_GET['keyword'])){
          $keyword=$_GET['keyword'];
        }

        $giatu=$_GET['giatu']??0;

        $sort=$_GET['orderby']??'';
          
        $totalpage=$this->searchModel->getTotalPage($giatu,$keyword);

        $listProduct=$this->searchModel->getListProduce($page,$giatu,$keyword,$sort);

        $categoryMenu= $this->categoryModel->getCategoryForMenu();
        

        return $this->view('frontend.searchs.index',['listproduct'=>$listProduct,'menu'=>$categoryMenu,'totalpage'=>$totalpage,'page'=>$page]);
    }

    public function searchByFilter(){
      $page=$_GET['page']??1;
      $iddm=$_GET['iddm'];
      $giatu=$_GET['giatu']??0;
      $giaden=$_GET['giaden']??0;

      $sort=$_GET['orderby']??'';
      
      $totalpage=$this->searchModel->getTotalPageByFilter($iddm,$giatu,$giaden);

      $listProduct=$this->searchModel->getListByFilter($page,$iddm,$giatu,$giaden,$sort);

      $categoryMenu= $this->categoryModel->getCategoryForMenu();

      return $this->view('frontend.searchs.index',['listproduct'=>$listProduct,'menu'=>$categoryMenu,'totalpage'=>$totalpage,'page'=>$page]);
     

    }
 
}
  

?>