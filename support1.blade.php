<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUPPORT</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('backend/asset/css/support.css')}}" />
  </head>
  <body>
    <header>
      <div class="navbar">
        <a href="#"><img class="logo" src="{{asset('backend/asset/image/logoptit.jpg')}}" alt="logo" /></a>
        <ul class="menu">
          <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
          <li><a href="{{route('intro')}}">Giới thiệu</a></li>
          <li><a href="{{route('search')}}">Tra cứu</a></li>
          <li><a href="#">Lịch sử giao dịch</a></li>
          <li><a href="{{route('logout')}}">Thoát</a></li>
          <li><a href="#">Hướng dẫn thanh toán</a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="row">
          <div class="heading-main-box">
              <h1>
                Hướng dẫn thanh toán 
              </h1>
          </div>
      </div>
    </header>
    <section class="payment-section">
      <div class="payment-container">
        <!-- Left Column: Titles -->
        <div class="payment-titles">
          <!-- Bank Transfer Title -->
          <div class="payment-title">
            <a href="#" class="payment1"><i>Chuyển khoản ngân hàng</i></a>
          </div>
    
          <!-- Counter Payment Title -->
          <div class="payment-title counter-payment">
            <a href="{{route('payment')}}" class="payment2" ><i>Thanh toán tại văn phòng PTIT Airlines</i></a>
          </div>
        </div>
    
        <!-- Right Column: Bank Details -->
        <div class="payment-details">
          <!-- Agribank Details -->
          <div class="payment-option agribank">
            <div class="bank-name">Ngân Hàng Nông Nghiệp Và Phát Triển Nông Thôn Việt Nam - Agribank</div>
            <div class="account-info">
              <div>Tên tài khoản: <span>PTIT Airlines</span></div>
              <div>Số tài khoản: <span>3408 2053 9458 4</span></div>
              <div>Chi Nhánh: <span>Hà Nội</span></div>
            </div>
          </div>
    
          <!-- MBBank Details -->
          <div class="payment-option mb-bank">
            <div class="bank-name">Ngân hàng Quân đội - MBBank</div>
            <div class="account-info">
              <div>Tên tài khoản: <span>PTIT Airlines</span></div>
              <div>Số tài khoản: <span>0836 7890 87</span></div>
              <div>Chi Nhánh: <span>Hà Nội</span></div>
            </div>
          </div>
          <!-- Vietcombank -->
          <div class="payment-option vietcombank">
            <div class="bank-name"> Ngân hàng TMCP Ngoại Thương Việt Nam - Vietcombank</div>
            <div class="account-info">
              <div>Tên tài khoản: <span>PTIT Airlines</span></div>
              <div>Số tài khoản: <span>9839 3968 28</span></div>
              <div>Chi nhánh: <span>Hà Nội</span></div>

            </div>
          </div>
          <!-- Additional banks can be added following the same structure -->
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
  </body>
</html>
