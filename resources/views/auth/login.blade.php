<!DOCTYPE html>
<html lang="vi">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        {{-- <link href="/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" /> --}}
        <link href="/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        {{-- <link href="/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" /> --}}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{-- <link href="/admin/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" /> --}}
        {{-- <link href="/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/admin/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/admin/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/admin/assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            {{-- <a href="index.html">
                <img src="/admin/assets/pages/img/logo-big.png" alt="" /> 
            </a> --}}
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            @if (Session::has('message'))
            <div class="alert alert-danger text-center">
                {{ Session::get('message') }}
            </div>
            @endif
           <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                {{ csrf_field() }}
                <h3 class="form-title text-center">Storage</h3>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email" name="email" value="{{ old('email') }}"/> 
                    </div>
                     @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix l{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password" name="password" /> 
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Ghi nhớ đăng nhập </label>
                    <button type="submit" class="btn green pull-right"> Đăng nhập </button>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">2018</div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN CORE PLUGINS -->
        <script src="/admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        {{-- <script src="/admin/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script> --}}
        <script src="/admin/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        {{-- <script src="/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script> --}}
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        {{-- <script src="/admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="/admin/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script> --}}
        <script src="/admin/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/admin/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/admin/assets/pages/scripts/login-4.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
