

<link rel="stylesheet" href="./public/css/giohang.css">
<div class="header-wrapper bach">
    <div class="container-fluid ">
            <div class="row ">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
                    <div class="content-header">
                        <div class="grouplogo">
                            <a href="index.php">  <img src="./public/images/lgo.webp" alt="Logo Nhom" style=" width:158px; height:40px;"> </a> 
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 header-center">
                  
                  <form action="index.php?controller=search&action=searchByKeyword" method="POST">
                    <div class="searchbox">
                      <input type="text" value name="keyword" placeholder="Nhập từ khóa">
                      <div class="result-search-products-content" style="display:none">
                      <ul class="result-search-products" style="display:none"></ul>             
                    </button> 
                    </div> 
                    <button id="searchsubmit2"  type="submit">
                    <i class="fas fa-search"></i>
                    </button> 
                    </div>
                  </form>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
                    <div class="header-menu">         
                            <ul class="main-menu">
                                <li class="menu-item active">
                                    <a href="index.php?controller=account">
                                        <div class="iconneedborder"> <i class="fas fa-user"></i> </div> 
                                        <span class="menu-item-text"> Tài Khoản </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="index.php?controller=cart">
                                    <div class="iconneedborder"> <i class="fas fa-shopping-cart"></i> </div>
                                        <span class="menu-item-text" > Giỏ Hàng </span>
                                    </a>
                                </li>

                            </ul>                                                                                            
                    </div>
                </div>
            </div>
            <div class="row">
           
        </div>
    </div>
    <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" style="color:black">Trang chủ</a></li>
                <!-- <li class="breadcrumb-item"><a href="index.php?controller=search&action=searchByFilter&iddm=<?= $category[0]['id_danhmuc'] ?>" style="color:black"><?= $category[0]['ten_danhmuc'] ?> </a></li> -->

                <li class="breadcrumb-item active" aria-current="page"> Giỏ hàng </li>
            </ol>
</div>

<!-- Thong tin sp -->
       <div class="container-fluid" >
            <div class="row" style="min-height: 600px;">
                <div class="col-9">
                 
                <form method="POST" action="index.php?controller=cart&action=update" >   
                    <table class="table"> 
                    <thead class="thead-dark">
                    <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col" > Đơn giá</th>
                    <th scope="col"  >Số lượng</th>
                    <th scope="col" >Thành tiền</th>
                    <th scope="col"  > Thao tác </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($products)): foreach($products as $product): ?>
                    <tr>
                    <th scope="row"> <div class="smallimg"> <img src="./public/images/product/<?= $product['url'] ?>.jpg" alt="" width="75px" height="100px" >

                        <?= $product['ten_sanpham'] ?>
                        </div>
                    </th>
                    <td  > <?= number_format($product['gia'],0)?>đ </td>
                    <td  > 
                        <div class="yourcontainer">
                         <a href="index.php?controller=cart&action=changenum&id=<?= $product['id_sanpham']?>&soluong=<?=  $product['soluong'] -1 ?>"> <div class="btnadd"> -  </div> </a>
                         <input type="text" name='soluong[<?= $product['id_sanpham'] ?>]' value="<?= $product['soluong']?>" style="text-align:center" class="soluonghang"> 
                         <a href="index.php?controller=cart&action=changenum&id=<?= $product['id_sanpham']?>&soluong=<?=  $product['soluong'] +1 ?>"> <div class="btnadd"> + </div> </a>
                        </div>
                        

                    </td>
                    <td  > <?= number_format($product['soluong'] * $product['gia'],0) ?>đ </td>
                    <td  > <a href="index.php?controller=cart&action=delete&id=<?= $product['id_sanpham'] ?>"> <i class="fas fa-trash-alt" style="color:gray"></i> </a> </td>
                    </tr>

                    <?php endforeach; endif; ?>
                    </tbody>
                   </table>
                    
                </form> 
                </div>
                <div class="col-3">
                    <div class="row">
                     <div class="price">
                          <h5 id="titlep"> Đơn hàng</h5>
                         <div> 
                         <p>
                        <button class="btn btn-link khuyenmai" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Nhập mã giảm giá
                        </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body"> <form action="index.php?controller=cart&action=validatePromotion" method="POST">
                              <input type="text" id="inputmakm" name="madcnhap">
                              <input type="submit" value="Áp dụng" class="btn btn-dark btn-sm btnsub">
                              </form>
                          </div>
                          </div>     
                        </div>

                         <ul class="listprice">
                             <li class="price-item">
                              <span class="price-text"> Tạm tính </span>
                              <span class="price-value" id="tamtinh"> <?php  $sum=0;
                            if(isset($product)){
                                             
                              foreach($products as $product){
                                    $sum += $product['gia']*$product['soluong'];
                                  
                              }; 
                            //   $sum=number_format($sum,0);
                               echo number_format($sum,0);}
                               else echo '0';
                               ?> </span>
                             </li>
                             <li class="price-item">
                              <span class="price-text"> Giảm giá </span>
                              <span class="price-value" id="giamgia"> <?= number_format($promo==0?0:$promo*$sum/100,0) ?> </span>
                             </li>
                         </ul>
                         <div class="price_total">
                             <span class="price_text"> Tổng cộng </span>
                             <span class="price_content" id="giacuoi">  <?= number_format($promo==0?$sum:$sum-$promo*$sum/100,0) ?>đ </span>
                         </div>

                     </div>
                    </div>
                    <div class="row">
                     <button type="button" class="btn btn-danger submitmua"> Mua Hàng</button>
                     <div>
                     
                 </div>
                 

             </div>
               
        </div>
</div>
<script src="./public/js/login.js"></script>
        <!-- <script>
            var tongtien=document.querySelector("#tamtinh");
            var phantram=document.querySelector("#giamgia");
            var giacuoi=document.querySelector("#giacuoi");
            var b=Number(phantram.innerHTML);
            var a=Number(tongtien.innerHTML.split(',').join(''));

            phantram.innerHTML=`${new Intl.NumberFormat().format(a*b/100)}`;
            giacuoi.innerHTML=`${new Intl.NumberFormat().format(a-(a*b/100))}`;      
        </script>

      -->
  