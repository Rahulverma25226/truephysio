<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('admin/img/logo1.ico') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/components.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />


    <link type="text/css" rel="stylesheet"
        href="{{ asset('admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/vendors/wow/css/animate.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />
</head>

<body class="login_background">
    <div class="preloader"
        style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
        <div class="preloader_img"
            style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
            <img src="{{ asset('admin/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
        </div>
    </div>
    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="col-lg-4  col-md-8 col-sm-12  mx-auto login_image login_section login_section_top">
                        <div class="login_logo login_border_radius1">
                            <h6 class="text-center text-white">
                                <img src="{{ asset('admin/img/logo22.jpg') }}"
                                    style="height: 100px; margin-top: 200px; " alt="josh logo" class="admire_logo">
                            </h6>
                        </div>
                        <div class="row m-t-20">
                            <div class="col-12">
                                <a class="text-success m-r-20 font_18">LOG IN</a>
                            </div>
                        </div>
                        <div class="m-t-15">
                            @if (session('message'))
                                <div class="alert alert-success col-md-6 mt-4 ">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <form action="{{ route('admin2.login') }}" id="login_validator" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="email" class="form-control b_r_20" id="email" name="email"
                                        placeholder="Username">
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input type="password" class="form-control b_r_20" id="password" name="password"
                                        placeholder="Password">
                                    @if ($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="text-center login_bottom">
                                    <button type="submit" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20">LOG
                                        IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="admin/js/popper.js"></script>
    <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="admin/vendors/wow/js/wow.min.js"></script>
    <script type="text/javascript" src="admin/vendors/jquery.backstretch/js/jquery.backstretch.js"></script>

    <script type="text/javascript" src="admin/js/pages/login2.js"></script>
</body>

</html>
