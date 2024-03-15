<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGNIN</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/asset/css/signin.css')}}" />
    

  </head>
  <body>
    <header>
      <div class="navbar">
        <a href="#"><img class="logo" src="{{asset('backend/asset/image/logoptit.jpg')}}" alt="logo" /></a>
        <ul class="menu">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="#">Tra cứu</a></li>
          <li><a href="#">Lịch sử giao dịch</a></li>
          <li><a href="{{route('show-form-login')}}">Đăng Nhập</a></li>
          <li><a href="#">Đăng Kí</a></li>
          <li><a href="#">Hỗ trợ</a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="row">
          <div class="heading-main-box">
              <!-- <h1>
                Đăng nhập
              </h1> -->
          </div>
      </div>
    </header>
    <section class="login-section" style="background-image: url('path-to-your-background-image.jpg');">
        <div class="login-container">
          <h2>Đăng Ký</h2>
          <form class="login-form">
            <div class="input-group">
              <label for="username">Tên đăng nhập</label>
              <input type="text" id="name" name="name" >
            </div>
            <div class="input-group">
              <label for="username">Địa chỉ Email</label>
              <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
              <label for="password">Mật khẩu</label>
              <input type="password" id="password" name="password" required>
            </div>
            <!-- New Confirm Password Input -->
            <div class="input-group">
              <label for="confirm-password">Xác nhận mật khẩu</label>
              <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="forgot-password">
              <!-- <a href="#">Quên mật khẩu?</a> -->
            </div>
            <button type="submit" >ĐĂNG KÝ</button>
          </form>
          <div class="register-link">
            <!-- <p>Chưa có tài khoản? <a href="#">Đăng ký</a></p> -->
          </div>
        </div>
      </section>
    <section class="vietnam-airlines-section">
      <div class="section-wrapper">
        <div class="section-inner">
          <div class="content-wrapper">
            <div class="content-inner">
              <div class="image-wrapper">
                <div class="image-inner">
                  <img
                    src="https://www.vietnamairlines.com/~/media/Images/VNANew/Footer/4-Star_Metallic_150x150.png?la=vi-VN"
                    alt="Vietnam Airlines is proud to be a leading 4-star global airline"
                  />
                </div>
                <div class="text-content">
                  <h4>
                    PTIT Airlines tự hào là Hãng hàng không quốc tế 4 sao
                  </h4>
                  <p>PTIT Airlines là nơi thắp cánh ước mơ cho bao thế hệ sinh viên PTIT.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section">
      <div class="row">
        <div class="col span-1-of-3">
          <ul class="information">
            <li>
              <i class="fas fa-map-marker-alt small-icon"></i>Address: Km10,
              Đường Nguyễn Trãi, Q.Hà Đông, Hà Nội
            </li>
            <li>
              <i class="fas fa-envelope small-icon"></i>Email:
              SiVV.B21VT378@stu.ptit.edu.vn
            </li>
            <li><i class="fas fa-phone small-icon"></i>SĐT: (+84)0817952741</li>
          </ul>
          <ul class="social-icons">
            <li><i class="fab fa-facebook"></i></li>
            <li><i class="fab fa-twitter-square"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-google-plus-square"></i></li>
          </ul>
        </div>
      </div>
    </section>
    <footer>
      <p>Copyright &copy; 2024 by Vu Van Si</p>
    </footer>

    <script src="{{asset('backend/asset/javascript/validator.js')}}"></script>
    <script>
      Validator({
        form: '#form-1',
        formGroupSelector: '.input-group',
        errorSelector: '.form-message',
        rules: [
          Validator.isRequired('#fullname'),
          Validator.isRequired('#email'),
          Validator.isEmail('#email'),
          Validator.minLength('#password',6,),
          Validator.isRequired('#confirm-password'),
          Validator.isConfirmed('#confirm-password',function(){
            return document.querySelector('#form-1 #password').value;
          },"Mật khẩu nhập lại không chính xác"),
        ] ,
        onSubmit: function(data){
          console.log(data);
        }
      });
    </script>

  </body>
</html>
