
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Forget Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- Theme Config Js -->
        <script src="{{asset('backend/assets/js/config.js')}}"></script>

        <!-- App css -->
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>

    <body class="authentication-bg position-relative">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-lg-5">
                        <div class="position-relative rounded-3 overflow-hidden" style="background-image: url({{asset('backend/assets/images/flowers/img-3.png')}}); background-position: top right; background-repeat: no-repeat;">
                            <div class="card bg-transparent mb-0">


                                <div class="card-body p-4">

                                    <div class="w-75">
                                        <h4 class="text-dark-50 mb-4 fw-bold">Reset Password</h4>

                                    </div>

                                    <form action="{{ route('admin_reset_password_sub') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input type="hidden" name="email" value="{{ $email }}">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Confirmation Password</label>
                                            <input type="password" class="form-control" name="retype_password"/>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary bg-website">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div> <!-- end card-body-->
                            </div>
                            <!-- end card -->

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted bg-body">Back to <a href="{{ route('login') }}" class="text-muted ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
                                </div> <!-- end col -->
                            </div>
                        <!-- end row -->

                        </div> <!-- end col -->
                    </div>
                <!-- end row -->
                </div>
            <!-- end container -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt fw-medium">
            <span class="bg-body"><script>document.write(new Date().getFullYear())</script> © Dayal Saha.com</span>
        </footer>
        <!-- Vendor js -->
        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

        <script type="text/javascript">
            $(document).on('click', '.toggle-password', function() {

                $(this).toggleClass("ri-eye-off-line");

                var input = $(".pass_log_id");
                input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
            }
            @endif
        </script>


    </body>

</html>
