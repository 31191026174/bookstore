<style>
    .bodypage{
    background-image: url('./public/images/imageqc/backgroundlogin.png');
    background-repeat: no-repeat;
    background-size: cover;
}


</style>
<link rel="stylesheet" type="text/css" href="./public/css/loginres.css">


<div class="container-fluid bodypage">
            <div class="row ">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 header-left">
                    <div class="content-header">
                        <div class="grouplogo">
                             <a href="#">  <img src="./public/images/image-home/logo-white.png" alt="Logo Nhom" style=" width:158px; height:40px;"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 header-right">
                </div>
            </div>   

    <div class="get-in-touch signup row <?php echo isset($_POST['email'])?"":"hidden" ?>" >
        <div class="container-fluid">
        <h1 class="title">Đăng ký</h1>
            <form class="contact-form row" method="POST" action="index.php?controller=account&action=res">
                <div class="form-field col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <input id="account" class="input-text js-input" type="text" placeholder="Tài Khoản" name="username">

                </div>
                <div class="form-field col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <input id="email" class="input-text js-input" type="email" placeholder="Email" name="email">

                </div>
                <div class="form-field col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <input id="password" class="input-text js-input" type="password" onkeyup="check();" placeholder="Mật khẩu" name="password1">

                </div>
                <div class="form-field col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <input id="cfpassword" class="input-text js-input" type="password" onkeyup="check();" placeholder="Nhập lại mật khẩu" name="password2">
                    <span id='message'></span>
                </div>
                <div class="form-field col-12 col-sm-12 col-md-12 col-lg-12 ">
                    <input id="phone" class="input-text js-input" type="text" placeholder="Số điện thoại" name="sdt">
                    <?php switch($msg){
                        case "exist" : echo "<p style='color:rgb(250, 0, 0);height:0px; '>Tài khoản đã tồn tại </p> <br/>";break;
                        case "done" : echo "<p style='color:green;height:0px; '>Đăng ký thành công</p> <br/>"; break;
                        case "saidulieu" : echo "<p style='color:rgb(250, 0, 0);height:0px; '> Kiểm tra lại dữ liệu </p> <br/>"; break;
                        case "khongduocbotron": echo "<p style='color:rgb(250, 0, 0);height:0px; '> Không được bỏ trống </p> <br/>"; break;
                    } 
                    ?>
                </div>
                <div class="form-field col-lg-12" id="submit">
                    <input class="submit-btn" type="submit" onclick="signup()" value="Đăng ký" > 
                    <span>Đã có tài khoản :<a class="forgot2">Đăng nhập</a></span>

                </div>
                <span style="padding-top:10px;">Hoặc đăng ký với tài khoản khác</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social"><i class="fab fa-apple"></i></a>
                </div>
            </form>
        </div>
    </div>

    <div class="get-in-touch signin row <?php echo isset($_POST['email'])?"hidden":"" ?> " >
        <div class="container-fluid">
            <h1 class="title">Đăng nhập</h1>
            <form class="contact-form row" method="POST" action="index.php?controller=account&action=login">
                <div class="form-field col-12 col-sm-12 col-md-12 col-lg-12 ">
                    <input id="account" class="input-text js-input" type="text" placeholder="Tài Khoản" name='username'>
                    
                </div>
                <div class="form-field col-12 col-sm-12 col-md-12 col-lg-12">
                    <input id="password" class="input-text js-input" type="password" placeholder="Mật Khẩu" name='password' >
                    <?php if($msg==="dangnhapsai"){echo "<p style='color:rgb(250, 0, 0);height:0px; '>Tài khoản hoặc mật khẩu sai</p> <br/>";} ?>
                </div>
                
                <a href="Form(forget-pass).html" class="forgot">Quên mật khẩu?</a>
                
                <div class="form-field col-lg-12" id="submit">
                    <input class="submit-btn" type="submit" onclick="signin()" value="Đăng nhập">
                    <span>Chưa có tài khoản? :<a class="forgot1">Đăng ký</a></span>
                </div>
                <span style="padding-top:10px;">Hoặc đăng nhập với tài khoản khác</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social"><i class="fab fa-apple"></i></a>
                </div>
                

            </form>
        </div>
    </div>

</div>

<script type="text/javascript" src="./public/js/formloginres.js"></script>
  