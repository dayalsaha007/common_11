<head>
    <meta charset="utf-8" />
    <title>@yield('head_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/daterangepicker/daterangepicker.css')}}">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}">

    <!-- Theme Config Js -->
    <script src="{{asset('backend/assets/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
     <!-- custom css -->
    <link href="{{asset('backend/assets/css/custom.css')}}" rel="stylesheet" type="text/css"  />

    <!-- Icons css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="{{asset('backend/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('backend/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('backend/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('backend/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('backend/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('backend/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet')}}" type="text/css" />


    <!-- Select2 css -->
    <link href="{{asset('backend/assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">

    @include('backend.dashboard.upper_script')




</head>
