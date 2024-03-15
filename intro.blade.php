<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INTRO</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('backend/asset/css/intro.css')}}" />
  </head>
  <body>
    <header>
      <div class="navbar">
        <a href="#"><img class="logo" src="{{asset('backend/asset/image/logoptit.jpg')}}" alt="logo" /></a>
        <ul class="menu">
          <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="{{route('search')}}">Tra cứu</a></li>
          <li><a href="#">Lịch sử giao dịch</a></li>
          <li><a href="{{route('logout')}}">Thoát</a></li>
          <li><a href="#">Hỗ trợ</a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="row">
          <div class="heading-main-box">
              <h1>
                Giới thiệu về PTIT Airlines
              </h1>
          </div>
      </div>
    </header>
    <section class="intro-section">
      <div class="row">
        <p class="p-long">
          <em><strong>
            Chào mừng đến với PTIT Airlines, nơi thắp sáng ước mơ học tập và khám phá bầu trời cho hàng ngàn thế hệ sinh viên PTIT. Với sứ mệnh trở thành cầu nối giữa kiến thức và ước mơ, PTIT Airlines tự hào mang đến cho bạn cơ hội trải nghiệm những chuyến bay ấn tượng với giá cả phải chăng, phục vụ đúng tinh thần và nhu cầu của sinh viên.
          </strong></em>
        </p >
        <p class = "p-long">
          Dự án này là thành quả của bài tập lớn môn học, được thực hiện bởi nhóm sinh viên năm 3 gồm 6 thành viên tài năng từ PTIT, những người đã không ngừng nỗ lực để tạo ra một trang web bán vé máy bay thân thiện, dễ sử dụng. Chúng tôi hiểu rằng, đối với sinh viên, việc tìm kiếm và đặt vé máy bay với một mức giá hợp lý là vô cùng quan trọng. Vì vậy, PTIT Airlines cam kết cung cấp một dịch vụ tiện lợi, an toàn, và tiết kiệm, giúp bạn dễ dàng lên kế hoạch cho những chuyến đi của mình.
        </p>
        <p class="p-long">
          Tại PTIT Airlines, chúng tôi không chỉ cung cấp vé máy bay. Chúng tôi còn giúp mở rộng tầm nhìn, kiến thức, kinh nghiệm và trải nghiệm của sinh viên thông qua việc khám phá các vùng đất mới. Với một giao diện thân thiện, trực quan, cùng với hệ thống tìm kiếm và đặt vé linh hoạt, PTIT Airlines hứa hẹn sẽ là người bạn đồng hành đáng tin cậy trên mỗi hành trình của bạn.
        </p>
        <p class="p-long">
          Hãy để PTIT Airlines là nơi thắp cánh cho ước mơ của bạn, kết nối bạn với thế giới bên ngoài, và trở thành phần không thể thiếu trong hành trình học tập và phát triển của mình. Chúng tôi rất mong được chào đón và phục vụ bạn trên những chuyến bay tiếp theo!
        </p>
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