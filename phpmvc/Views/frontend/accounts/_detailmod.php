<link rel="stylesheet" href="./public/css/mod.css">
<style>
    body{
        background-image: url('./public/images/bia.jpg');
    }
</style>


<div class="container-fluid">
        <!-- Thanh menu-->
        <div class="menu">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-8 info">
                    <img src="./public/images/image-home/logo-white.png" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-sm-6">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-4">
                    <div class="logout">
                       <a href="index.php?controller=account&action=logout" > <button  class="btn">Đăng xuất</button></a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Thẻ nav -->
        <div class="row info-content">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 col_left">
                <ul class="nav flex-column nav-pills" role="tablist">
                    <li class="nav-item"  >
                      <a class="nav-link active"  id='tab1' data-toggle="pill" href="#home" >Tài khoản của tôi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id='tab2' data-toggle="pill" href="#menu1"  >Quản lý sản phẩm</a>
                    </li>
                </ul>  
            </div>  
         
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-3 col-9 col_right">
                <div class="tab-content">
                    <!-- Tài khoản của tôi -->
                    <div id="home" class="tab-pane active">
                        <div class="home-title">
                            <h3>Thông tin tài khoản</h3>
                        </div>
                        
                        <img class="ava_account" src="./public/images/avatar/<?= $info['avatar']??'noimage' ?>.jpg" alt="">
                        <div class="info_account table-responsive">
                            <table class="bang_thong_tin table-hover" style="color:white;">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="notice-board">Thông tin của bạn</th>
                                    </tr>
                                </thead>
                                
                                <tr>
                                    <td scope="row">Họ và tên</td>
                                    <td><?= $info['hovaten']??$_SESSION['username'] ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Email</td>
                                    <td><?= $info['email'] ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">SDT</td>
                                    <td>0<?= $info['sdt'] ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Mật Khẩu</td>
                                    <td>********</td>
                                </tr>
                                <tr>
                                    <td scope="row">Địa chỉ</td>
                                    <td><?= $info['diachi']??'' ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row edit_info">
                            <div class="col-xl-2 col-lg-2 col-md-2"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Chỉnh sửa</button>    
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <button type="button" class="btn btn-danger">Đóng</button> 
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2"></div>
                        </div>
                        <!-- Trigger the modal with a button -->
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Chỉnh sửa thông tin</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 leftmodal">
                                                
                                                    <img src="./public/images/avatar/<?= $info['avatar']??'noimage' ?>.jpg" alt="">
                                                <br>
                                                <button class="btn btn-sm btn-primary andoihinh" style="margin-top:10px"> Đổi hình </button>
          <div class="doihinhnha hidden">
          <form action="index.php?controller=account&action=changeava" enctype="multipart/form-data" method="POST">
          <input type="file" name="uploadfile" class="inputfile" accept=".jpg, .png" />
          <input type="submit" value="Đổi hình" class="btn btn-sm btn-primary"  >
        
          
          </form> 
          </div>

                                            </div>  
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
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane">
                        <div class="home-title">
                            <h3>Quản lý sản phẩm</h3>
                             
                        </div>
                        
                        <ul class="nav flex-column menu-sc2">
                            <li class="menu-choice2" id="themsp"><a data-toggle="tab" id="themsp" href="#addbook">Thêm sách mới</a></li>
                            <li class="menu-choice2" > <a data-toggle="tab"  id='suasp' href="#updatebook">Cập nhật thông tin sách</a></li>
                            <li class="menu-choice2" id='timkiemsp'><a data-toggle="tab" id='timkiemsp' href="#searchbook">Tìm kiếm sản phẩm</a></li>                       
                        </ul>
                        <?php if($msg=="done"){echo " <center> <p id='needclear' style='color:#00FF66'>Thành Công! <p> </center>" ; }  ?>
                        <div class="tab-content">
                            <div id="addbook" class="tab-pane" style="color:white">
                                <form method="POST" id='addform' action="index.php?controller=account&action=addproduct" enctype="multipart/form-data">
                                    Mã sách:
                                    <input type="text" class="form-control" name="id_sanpham">
                                    Tên sách:
                                    <input type="text" class="form-control" name="ten_sanpham">
                                    Mã thể loại:
                                    <div class="form-group">
                                        <select class="form-control" form="addform" name='id_danhmuc'>

                                        <?php foreach($categorymenu as $item): ?>
                                          <option value='<?= $item['id_danhmuc']?>' ><?= $item['ten_danhmuc'] ?></option>
                                          <?php endforeach;?>
                                        </select>

                                    </div>
                                    Giá sách:
                                    <input type="number" min="1" class="form-control" name="gia">
                                    Url hình ảnh:
                                    <input type="text" class="form-control" name="url">
                                    Mô tả:
                                    <input type="text" class="form-control" name="mota">
                                    Tải hình:
                                    <div> <input type="file" name="uploadfile" class="inputfile" accept=".jpg, .png" /> </div>
                                    <br>
                                    <div style="display:flex; justify-content:space-around">
                                    <input type="submit" class="adding-btn btn" value="Thêm Vào">
                                    <input type="reset" class="btn back-btn btn-danger" value="Hủy">
                                    </div>
                                   
                                </form>
                            </div>
                            <div id="updatebook" class="tab-pane" style="color:white;">
                                <form method="POST"  action="index.php?controller=account&action=suaproduct" >
                                    Mã sách:
                                    <input type="text" class="form-control" name="id_sanpham">
                                    Tác giả:
                                    <input type="text" class="form-control" name="tacgia">
                                    
                                    Hình 1:
                                    <input type="text" class="form-control" name="url1">
                                    Hình 2:
                                    <input type="text" class="form-control" name="url2">
                                    Hình 3:
                                    <input type="text" class="form-control" name="url3">
                                    Hình 4:
                                    <input type="text" class="form-control" name="url4">

                                    Sản phẩm Hot:
                                    <input type="text" class="form-control" name="isHot">
                                   
                                    
                                    <br>
                                    <input type="submit" class="btn update-btn" value="Cập nhật">
                                    <input type="reset" class="btn back-btn btn-danger" value="Chỉnh sửa">
                                </form>
                            </div>
                            <div id="searchbook" class="tab-pane">
                                    <div class="row search">
                                        <form method="POST" action="index.php?controller=account&action=viewit&chimuc=13" class="ineedf">
                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 col-9">
                                                <input class="form-control" id = "sbook" type="text" placeholder="Nhập từ khóa cần tìm..." name="keyword">
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                                                <input type="submit" class="btn searchit" value="Tìm Kiếm" >
                                            </div>
                                            <!-- <input class="form-control" id = "sbook" type="text" placeholder="Nhập từ khóa cần tìm..." name="keyword">
                                            <input type="submit" class="btn searchit" value="Tìm Kiếm" > -->
                                        </form>
                                    </div>
                                    <div class="products table-responsive">
                                            <table class="product-searching-results table-hover"  style="color:white;">
                                                <thead>
                                                    <tr>
                                                        <th colspan="8" class="notice-board">DANH SÁCH KẾT QUẢ TÌM KIẾM</th>
                                                    </tr> 
                                                    <tr>
                                                        <th class="product-searching-main-info" >STT</th>
                                                        <th class="product-searching-main-info">Mã sách</th>
                                                        <th class="product-searching-main-info" >Hình ảnh </th>
                                                        <th class="product-searching-main-info" >Tên sách</th>
                                                        <th class="product-searching-main-info" >Giá bán</th>
                                                        <th class="product-searching-main-info" >Mô tả</th>
                                                        <th class="product-searching-main-info" >Tình Trạng</th>
                                                        <th class="product-searching-main-info" >Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=0; ?>
                                                   <?php foreach($listbook as $book):  ?>
                                                    <tr>
                                                        <td> <?= ++$i; ?></td>
                                                        <td><?= $book['id_sanpham'] ?></td>
                                                        <td>
                                                            <a href="#"><img src="./public/images/product/<?=$book['url']?>.jpg" alt=""></a>
                                                        </td>
                                                        <td><?= $book['ten_sanpham'] ?></td>
                                                        <td><?= $book['gia'] ?></td>
                                                        <td><?= $book['mota'] ?></td>
                                                        <td> Còn Hàng </td>
                                                        <td><a class="close" href="index.php?controller=account&action=removeproduct&id=<?=$book['id_sanpham'] ?>"><i style="color:red" class="fas fa-times"></i></a></td>
                                                    </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>           
                                        </div>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </div>

    <?php if($chimuc==13): ?>
           <script> 
                    const chi1=document.querySelector('#tab1');
                    const chi2=document.querySelector('#tab2');
                    const tabcontent1=document.querySelector('#menu1');
                    const tksp=document.querySelector('#timkiemsp');            
                    const home=document.querySelector('#home');
                    chi2.classList.add('active');
                    chi1.classList.remove('active');
                    tabcontent1.classList.add('active');
                    home.classList.remove('active');

                    tksp.classList.add('active');
                    document.querySelector('#searchbook').classList.add('active');
                    

            </script>
            <?php elseif($chimuc==12):?>
                <script> 
                    const chi1=document.querySelector('#tab1');
                    const chi2=document.querySelector('#tab2');
                    const tabcontent1=document.querySelector('#menu1');
                    const tksp=document.querySelector('#timkiemsp');            
                    const home=document.querySelector('#home');
                    const needclear=document.querySelector('#needclear');
                    
                    chi2.classList.add('active');
                    chi1.classList.remove('active');

                    tabcontent1.classList.add('active');
                    home.classList.remove('active');

                    setTimeout(()=>{
                       needclear.parentElement.removeChild(needclear);
                    },2000);



            </script>


            <?php endif;?>

            <script src="./public/js/usermod.js"></script>