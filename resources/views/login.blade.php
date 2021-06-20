<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IDSG Pemprov Jateng</title>
    <meta name="description" content="IDSG Pemprov Jateng">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLE -->
    @include('includes.style')
    <style>
        .bg-overlay {
            background: url("images/login-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }

        .login-box {
            background: rgba(246, 245, 251, 0.6);
        }

        .modal-dialog {
            max-width: 315px;
        }
    </style>

</head>

<body>
    <div class="bg-overlay vh-100">
        <div class="row mx-0">
            <div id="login-box" class="col-4 offset-8 px-3 login-box vh-100">
                <div id="login-content" class="login-content p-5 border rounded text-center">
                    <img class="img" src="images/logoJateng.png" alt="" width="25%" height="auto">
                    <form class="mt-5" method="POST" action="/login/attempt">
                        @csrf
                        <div class="form-group">
                            <input required type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-group">
                            <input required type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukkan Password Anda">
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Login</button>
                        <div class="row mx-0 mt-2">
                            <div class="w-50 text-left text-white">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                            </div>
                            <div class="w-50 text-right">
                                <a href="" class="text-white" data-toggle="modal" data-target="#forgotPasswordModal">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="font-12 font-weight-bold text-center pt-2">Copyright 2021 Provinsi Jawa Tengah</div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div class="font-30 font-weight-bold" style="color:#D81A1A;">Oops!</div>
                    <div class="font-18 font-weight-bold mt-3" style="color:#555555">Login failed</div>
                    <div class="font-16" style="color:#555555">Invalid email or password</div>
                    <button type="button" class="mt-4 btn btn-sm text-white px-5" style="background-color:#BB1C0F;" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div class="font-18 font-weight-bold">Harap menghubungi super admin untuk melakukan update password.</div>
                    <button type="button" class="mt-4 btn btn-sm text-white px-5" style="background-color:#BB1C0F;" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    @include('includes.script')
    <script>
        $(document).ready(function() {
            var boxHeight = document.getElementById('login-box').offsetHeight;
            var contentHeight = document.getElementById('login-content').offsetHeight;
            var content = document.getElementById('login-content');
            var margin = (boxHeight - contentHeight) / 2;
            content.style.marginTop = margin + "px";
        });
    </script>

    @error('failed')
    <script>
        $(document).ready(function() {
            $('#errorModal').modal('show');
        });
    </script>
    @enderror
</body>

</html>