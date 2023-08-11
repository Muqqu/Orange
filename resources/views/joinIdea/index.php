<!DOCTYPE html>
<html lang="en">
@include("layouts.head");

<body>
    <div class="main">
        <header class="header d-none">
            <nav class="navbar">
                <div class="container-fluid">
                    <a href="" class="navbar-brand"><img src="assets/img/svg/logo.svg" alt="" /></a>
                    <div class="d-flex justify-content-end">
                        <ul class="social">
                            <li class="list-item">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-item">
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-item">
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-item">
                                <a href=""><i class="fab fa-discord"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="main-content">
            <section class="register">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0 d-none d-lg-flex">
                            <div class="register-img"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wrapper">
                                <form action="">
                                    <h1 class="title">Join with<br><span class="text-primary">Idea</span></h1>

                                    <div class="input-wrapper">
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="input-wrapper">
                                        <textarea name="" id="message" rows="3" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="text" class="form-control" placeholder="Motive">
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="file" class="form-control" multiple>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <input type="email" id="ideaEmail" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <input type="text" class="form-control" placeholder="Contact no">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-3 mt-lg-5" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cursor"></div>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
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
</body>
</hr