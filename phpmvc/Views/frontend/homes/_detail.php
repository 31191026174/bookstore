<?php 
  function three($var){ return ($var['id_danhmuc']==103); }
  $listdark=array_filter($listproduct,"three");  
  $listdark=array_values($listdark);
  array_splice($listdark,3,count($listdark)-3);
?>
<style>

.Aside{
    background-image: url('./public/images/imageqc/redmoon.jpg');
    background-position: center;
   
}
.Aside2{
    background-image: url('./public/images/imageqc/johnconstable1.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.simmycat{
    background-image: url("./public/images/imageqc/3.jpg");
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 675px;
    animation: aniback1 16s cubic-bezier(0.075, 0.82, 0.165, 1) infinite 4s;
    
}
@keyframes aniback1 {
    0%{
        background-image: url("./public/images/imageqc/3.jpg");

    }
    25%{
        background-image: url("./public/images/imageqc/thoitiet2.jpg");
        
    }
    50%{
        background-image: url("./public/images/imageqc/5cm2.jpg");
        
    }
    75%{
        background-image: url("./public/images/imageqc/yourname1.jpg");
        

    }
}
</style>

<link rel="stylesheet" href="./public/css/Home.css">
    <link rel="stylesheet" href="./public/css/slick-theme.css">
    <link rel="stylesheet" href="./public/css/slick.css">
    <!-- Navigation-->
    <div class="header-wrapper ">
        <div class="container-fluid" style="position: absolute; z-index: 100;">
            <div class="row " style="padding-top:20px;">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 header-left">
                    <div class="content-header">
                        <div class="grouplogo">
                             <a href="index.php">  <img src="./public/images/image-home/logo-white.png" alt="Logo Nhom" style=" width:158px; height:40px;"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 header-right">
                    <div class="header-menu">         
                            <ul class="main-menu">

                                <li class="menu-item active">
                                    <a href="index.php">
                                        <span class="menu-item-text"> Trang chủ </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="index.php?controller=search">
                                        <span class="menu-item-text" > Cửa hàng </span>
                                    </a>
                                </li>

                                <li class="menu-item ">
                                    <a href="https://www.facebook.com/photo/?fbid=250520718737909&set=a.242944239495557">
                                        <span class="menu-item-text"> Fanpage </span>
                                    </a>
                                </li>

                                <li class="menu-item ">
                                    
                                        <span class="menu-item-text" id="lienhe"> Liên hệ </span>
                                    
                                </li>
                                <li class="menu-item" >
                                    <a href="index.php?controller=search" > <i class="fas fa-search"></i> </a>
                                </li>
                                <li class="menu-item" >
                                    <a href="index.php?controller=cart" > <i class="fas fa-shopping-cart"></i> </a>
                                </li>
                            </ul>                                                                                            
                    </div>


                </div>
            </div>


        </div>


    <div class="container-fluild">


    <div class="simmycat">
             <div class="banner banner1">
             <img src="./public/images/image-home/khuvuon.jpg" alt="">
             <div class="textbox diablo1">
                 <h1> Khu Vườn Ngôn Từ</h1>
                 <span> <i style="margin-right: 5px;"> Tác giả: </i>SHINKAI MAKOTO</span>
                 <p> A faint clap of thunder <br/>
                     Even if rain comes not <br/>
                     I will stay here<br/>
                     Together with you </p>
             </div>

             </div>

             <div class="banner banner2 hidden">
             <img src="./public/images/image-home/thoitiet.jpg" alt="" width="200px" height="281px">
             <div class="textbox diablo1">
                 <h1> Đứa Con Của Thời Tiết</h1>
                 <span> <i style="margin-right: 5px;"> Tác giả: </i>SHINKAI MAKOTO</span>
                 <p> The storm can crash <br/>
                     The thunder clap <br/>
                     Attempting to arrest my view<br/>
                     But, whether sky be black or blue </p>
               </div>
                </div>

                <div class="banner banner3 hidden">
                    <img src="./public/images/image-home/5cm.jpg" alt="" width="200px" height="281px">
             <div class="textbox diablo1">
                 <h1> 5 Centimet trên giây</h1>
                 <span> <i style="margin-right: 5px;"> Tác giả: </i>SHINKAI MAKOTO</span>
                 <p> If the speed of the <br/>
                     Cherry blossom fall to 5cm/s <br/>
                     It certainly will not <br/>
                     Be that beautiful </p>
             </div>
                    </div>

                    <div class="banner banner4 hidden">
                    <img src="./public/images/image-home/yourname.jpg" alt="" width="200px" height="281px">
             <div class="textbox diablo1">
                 <h1> Your Name</h1>
                 <span> <i style="margin-right: 5px;"> Tác giả: </i>SHINKAI MAKOTO</span>
                 <p> I met the girl under  <br/>
                     Full-bloomed cherry blooms <br/>
                     And my fate has <br/>
                     Begun to change </p>
             </div>
                    </div>

                </div>

    </div>
    </div>
<!--Category-->
    <div class="category">
        <div class="container-fluid" style="background-color: cornsilk;">
            <div class="row" >
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 ">
                    <div class="seeU">
                        <i class="fas fa-book-open"></i>
                        <h5 class="category-name"> THỂ LOẠI </h5>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
                   <div class="SeeY">
                       <?php foreach($menu as $key=>$value){
                             
                             echo "<div class='trash'> <a href='index.php?controller=search&action=searchByKeyword&iddm=".$value['id_danhmuc']."' class='category-item'>".$value['ten_danhmuc']."</a> </div>";
                             
                           }  
                        
                       ?>                  
                   </div>                                      
                </div>


            </div>
        </div>
    </div>
<!--product-->
<div class="back-top button-show ">
    <i style="color: black;" class="fas fa-arrow-up"></i>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 introbar">
            <h2 id="ourproduct1"> Sản phẩm của chúng tôi</h2>
            <h5 id="newproduct1"> MỚI VÀ BÁN CHẠY </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 productx">
          <?php foreach ($listproduct as $item): ?>

            <div class="card dp" style="width: 12rem;">
                <div class='imgpro'>
                <img class="card-img-top" src="./public/images/product/<?= $item['url'] ?>.jpg" alt="Card image-home cap" style="height: 445px;" data-bia="./public/images/product/<?= $item['url1'] ?>.jpg" >
                <a href="index.php?controller=cart&action=store&id=<?=$item['id_sanpham'] ?>"> <button class="threeiconcart hidden"> <i style="color:black; font-size:16px" class="fas fa-shopping-cart"></i> </button> </a>
                <a href="index.php?controller=product&action=detailproduct&idsp=<?= $item['id_sanpham']?>"> <button class="threeicon hidden"> <i style="color:black; font-size:16px" class="fas fa-search"></i> </button> </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?= $item['ten_sanpham'] ?></h5>
                  <p class="card-text" > <i >by: <span class="tentacgia"> <?= ucfirst($item['tacgia']) ?> </span>  </i> 
                  <br>
                   <span class="price" style="font-weight: bold; color:#969696;"><?= ($item['gia']/1000).".000₫" ?></span>
                 </p>
                  
                </div>
              </div>

              <?php endforeach;?>
              <button class="slider_btn slider_btn--left">←</button>
              <button class="slider_btn slider_btn--right">→</button>

        </div>
    </div>
<!--seemore-->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 seemoret">
           <a href="#" style="text-decoration: none;"> <Span class="viewmore"> xem thêm </Span> </a>
            <i class="fas fa-arrow-left"></i>
        </div>
    </div>
  

<!--blog-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 introbar">
            <h2 id="ourproduct"> Cập nhập mới </h2>
         <h5 id="newproduct"> BLOG MỚI NHẤT</h5>
        </div>
        </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 productdetails">
           <?php foreach($listblog as $item): ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top blogik" id="<?= "h".$item['id_blog'] ?>" src="./public/images/blog/<?= $item['url']?>.webp" alt="Card image-home cap" width="450px" height="303px">
           
                <div class="card-body">
                  <h5 class="card-title ofblog"><?= $item['ten_blog'] ?></h5>
                  <p class="card-text blog"> <?= $item['ngay'] ?> / By <?= $item['tacgia'] ?></p>
            
                </div>
              </div>

              <?php endforeach; ?>

        </div>
    </div>
<!--seemore-->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 seemoretx">
           <a href="#" style="text-decoration: none;"> <Span class="viewmore"> xem thêm </Span> </a>
            <i class="fas fa-arrow-left"></i>
           
        </div>
    </div>
</div>

<!--Aside-->
<div class="Aside"> 
    <div class="container-fluild">
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 elecont ">
                <div class="row">
                    <div class="col-12"> <h2 style="font-weight: bolder; color: white;"> Kho tàng của </h2> </div>
                </div>
                <div class="row ">
                    <div class="col-12">  <h1 style="font-size: 3rem; font-weight: bold; color: white;">KINH DỊ </h1>  </div>
                </div>
                <div class="row">
                    <div class="col-12" style="color: white;">  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s </div>
                </div>
                
            </div>

            <div class="col-12 col-sm-12 col-md-9 col-lg-9 elecont productdetails">   
                <?php foreach($listdark as $item): ?>   
                                       
                  <div class="card cardpex" style="width: 12rem; border:none;">
                    <div class="imgpro">
                    <img class="card-img-top dark" src="./public/images/product/<?= $item['url'] ?>.jpg" alt="Card image-home cap" height="448px" width="300px" data-bia="./public/images/product/<?= $item['url1'] ?>.jpg" >
                    <a href="#"> <button class="threeiconcart hidden"> <i style="color:black; font-size:16px" class="fas fa-shopping-cart"></i> </button> </a>
                    <a href="index.php?controller=product&action=detailproduct&idsp=<?= $item['id_sanpham']?>"> <button class="threeicon hidden"> <i style="color:black; font-size:16px" class="fas fa-search"></i> </button> </a>
                    </div>
                    <div class="card-body ">
                      <a href="#"><h5 class="card-title" style="color:white;"><?= $item['ten_sanpham']?></h5> </a>
                      <p class="card-text" style="color:white;"> <?= "Tác giả: ".ucfirst($item['tacgia'])?> <br> <span style="font-weight: bold;"><?= ($item['gia']/1000).".000đ" ?> </span> </p>
                    
                    </div>
                  </div>
                    
                  <?php endforeach;?>

            </div>
        </div>

    </div>
</div>

<!--Aside2-->
<div class="Aside2"> 
    <div class="container-fluild">
        <div class="row elementor">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 elecont ">
                
                <div class="row">
                    <div class="col-12">
                         <div class="avatarbach"> <img src="./public/images/image-home/bach.jpg" alt="" width="120px" height="120px"></div>
                         <h2 style="font-weight: bold; color: white;font-size: 3rem; text-shadow: 5px 5px 15px black;">J.S.Bach</h2> </div>
                </div>
                <div class="row ">
                    <div class="col-12">  <h5 style="font-weight: bolder; color: white; text-shadow: 5px 5px 15px black;">Phong cách: Nghệ thuật, Âm nhạc, Organ, Hoàng gia</h5>  </div>
                </div>
                <div class="row">
                    <div class="col-12" style="color: white; text-shadow: 5px 5px 15px black;">  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>
                </div>
                
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 elecont productdetails">               
                  <div class="cardx" style="width: 8rem; border:none;">
                    <img class="card-img-top" src="./public/images/product/bachinD.jpg" data-src="./public/images/product/bachinA.jpg" alt="Card image-home cap" width="220px" height="299px">
                    <div class="card-body ">
                     <a href="#"> <h5 class="card-title" style="color:white;text-shadow: 5px 5px 15px black; font-size: 100%">Love's Sorrow</h5> </a>
                      
                    
                    </div>
                  </div>
    
                  <div class="cardx" style="width: 8rem; border:none; ">
                    <img class="card-img-top" src="./public/images/product/carmencover.jpg" data-src="./public/images/product/carmen.jpg" alt="Card image-home cap" width="220px" height="299px" >
                    <div class="card-body">
                     <a href="#f "> <h5 class="card-title" style="color:white;text-shadow: 5px 5px 15px black;font-size: 100%"> Carmen Fantasy</h5> </a>
                      
                 
                    </div>
                  </div>


            </div>



        </div>

    </div>
</div>
<div class="subc";>
    <div class="container">
        <div class="row alg">
            <div class="col-12">
              <center> <img src="./public/images/image-home/sub.webp" alt=""></center> 
            </div>
            <div class="col-12">
                 <center> <em style="color: gray; font: 70%;"> Bản tin </em> </center>
            </div>
            <div class="col-12">
            <center>
                <strong> Đăng kí để nhận thông báo </strong>
            </center>
             </div>
             <div class="col-12">
                 <p style="color: gray;" id="dich">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id mattis.</p>
             </div>
             
             <div class="col-12 wpbinggo" >
                <form action="" method="POST" class="newsletter" >
                    <input type="email" name="your-email" class="hopemail" placeholder="Nhập địa chỉ email" value size="40">
                    <input type="submit" value="Đăng ký" >
                </form>
                
            </div>

    </div>
    <div style="height: 75px;"></div>
</div>


<!-- cac file script  -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./public/js/slick.js"></script>
<script src="./public/js/login.js"></script>
<script src="./public/js/lazy.js"></script>
<script src="./public/js/pushpush.js"></script>
<script src="./public/js/coverbook.js"></script>
<script>
    $(document).ready(function(){
    $(".SeeY").slick({
        Infinity:true,
        slidesToShow: 4,
        slidestoScroll: 4,
        variableWidth:true,
        speed:300
        
    });
});

var i=1;
            const banner=document.querySelectorAll(".banner");
           

            function changeit(){
            if(i==1){ document.querySelector(`.banner${i}`).classList.remove("hidden");
           
            }

        else { if(i>banner.length){ i=1;
                document.querySelector(`.banner${i}`).classList.remove("hidden");
                document.querySelector(`.banner${banner.length}`).classList.add("hidden");
                
                
            }
            else 
            {
            document.querySelector(`.banner${i}`).classList.remove("hidden");
            document.querySelector(`.banner${i-1}`).classList.add("hidden");
            
            }
        }
            
            i++;
            }
            
            changeit();
            setInterval(changeit,4000);
</script>  


