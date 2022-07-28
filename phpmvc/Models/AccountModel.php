<?php
 class AccountModel extends BaseModel{
    CONST TABLE="tbl_nguoidung";

    public function handleLogin($username,$password){
        $sql="select count(*),quyenid from ".self::TABLE." where tendangnhap='".$username."' and matkhau='".$password."' ";
        $query=$this->_query($sql);
        $row=mysqli_fetch_row($query);
        
        if($row[0]>0){
            $sql="select tenquyen from tbl_quyen where quyenid=".$row[1];
            $row=mysqli_fetch_row($this->_query($sql));
            $_SESSION['username']=$username;
            $_SESSION['quyen']=$row[0];
            mysqli_free_result($query);
            return true;
        }
        else return false;
        
    }  
    public function validateLenUP($up){
        return (strlen($up)>=8&&strlen($up)<=30); 
    }
    public function validateEmail($email){
        return filter_var($email,FILTER_VALIDATE_EMAIL)!=false?true:false;
    }
    public function existUserName($username){
        $sql="select * from tbl_nguoidung where tendangnhap ='".$username."'";
        $query=$this->_query($sql);
        $row=mysqli_num_rows($query);
        return $row>0;
    }
    public function res($username,$password1,$email,$sdt){
        $sql="insert into tbl_nguoidung values(NULL,'".mysqli_real_escape_string($this->connect,$username)."','".$password1."','".$email."',1,".$sdt.")";
        $this->_query($sql);
        $sql1="insert into tbl_thongtinnd values('".$username."','ava".$username."',NULL,NULL)";
        $this->_query($sql1);
        
    }
    public function handleRes($username,$password1,$password2,$email,$sdt){
        $vaild=($password1==$password2);
        $vaild=$vaild && $this->validateLenUP($password1);
        $vaild=$vaild && $this->validateEmail($email);
        
        if($vaild){
            if($this->existUserName($username)){
                return "exist";
            }
            else {
                $this->res($username,$password1,$email,$sdt);
                return "done";
            }
        }
        else return "saidulieu";


    }
    public function getInfor($username){
        $sql="select tbl_thongtinnd.* ,tbl_nguoidung.email as email, tbl_nguoidung.sdt as sdt from tbl_thongtinnd inner join tbl_nguoidung on tbl_nguoidung.tendangnhap = tbl_thongtinnd.tendangnhap where tbl_thongtinnd.tendangnhap='".$username."'";
     
        $data=$this->getFistByQuery($sql);
        
        return $data;
    }

    public function uploadFileTo($uploaddir,&$oldfilename){
        $filetam=$_FILES['uploadfile']['tmp_name'];
        $oldfilename=$_FILES['uploadfile']['name'];
        return move_uploaded_file($filetam,$uploaddir.$oldfilename);

    }
    public function uploadAndRename($uploaddir,$newfilename){
        $filetam=$_FILES['uploadfile']['tmp_name'];
        return move_uploaded_file($filetam,$uploaddir.$newfilename);

    }
    public function updateInfo($hoten,$matkhau,$sdt,$diachi){
        $this->updateinfoperson('tbl_nguoidung',$_SESSION['username'],array('matkhau'=>$matkhau,'sdt'=>$sdt));
        $this->updateinfoperson('tbl_thongtinnd',$_SESSION['username'],array('hovaten'=>$hoten,'diachi'=>$diachi));
        
        
    }
    public function getListUser($id=0){
        
        $sql="select tbl_nguoidung.* ,tbl_thongtinnd.hovaten as hovaten from tbl_nguoidung inner join tbl_thongtinnd on tbl_nguoidung.tendangnhap = tbl_thongtinnd.tendangnhap ";
        if($id){ $sql=$sql."where tbl_nguoidung.id_nguoidung=".$id; }
      

        // if($id){ $sql="select * from tbl_nguoidung where id_nguoidung=".$id;}
        // else
        //   {$sql="select * from tbl_nguoidung";}
        $data= $this->getByQuery($sql);
        return $data;
    }
    public function deleteUser($id,$tendangnhap){
        
        $this->delete('tbl_nguoidung',$id);
        $sql="delete from tbl_thongtinnd where tendangnhap='".$tendangnhap."'";
        $this->_query($sql);

    }
    public function updatequyennd($id,$quyenso){
        $this->updatebyKey('tbl_nguoidung','id_nguoidung',['quyenid'=>$quyenso] ,$id);

    }


}

?>