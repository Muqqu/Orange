<!DOCTYPE html>
<html lang="en">
 @include("layouts.head")
  <body>
    <div class="main index">
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <a href="" class="navbar-brand"><img src="assets/img/svg/logo.svg" alt="" /></a>
            <div class="d-flex justify-content-end">
           
              <ul class="social">
              <a href="/login" style="color: white; text-decoration:none">Login</a>
                <li class="list-item"><a target="_blank" href="https://www.facebook.com/hamzameerh?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-item"><a target="_blank" href="https://instagram.com/ameer_hamza_1015?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                <li class="list-item"><a target="_blank" href="https://youtube.com/@hamzameer-yt9lh"><i class="fab fa-youtube"></i></a></li>
                <li class="list-item"><a target="_blank" href="https://www.tiktok.com/@hamzameerh"><i class="fab fa-tiktok"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="main-content">
        <section class="section business">
          <div class="wrapper">
            <div class="d-flex flex-column align-items-start">
              <h1 class="main-title">Join<br />business<br />Community</h1>
              <div class="d-flex align-items-start justify-content-start gap-3">
                <a href="{{url('registerBusiness')}}" class="btn btn-primary">Join Now</a>
                <p class="text">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                  deserunt eum omnis facilis consequatur voluptates hic
                  obcaecati deleniti.
                </p>
              </div>
            </div>
          </div>
          <div class="particles" id="particles-js"></div>
        </section>

        <section class="section appointment">
          <div class="wrapper">
            <div class="d-flex flex-column align-items-start">
              <h1 class="main-title">Join<br />with<br />Appointment</h1>
              <div class="d-flex align-items-start justify-content-start gap-3">
                <a href="{{url('appointments')}}" class="btn btn-primary">Join Now</a>
                <p class="text">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                  deserunt eum omnis facilis consequatur voluptates hic
                  obcaecati deleniti.
                </p>
              </div>
            </div>
          </div>
          <div class="particles" id="particles-js"></div>
        </section>


        <section class="section idea" id="idea">
          <div class="wrapper">
            <div class="d-flex flex-column align-items-start">
              <h1 class="main-title">Join<br />With Idea</h1>
              <div class="d-flex align-items-start justify-content-start gap-3">
                <a href="{{url('joinIdea')}}" class="btn btn-primary">Join Now</a>
                <p class="text mb-0">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit
                  deserunt eum omnis facilis consequatur voluptates hic
                  obcaecati deleniti.
                </p>
              </div>
            </div>
          </div>
          <div id="circleObj"></div>
        </section>
      </div>
      
      <div class="footer">
        <h1 class="footer-title">Orange</h1>
        <div class="container-fluid">
          <div class="d-flex">
            <p class="text">Got a question?</p>
            <a href="" class="link">Contact us</a>
          </div>
        </div>
      </div>


      <div class="cursor"></div>
    </div>

 @include("layouts.footer")
  </body>
</html>
