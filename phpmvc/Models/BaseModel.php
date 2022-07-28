<?php
class BaseModel extends Database
{
    protected $connect;

    public function __construct()
    {
        $this->connect=$this->connect();
        
    }
    public function all($table,$select=['*'],$orderBy =[] ,$limit=100){
          $columns=implode(',',$select);
          $orderbystring=implode(' ',$orderBy);
          if($orderBy){ $sql="select ${columns} from ${table} order by ${orderbystring} limit ${limit}";}
          else{$sql="select ${columns} from ${table} limit ${limit}";}
          
          $query=$this->_query($sql);     
          $data=[];
          while ($row = mysqli_fetch_assoc($query)){
              array_push($data,$row);
          }
         return $data;
          
    }
    public function find($table,$id){

        //nhap//
        $tenid=substr($table,4,strlen($table));
        $sql="select * from ${table} where id_${tenid}=${id} limit 1";
        
        $data=mysqli_fetch_assoc($this->_query($sql));
        return $data;

    }
    public function findbyKeyword($table,$column,$keyword){
        $sql="select * from ".$table." where ".$column." like '%".$keyword."%'";
        
        $data=$this->getByQuery($sql);
        return $data;
    }

    public function create($table,$data=[]){
      $columns=implode(',',array_keys($data));
      $newvalues=array_map(function($value){
          return "'".$value."'";
      },array_values($data));
      $newvalues=implode(',',$newvalues);
      
      $sql="insert into ${table} values (NULL,${newvalues})";
      $this->_query($sql);
      
    }
    public function update($table,$id,$data){
      $tenid=substr($table,4,strlen($table));
      $newvalues=array_map(function($key,$value){
          return "${key}='${value}'";
      },array_keys($data),array_values($data));
      $newvalues=implode(',',$newvalues);
    
      $sql="update ${table} set ${newvalues} where id_${tenid}= ${id}";
      
      $this->_query($sql);
    }
    public function updatebyKey($table,$key,$data,$id){
       
        $newvalues=array_map(function($key,$value){
            return "${key}='${value}'";
        },array_keys($data),array_values($data));
        $newvalues=implode(',',$newvalues);
      
        $sql="update ${table} set ${newvalues} where ${key}= ${id}";
       
        
        $this->_query($sql);
      }

    public function delete($table,$id){
        $tenid=substr($table,4,strlen($table));
        $sql="delete from ${table} where id_${tenid}=${id}";
        $this->_query($sql);
    }
    public function _query($sql)
    {
        return mysqli_query($this->connect,$sql);
    }
    // phuong thuc khac//
    public function getByQuery($sql){
        $query=$this->_query($sql);
        $data=[];
        
        while($row=mysqli_fetch_assoc($query)){
            array_push($data,$row);
        }
        return $data;
    }
    public function getFistByQuery($sql){
        $query=$this->_query($sql);
        return mysqli_fetch_assoc($query);
    } 

    public function updateinfoperson($table,$tendangnhap,$data){
        $newvalues=array_map(function($key,$value){
            return "${key}='${value}'";
        },array_keys($data),array_values($data));   
        $newvalues=implode(',',$newvalues);
        $sql="update ${table} set ${newvalues} where tendangnhap ='${tendangnhap}'";
       
        $this->_query($sql);
      }

}


?>