<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Login</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

        <!-- Fonts and icons -->
        <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Open+Sans:300,400,600,700"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/azzara.min.css') }}">
    </head>
    <body class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center">Sign In To Admin</h3>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="login-form">
                        <div class="form-group">
                            <label for="email" class="placeholder"><b>Email</b></label>
                            <input name="email" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder"><b>Password</b></label>
                            <div class="position-relative">
                                <input id="password" name="password" type="password" class="form-control" required>
                                <div class="show-password">
                                    <i class="flaticon-interface"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container container-signup animated fadeIn">
                <h3 class="text-center">Sign Up</h3>
                <div class="login-form">
                    <div class="form-group">
                        <label for="fullname" class="placeholder"><b>Fullname</b></label>
                        <input  id="fullname" name="fullname" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="placeholder"><b>Email</b></label>
                        <input  id="email" name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordsignin" class="placeholder"><b>Password</b></label>
                        <div class="position-relative">
                            <input  id="passwordsignin" name="passwordsignin" type="password" class="form-control" required>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword" class="placeholder"><b>Confirm Password</b></label>
                        <div class="position-relative">
                            <input  id="confirmpassword" name="confirmpassword" type="password" class="form-control" required>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                            <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
                        </div>
                    </div>
                    <div class="row form-action">
                        <div class="col-md-6">
                            <a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary w-100 fw-bold">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/ready.js') }}"></script>
    </body>
</html>
