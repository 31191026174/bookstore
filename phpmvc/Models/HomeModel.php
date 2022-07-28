<?php
   class HomeModel extends BaseModel{
       CONST TABLE="tbl_chitietsanpham";
       public function getHotProduct(){
           $sql="select tbl_sanpham.*,tbl_chitietsanpham.tacgia as tacgia, tbl_chitietsanpham.url1 as url1 from tbl_sanpham inner join  ".self::TABLE." on tbl_sanpham.id_chitietsp = tbl_chitietsanpham.id_chitietsp where tbl_chitietsanpham.isHot='true'" ;
           $data=$this->getByQuery($sql);
           return $data;
       }
       public function getHotBlog(){
           $sql="select * from tbl_blog order by ngay desc limit 0,3 ";
           $data=$this->getByQuery($sql);
           return $data;
       }

   }

?>