<?php
   class CategoryModel extends BaseModel{

      CONST TABLE="tbl_danhmuc";

       public function getAll($select=['*'],$orderBy=[],$limit=100){
       return $this->all(self::TABLE,$select,$orderBy,$limit);
      }
      public function findbyID($id){
         return $this->find(self::TABLE,$id);
      }
      public function deleteData($id){
         return $this->delete(self::TABLE,$id);
      }
      public function store($data){
         $this->create(self::TABLE,$data);
      }
      public function updateData($id,$data){
         $this->update(self::TABLE,$id,$data);
      }
      //Phuong thuc khac//
      public function getCategoryForMenu(){
         return $this->all(self::TABLE,['*']);
      }
}  
?>