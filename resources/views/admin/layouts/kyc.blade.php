<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? 'Tiwar KYC Manager' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tiwar KYC Manager" name="description" /> <!-- App favicon -->
    <link rel="shortcut icon" href="{{ config('app.url') }}/assets/images/cropped-favicon1-32x32.png">

    <!-- Layout config Js -->
    <script src="{{ config('app.url') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ config('app.url') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ config('app.url') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ config('app.url') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ config('app.url') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- cloudflare bootstrap-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Toaster -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Toaster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <div id="layout-wrapper">



    </div>


    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.inc.footer')

    @yield('scripts')

</body>

</html>
