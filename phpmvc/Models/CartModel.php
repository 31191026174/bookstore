<?php
   class CartModel extends BaseModel{
     CONST TABLE="tbl_makhuyenmai";

     public function getPromotion(){
         $sql="select * from ".self::TABLE;
         $data=$this->getByQuery($sql);
         return $data;

     }
     

     
}  
?>