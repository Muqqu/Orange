<!DOCTYPE html>
<html lang="en">
@include("layouts.head")

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
                                <form action="{{url('/joinIdea')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h1 class="title">Join with<br><span class="text-primary">Idea</span></h1>

                                    <div class="input-wrapper">
                                        <input type="text" class="form-control" placeholder="Title" name="title">
                                        @error('title')
                                        <span class="text" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-wrapper">
                                        <textarea name="message" id="message" rows="3" class="form-control" placeholder="Message"></textarea>
                                        @error('message')
                                        <span class="text" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="text" class="form-control" placeholder="Motive" name="motive">
                                        @error('motive')
                                        <span class="text" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="aks-file-upload"><input type="file" name="aksfileupload[]" id="aksfileupload" hidden="" multiple=""><div class="aks-file-upload-content"><label for="aksfileupload" class="aks-file-upload-label form-control"><span>Attach Files Here</span></label></div></div>
                                    <div class="input-wrapper d-none">
                                        <input type="file" class="form-control" multiple name="files" multiple>

                                    </div>
                                    <div id="ideaFileWrapper" class="input-wrapper"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <input type="email" id="ideaEmail" class="form-control" placeholder="Email" name="email">
                                                @error('email')
                                                <span class="text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <input type="tel" class="form-control" placeholder="Contact no" name="contact_no" maxlength = "11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            </div>
                                            @error('contact_no')
                                            <span class="text" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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

    @include("layouts.footer")

</body>
</hr>