<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tikie Home </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/common.css">

</head>
<body>
    <!-- topbar-inner-->
    <div class="topbar-inner sticky">
        <div class="container-fluid">
            <div class="row " >
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 topbar-left hidden-sm hidden-xs">
                <div class="shipping hidden-md hidden-sm hidden-xs">
                    <div class="text" style="font-size:12px; color:#333;"> 
                        <Span >Miễn phí vận chuyển cho đơn hàng trên 500.000đ</Span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 topbar-right">
                <div class="login-header"> 
                    <a href="#" style="font-weight: bolder; text-decoration: none; font-size:16px;" <?php if(!isset($_SESSION['username'])){echo "onclick='Login()' "; } ?> > 
                          <?php if(isset($_SESSION['username'])){
                             $success=$_SESSION['username'];

                             echo "Hi, ".$success; }
                             else echo "ĐĂNG NHẬP";

                             
                             ?>
                    </a>
                </div>
                <ul class="social-link"> 
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"> </i>                                              
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"> </i>                                              
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook"></i>                                            
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>                                              
                        </a>
                    </li>
                </ul>
            </div>
            </div>
            <div class="row" >
                <div class="col-lg-4 col-md-2 col-sm-1"></div>
                <div class="col-lg-4 col-md-10 col-sm-11">
                    <div class="Login hidden">    
                        <p style="text-align:end; margin-right:20px;" class="esc"><img src="./public/images/image-home/esc.png" alt="" width="25px" height="25px"></p>               
                        <form action="index.php?controller=account&action=login" method="POST" >
                            <center>
                             <input type="text" name="username" placeholder="UserName/Email" value size="80" style="margin-top:-10px;"><br>
                             <input type="password" name="password" placeholder="Password" value size="80"><br>
                            
                             <div> <p style="text-align:start; display: inline-block;color: blue;
                                font-weight: bolder">Forgot Password</p>
                            </div>
                            
                             <input type="submit" value="Login" >
                             </center>
                        </form>

                        <div class="third-plat-tip">
                           <center> <span style="font-size:12px; font-family: 'Times New Roman', Times, serif; font-weight: lighter; color:gray"> Or log in using social media</span> </center>
                          </div>
                          <div class="social-login">
                              <img src="./public/images/image-home/google.jpg" alt="">
                              <img src="./public/images/image-home/facebook.png" alt="">
                              <img src="./public/images/image-home/apple.png" alt="">
                              <img src="./public/images/image-home/twiiter.png" alt="">
                          </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-1"></div>
                
            </div>
        </div>
    </div>

    <!-- Navigation-->