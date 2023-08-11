<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="stylesheet" href="assets/scss/style.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Darker+Grotesque:wght@600&display=swap" rel="stylesheet" />
    <link href="/Style%20Library/css/smoothness/jquery.alerts.css" type="text/css" rel="stylesheet"/>
    <title>coding</title>
</head>

<body>
    <div class="main">
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <a href="" class="navbar-brand"><img src="assets/img/svg/logo.svg" alt="" /></a>
                    <div class="d-flex justify-content-end">
                        <ul class="social d-none">
                            <li class="list-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li class="list-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li class="list-item"><a href=""><i class="fab fa-discord"></i></a></li>
                        </ul>
                        <div class="btn btn-primary">Book Aappointment</div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="main-content">
            <section class="appointment">
                <div class="container">
                    <form action="{{url('/appointments')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="appointment-picker mb-4 mb-lg-0"></div>
                                <input placeholder="Select date" type="text" id="appointment_date" class="form-control" name="appointment_date">


                            </div>


                            <div class="col-lg-6">
                                <h1 class="title">We are available at</h1>

                                <div class="date-tags-wrapper justify-content-lg-start justify-content-center mb-lg-4" id="slots">
                                    @foreach($slots as $slot)
                                    @php

                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appointment_time" id="tag1" value="9:00 to 8:00">
                                        <label class="form-check-label" for="tag1">

                                            {{date('h:i a', strtotime($slot->time));}}

                                        </label>
                                    </div>
                                    @endforeach

                                </div>

                                <h6 class="text-grayLight mb-3">How you want to meet?</h6>
                                <div class="d-flex gap-3 appointment-type">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appointType" id="online">
                                        <label class="form-check-label" for="online">
                                            <div class="d-flex gap-2">
                                                <img src="assets/img/png/online.png" alt="">
                                                <h3>Online</h3>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="appointType" id="onsite">
                                        <label class="form-check-label" for="onsite">
                                            <div class="d-flex gap-2">
                                                <img src="assets/img/png/onsite.png" alt="">
                                                <h3>Onsite</h3>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="input-wrapper mb-4">
                                    <label for="appointment-textarea" class="form-label"></label>
                                    <textarea class="form-control" name="appointment_discuss" id="appointment-textarea" rows="3" placeholder="What do you want to discuss?" name="appointment_index"></textarea>
                                </div>


                                <button class="btn btn-primary" onclick="appointmentfunc()">Book Now</button>
                            </div>

                        </div>
                    </form>
                </div>
            </section>
        </div>

        <div class="footer d-none">
            <h1 class="footer-title">Orange</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text text-dark ms-lg-4 mb-0 d-flex gap-2">Got a question?<a href="#" class="text-dark">Contact
                                us</a></p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-5 align-items-center justify-content-md-end me-lg-4">
                            <p class="text text-dark m-0">© 2023 Orange</p>
                            <ul class="d-flex gap-4 gap-lg-5 p-0 m-0">
                                <li>
                                    <a href="" class="text text-dark m-0">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="" class="text text-dark m-0">About us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <p>
            Date output here
        </p>
        <div class="cursor"></div>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.debug.js"></script>
    <!-- <script src="assets/js/cursor.js"></script> -->
    <!-- <script src="assets/js/window.curDot.min.js"></script> -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script>
        
        function appointDateCallback() {
            $(".date-tags-wrapper .form-check input").change(function() {
                $('.date-tags-wrapper .form-check').removeClass('active');
                $('.date-tags-wrapper .form-check input:checked').parent().addClass('active');
            });
        };

        appointDateCallback();


        APP_URL_APP = '{{url("/slots")}}';



        $('.appointment-picker').on('change', function() {
            let a = $('.appointment-picker').datepicker({
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd',
            }).val();

            $('#appointment_date').val(a);


            $.ajax({
                type: "GET",
                url: APP_URL_APP + '/' + a,


                success: function(result) {
                    console.log(result.slots);
                    $("#slots").html(result.slots);

                },
                error: function(result) {
                    console.log(result);
                }
            });

            setTimeout(function() {
                appointDateCallback();
            }, 500)

        });


        function appointmentfunc() {
            let text = "Are you sure you want to  book appointment";
           confirm(text);
        }
        gapi.load('client:auth2', initClient);

        function initClient() {
        gapi.client.init({
            apiKey: 'AIzaSyAWOW_f4yNBkI1SbKe_lAQwicFm45SNVH8',
            discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest'],
        }).then(function() {
            console.log('Google API client initialized');
        }, function(error) {
            console.error('Error initializing Google API client', error);
        });
        }
       
        function createMeetConference() {
  var start = new Date();
  var end = new Date();
  end.setMinutes(end.getMinutes() + 30);

  var event = {
    'summary': 'My Event',
    'start': {
      'dateTime': start.toISOString(),
      'timeZone': 'America/Los_Angeles'
    },
    'end': {
      'dateTime': end.toISOString(),
      'timeZone': 'America/Los_Angeles'
    },
    'conferenceData': {
      'createRequest': {
        'requestId': 'my-request-id'
      },
    },
  };

  var request = gapi.client.calendar.events.insert({
    'calendarId': 'primary',
    'resource': event
  });

  request.execute(function(event) {
    var meetLink = event.hangoutLink;
    console.log('Meet link:', meetLink);
    // You can now use the meetLink variable to display the conference link on your webpage or do other things with it
  });
}
createMeetConference();

function check(){
    alert("check");
}
check();
    </script>
</body>

</html>