
    
 <link rel="stylesheet" href="./public/css/search-result.css">
   
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

        </div>
    </div>

 

    <!--Breadcrumb-->
    <div aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php" style="font-size:16px">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="font-size: 16px;">Tìm kiếm</li>
      </ol>
    </div>

    <!--carousel-->
    <div class="container-fluid">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./public/images/imagesearch/corousel (1).jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
            src="./public/images/imagesearch/corousel (2).jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="./public/images/imagesearch/corousel (3).jpg"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!--Search summary-->
    <div class="container-fluid" id="search-summary">
      <center> <p id="resulttitle"> Hiển thị <?= count($listproduct) ?> kết quả tìm kiếm trong trang </p> </center> 
     
    </div>

    <!--Search section-->
    <div class="search-section">
      <div class="container-fluid">
        <div class="row">
          <!--left-->
          <div class="col-5 col-md-3 col-lg-2 left-bar">
          <p class="titlefilter">Bộ lọc</p>
            <div class="row">
              <div class="col-12">
                <p class="titlefilter2">Giá</p>
                <?php for($i=1;$i<=5;$i++){
                echo "
                <div class='form-check' style='margin-bottom:15px; margin-left:-10px;'>
                  <label class='form-check-label' for='flexRadioDefault1'>
                    <a href='".(searchlinkstring(0,$_GET['iddm']??0,$i*20000))."' class='item-cate'>  Từ ".($i*20).".000đ </a>
                  </label>
                </div>";
                } 
                ?>

              </div>
            </div>

            <div class="row">
              <div class="col-12">
              <p class="titlefilter2">Danh mục</p>



              <?php 
              foreach($menu as $key=>$cate){
                 echo "<div class='form-check'>
                  <input
                    class='form-check-input'
                    type='radio'
                    id='flexRadioDefault1'
                  />
                  <label class='form-check-label' for='flexRadioDefault1'>
                     <a href='".(searchlinkstring(0,$cate['id_danhmuc']))."&action=searchByFilter' class='item-cate'>".$cate['ten_danhmuc']."</a>
                  </label>
                </div>";
              }
            ?>

            

            </div>

          
          </div>
          </div>

          <!--right-->
          <div class="col-7 col-md-9 col-lg-10 search-main">
            <div class="row sort-by">
              <h5>Sắp xếp theo</h5>
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                >
                  Giá
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?= searchlinkstring($_GET['page']??0,$_GET['iddm']??0,$_GET['giatu']??0,'asc') ?>">Thấp đến cao</a>
                  <a class="dropdown-item" href="<?= searchlinkstring($_GET['page']??0,$_GET['iddm']??0,$_GET['giatu']??0,'desc') ?>">Cao đến thấp</a>
                </div>
              </div>
            </div>

            <!--Product-->
            <div class="row">
               <div class='col-12 product-item' >
              <?php               
              if(!empty($listproduct)){
               foreach($listproduct as $key=>$product){
                // echo "
                // <div class='card' style='width:12rem ;margin-top:20px;'>
                //   <img src='./public/images/product/".$product['url'].".jpg' class='card-img-top' style='height: 350px;' alt='No image' />
                //   <div class='card-body'>
                //     <p  class='card-title'>".$product['ten_sanpham']."</p>
                //     <p class='card-text'>".$product['gia']."đ </p>
                //     <a href='#' class='btn btn-primary'>Thêm vào giỏ</a>
                //   </div>
                // </div>";
                echo"<div class='card' style='width:12rem ;margin-top:20px;'>
                <div class='imgpro'>
                <img src='./public/images/product/".$product['url'].".jpg' class='card-img-top' style='height: 350px;' alt='No image' />
                <a href='index.php?controller=cart&action=store&id=".$product['id_sanpham']."'> <button class='threeiconcart hidden '> <i class='fas fa-shopping-cart'></i> </button> </a>
                <a href='index.php?controller=product&action=detailproduct&idsp=".$product['id_sanpham']."'> <button class='threeicon hidden'> <i class='fas fa-search'></i> </button> </a>
                </div>
                <div class='card-body'>
                  <p  class='card-title'>".$product['ten_sanpham']."</p>
                  <p class='card-text'>".($product['gia']>1000?($product['gia']/1000).".000":$product['gia'])."₫ </p>
                </div>
              </div>";
        
               };
              }
               else echo" Khong co san pham";
              

              ?>
               </div>


            <!--End product item-->
          </div>

        </div>

      </div>
      </div>

    <!--Pagination Done!-->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <?php
           echo "<a class='page-link' href='".(searchlinkstring(isset($_GET['page'])?($_GET['page']==1?$_GET['page']:$_GET['page']-1):1,$_GET['iddm']??0,$_GET['giatu']??0,$_GET['orderby']??''))."' aria-label='Previous'>
            <span aria-hidden='true'>&laquo;</span>
          </a>";
       
          ?>
        </li>
        <?php for($i=1; $i<=$totalpage; $i++){
          if($i!=$page){ echo "<li class='page-item'><a class='page-link' href='".(searchlinkstring($i,$_GET['iddm']??0,$_GET['giatu']??0,$_GET['orderby']??''))."'>".$i." </a></li>";}
          else echo "<li class='page-item'><span class='page-link' style='color:black'>".$i."</span></li>";                 
        }
        ?>
          <?php 
           echo "<a class='page-link' href='".(searchlinkstring(isset($_GET['page'])?($_GET['page']=$totalpage?$_GET['page']:$_GET['page']+1):1,$_GET['iddm']??0,$_GET['giatu']??0,$_GET['orderby']??''))."' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
          </a>";

          ?>
        </li>
      </ul>
    </nav>
   
    
    </div>

    <script src="./public/js/coverbookforse.js"></script>
    <script src="./public/js/login.js"></script>
    
