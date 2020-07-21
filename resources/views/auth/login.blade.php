<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Water Monitoring | Login Page</title>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <link rel="shortcut icon" href="{{ asset('images/logo/watermonitoring.png') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <br>
                <img class="w-50 m-auto d-block" src="images/logo/watermonitoring.png" alt="logo-img">
                {{--  <h3 class="text-center m-t-0 m-b-15">
                        <a href="" class="logo"><img src="images/logo/saqu-logo.png" alt="logo-img"></a>
                    </h3>  --}}
                {{--  <h4 class="text-muted m-t-2 container"><b>Sign In Here</b></h4>  --}}
                @foreach ($errors->all() as $error)
                    <script>
                        Swal.fire(
                        'Gagal',
                        '{{ $error }}',
                        'error'
                        )
                    </script>
                @endforeach
                <form class="mt-5" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <div class="col-12">
                            <input class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                                required="" placeholder="Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit"><i
                                    class="fad fa-sign-in-alt"></i> Sign In</button>
                        </div>
                    </div>

                    <div class="form-group row m-t-30 m-b-0">
                        <div class="col-sm-7">
                                @if (Route::has('password.request'))
                                    <a class="text-muted" href="{{ route('password.request') }}">
                                        <i class="fa fa-lock m-r-5"></i> {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="{{ route('register') }}" class="text-muted">Create an account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <h6 class="text-muted"><span class="text-danger"><i class="fas fa-heart"></i></span> Developed by <span
                class="font-weight-bold">NMPROduction</span> | The person in charge is <a target="_blank"
                href="https://www.instagram.com/ikhsanboebat_">@ikhsanboebat_</a></h6>
    </div>




    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/appzia/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 15:58:52 GMT -->

</html>