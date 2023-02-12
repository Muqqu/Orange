@php
    $jazzcash_environment = config('jazzcash.environment');
@endphp
<!DOCTYPE html>
<html lang="en">
@include('layouts.head');

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
                                <form action="{{ url('/reset_password_without_token') }}" method="post">
                                    @csrf
                                    <h1 class="title">LOGIN<br>TO<span class="text-primary">EXPLORE</span></h1>
                                    <p class="text">Forgot your password? No problem. Just let us know your email
                                        address and we will email you a password reset link that will allow you to
                                        choose a new one.</p>
                                    <div class="input-wrapper">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    @error('email')
                                        <span class="text" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror



                                    <button class="btn btn-primary w-100 mt-3 mt-lg-5" type="submit">EMAIL PASSWORD
                                        RESET LINK</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cursor"></div>
    </div>

    @include('layouts.footer');
</body>

</html>
