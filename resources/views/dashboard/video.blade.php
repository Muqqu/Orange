<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="stylesheet" href="assets/scss/style.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Darker+Grotesque:wght@600&display=swap"
      rel="stylesheet"
    />

    <title>coding</title>
  </head>
  <body>
    <div class="main">
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <a href="" class="navbar-brand"><img src="assets/img/svg/logo.svg" alt="" /></a>
            <div class="d-flex justify-content-end">
              <ul class="social">
                <li class="list-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li class="list-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li class="list-item"><a href=""><i class="fab fa-discord"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="main-content">
        <section class="video">
          <div class="container">
            <div class="video-main-wrapper">
              <div class="video-wrapper mb-5">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="video-player-wrapper">
                      <div class="controls-wrapper">
                        <button class="btn-play btn-primary">
                          <i class="fas fa-play"></i>
                        </button>
                      </div>
                      <video src="{{asset('assets/video/video-1.mp4')}}" controls muted></video>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="video-info">
                      <div class="accordion" id="maindescription">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h3 class="video-title">This is video</h3>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#maindescription">
                            <div class="accordion-body">
                              <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, accusamus?</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            @foreach($videos as $video)
              <div class="col-lg-6">
                
                <button  class="card video-card" id = "videoplay">
                  <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="card-img">
                  <div class="card-body">
                    <h3 class="video-title">{{$video->title}}</h3>
                    <p class="video-desc">{{$video->description}}</p>
                  </div>
                </button>
                
              </div>
              @endforeach
            </div>
          </div>
        </section>
      </div>
      
      <div class="footer d-none">
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

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.debug.js"></script>
    <!-- <script src="assets/js/cursor.js"></script> -->
    <!-- <script src="assets/js/window.curDot.min.js"></script> -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        APP_URL_LIKE = '{{url("/like")}}';


    $("#videoplay").on("click",function() {
        alert("ok");
        // var postId = document.getElementsByClassName("heart").value;
        // alert(postId);
        var btnValue = $(this).attr('value');
        var $this = $(this);
        


        $.ajax({
            type: "GET",
            url: APP_URL_LIKE + '/' + btnValue,
            check : "#counts"+btnValue,
            
            success: function(result) {
                // alert(result.status);
                
                if (result.status == 'Success') {
                    $this.addClass('active');
                    // alert('success');
                }
                else {
                    $this.removeClass('active');
                    //alert('blank');
                }
                console.log(result);
                console.log("#counts"+btnValue);
                console.log("#check"+btnValue);
                
                
                $("#counts" + btnValue).html(result["postlikes"]);
                $("#counts" + btnValue + "model").html(result["postlikes"]);
                $("#check" + btnValue).html(result["image"]);
                $("#check" + btnValue + "model").html(result["image"]);
            },
            error: function(result) {
                console.log(result);
               
            }
        });
    });

    </script>
  </body>
</html>
