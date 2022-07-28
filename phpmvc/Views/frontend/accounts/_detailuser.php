<link rel="stylesheet" href="./public/css/user.css" />
<style>
    body{
	background-image: url("./public/images/bia.jpg");
	background-size: cover;
	color: papayawhip;
}

</style>
<div class="container-fluid" style="min-height:780px" >
      <!-- Thanh menu-->
      <div class="menu">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 info">
                <img src="./public/images/image-home/logo-white.png" alt="">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-sm-6">
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 logout">
                <a href="index.php?controller=account&action=logout" id="log-out" class="btn"> Đăng Xuất </a>
            </div>
        </div>
    </div>


      <!-- Thẻ nav -->
      <div class="row account-info-private">
        <div class="col-12 col-md-4 col-lg-3 left" style="margin-top:-10px;">
          <h3>Tài khoản của tôi</h3>
          <img
            src="./public/images/avatar/<?= $info['avatar']??'noimage' ?>.jpg"
            alt="hello"
          />
          <br />
          <button class="btn btn-sm btn-primary andoihinh" style="margin-top:10px"> Đổi hình </button>
          <div class="doihinhnha hidden">
          <form action="index.php?controller=account&action=changeava" enctype="multipart/form-data" method="POST">
          <input type="file" name="uploadfile" class="inputfile" accept=".jpg, .png" />
          <input type="submit" value="Đổi hình" class="btn btn-sm btn-primary"  >
        
          
          </form> 
          </div>
        </div>


        <div class="col-12 col-md-8 col-lg-9 right">
         <table class="thongtinnguoidung">
           <thead>
             <tr>
               <th colspan="2" id="tilte-account">
                  Thông tin của bạn
               </th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td> Họ và tên </td>
               <td><?= $info['hovaten']??$_SESSION['username'] ?> </td>
             </tr>

             <tr>
               <td>Email</td>
               <td><?= $info['email'] ?></td>
             </tr>
             
             <tr>
               <td>Số điện thoại</td>
               <td>0<?= $info['sdt'] ?></td>
             </tr>

             <tr>
               <td>Mật khẩu</td>
               <td>********</td>
             </tr>
             <tr>
               <td> Địa chỉ</td>
               <td><?= $info['diachi']??'' ?></td>
             </tr>
           </tbody>
         </table>


         <div class="row bottom">
          <div class="col-xl-2 col-lg-2 col-md-2"></div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Chỉnh sửa thông tin</button>    
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
              <button type="button" class="btn btn-danger btn-sm">Đóng</button> 
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2"></div>
      </div>

         <!-- Trigger the modal with a button -->
                        <!-- Modal -->


        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  
                                  <h4 class="modal-title">Chỉnh sửa thông tin</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="row">
                                     
                                      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-3 col-9 rightmodal">
                                          <form method="POST" action="index.php?controller=account&action=chinhsuathongtin" >
                                              Họ và tên:
                                              <input type="text" class="form-control" name="hoten">
                                              Mật khẩu:
                                              <input type="password" class="form-control" id="matkhau" name="matkhau">
                                              <p id='msg1' style="color:red"></p>    
                                               Mật khẩu mới:
                                              <input type="password" min="1" class="form-control" id="matkhaumoi" name="matkhaumoi">
                                              <p id='msg' style="color:red"></p>
                                              SDT:
                                              <input type="text" class="form-control" name="sdt">
                                              Địa chỉ:
                                              <input type="text" min="1" class="form-control" name="diachi">
                                          

                                          
                                          <div class="row edit_info">
                                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 save">
                                                  <input type="submit" class="btn-info" value="Lưu thông tin">
                                              </div>
                                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 delete">
                                                  <input type="button" class="btn-danger" value="Xóa tài khoản">
                                              </div>
                                          </div>
                                          </form>
                                      </div>
                                      
                                  </div>
                              </div>
                              <div class="modal-footer">
                                 <a href="index.php"> <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button> </a>
                              </div>
                          </div>
                      </div>
                  </div>
                <script src="./public/js/usermod.js"></script>
                  <!-- <script>
                    const mk1=document.getElementById("matkhau");
                    const mk2=document.getElementById('matkhaumoi');
                    const msg=document.getElementById('msg');
                    const msg1=document.getElementById('msg1');
                    const btn=document.querySelector(".doihinhnha");
                    const and=document.querySelector(".andoihinh");
                    and.addEventListener('click',()=>{
                      btn.classList.remove('hidden');
                      and.classList.add('hidden');
                    })
                  
                    
                    mk2.addEventListener("change",()=>{
                      if(mk1.value!=mk2.value){
                        msg.innerHTML='Mật khẩu không khớp';
                      }
                      else msg.innerHTML='';
                    });
                    mk1.addEventListener("change",()=>{
                       
                      if(mk1.value.split('').length<8){
                        msg1.innerHTML="Tối thiểu 8 kí tự";
                      }
                      else msg1.innerHTML='';
                    })
                  
                 
                  </script> -->

  