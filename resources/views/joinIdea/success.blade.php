<!DOCTYPE html>
<html lang="en">
  @include("layouts.head")
  <body>
    <div class="main index">
      <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
            <a href="http://alphabat.live" class="navbar-brand"><img src="assets/img/svg/logo-2.svg" alt=""></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <div class="d-flex align-items-center flex-column flex-lg-row gap-3">
                  <a href="/login" style="color: white; text-decoration:none;">Login</a>
                    <ul class="social">
                     <li class="list-item"><a target="_blank" href="https://www.facebook.com/hamzameerh?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-item"><a target="_blank" href="https://instagram.com/ameer_hamza_1015?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                    <li class="list-item"><a target="_blank" href="https://youtube.com/@hamzameer-yt9lh"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-item"><a target="_blank" href="https://www.tiktok.com/@hamzameerh"><i class="fab fa-tiktok"></i></a></li>
                  </ul>
                  <a href="{{url('/appointments')}}" class="btn btn-sm btn-primary">Book Appointment</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <div class="main-content">
        <section class="success">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 offset-lg-4">
                <div class="card success-card">
                  <div class="card-body">
                    <img src="assets/img/svg/check.svg" alt="" class="card-img">
                    <div class="text-center">
                      <h3 class="card-title">Your idea submitted successfully</h3>
                      <h4 class="text mw-100">We will reach you soon.</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
       <div class="footer">
        <h1 class="footer-title">Alphabat</h1>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <p class="text text-dark ms-lg-4 mb-0 d-flex justify-content-lg-start justify-content-center gap-2 mb-2 mb-lg-0">Got a question?<a href="{{url('/contact')}}" class="text-dark">Contact us</a></p>
            </div>
            <div class="col-lg-8">
              <div class="d-flex flex-column flex-lg-row gap-3 gap-xl-5 align-items-center justify-content-md-end me-lg-4">
                <p class="text text-dark m-0 d-flex gap-2">© Copyright<a class="d-block text-dark" target="_blank" href="http://marianatech.co.uk/">Mariana Tech</a>2023</p>
                <ul class="list-unstyled d-flex justify-content-center flex-wrap gap-3 gap-xl-5 p-0 m-0">
                  <li>
                    <a href="{{url('/privacypolicy')}}" class="text text-dark m-0">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="{{url('/about')}}" class="text text-dark m-0">About us</a>
                  </li>
                  <li>
                    <a href="{{url('/terms-conditions')}}" class="text text-dark m-0">Terms and Condition</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="cursor"></div>
    </div>

 @include("layouts.footer")
  </body>
</html>
