<?php
   class SearchModel extends BaseModel{

       CONST TABLE="tbl_sanpham";
    //Tim kiem bang keyword//
       public function getTotalPage($giatu=0,$keyword=""){
            if($giatu&&$keyword){
            $sql="select * from tbl_sanpham where gia >=".$giatu." and ten_sanpham like '%".$keyword."%'";}
            else { 
                if($keyword) {$sql="select * from tbl_sanpham where ten_sanpham like '%".$keyword."%'";}
                if($giatu) {$sql="select * from tbl_sanpham where gia>=".$giatu;}
                if(!$keyword&&!$giatu) {$sql="select * from tbl_sanpham";}
            }
            $numpage=ceil(mysqli_num_rows($this->_query($sql))/9);
       
            return $numpage;
       }

       public function getListProduce($page,$giatu=0,$keyword="",$sort=""){
        $from=($page-1)*9;        

        if($giatu&&$keyword){
            $sql="select * from tbl_sanpham where gia >=".$giatu." and ten_sanpham like '%".$keyword."%'";}
        else { 
                if($keyword) {$sql="select * from tbl_sanpham where ten_sanpham like '%".$keyword."%' " ;}
                if($giatu){$sql="select * from tbl_sanpham where gia>=".$giatu;}
                if(!$keyword&&!$giatu) {$sql="select * from tbl_sanpham";}
            }   

        
        if ($sort) $sql=$sql." order by gia ".$sort;
        $sql=$sql." limit ".$from.",9";  

        $data=$this->getByQuery($sql);
       
     
        return $data;   
       }

       // Tim kim bang filter //

       public function getTotalPageByFilter($iddm,$giatu=0,$giaden=0){
        if($giatu && $giaden){
            $sql="select * from tbl_sanpham where id_danhmuc=".$iddm." and gia >= ".$giatu." and  gia <= ".$giaden;
        }
        if($giatu && !$giaden) {$sql="select * from tbl_sanpham where id_danhmuc=".$iddm." and gia >=".$giatu;
        
        }
        if(!$giatu && !$giaden){
            $sql="select * from tbl_sanpham where id_danhmuc=".$iddm;
        }
        return ceil(mysqli_num_rows($this->_query($sql))/9);
     
    }
       public function getListByFilter($page,$iddm,$giatu=0,$giaden=0,$sort=""){
        $from=($page-1)*9;
       
        if($giatu && $giaden){
            $sql="select * from tbl_sanpham where id_danhmuc=".$iddm." and gia >= ".$giatu." and  gia <= ".$giaden;
        }
        if($giatu && !$giaden) {$sql="select * from tbl_sanpham where id_danhmuc=".$iddm." and gia >=".$giatu;
        
        }
        if(!$giatu && !$giaden){
            $sql="select * from tbl_sanpham where id_danhmuc=".$iddm;
        }
        if ($sort) $sql=$sql." order by gia ".$sort;
        $sql=$sql." limit ".$from.",9";  

     
        $data=$this->getByQuery($sql);
        return $data;
        

       }
       



      
}  
?>