<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Tiwar KYC Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tiwar KYC Manager | a way to veriFy someone's identity" name="description" />
    <!-- App favicon -->
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
    <style>
        .topBar {
            background-color: #047edf;
        }
.rounded {
    border-radius: var(--vz-border-radius) !important;
    height: 95px;
    width: 95px;
    object-fit: cover;}
        .topBar li a,
        .topBar li a:hover:not(.active) {
            color: #fff;
            padding: 2px 10px;
            text-decoration: none;
            font-size: 16px;
        }

        li {
            list-style: none;
        }

        .grayTheme_header,
        .header {
            padding: 10px;
            text-align: center;
            width: 100%;
            height: 100%;
        }
.job-list-row ul{
    display: inline;
}.job-list-row ul li{
    display: inline-block;
}
        .bg-gradient-fivth {
            background: -webkit-gradient(linear, left top, right top, from(#da8cff), to(#9a55ff)) !important;
            background: linear-gradient(to right, #75003e5c, #75003e) !important;
        }

        .card.card-img-holder .card-img-absolute {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
        }

        .text-white {
            color: #ffffff !important;
        }

        .bg-gradient-forth {
            background: -webkit-gradient(linear, left top, right top, from(#da8cff), to(#9a55ff)) !important;
            background: linear-gradient(to right, #783f084f, #783f08) !important;
        }

        .department_name h5 {
            font-size: 22px;
            /* color: #fff; */
            text-align: center;
            text-transform: capitalize;
        }

        .department_name h2 {
            font-size: 28px;
            text-align: center;
            color: #fff;
        }

        .header {
            background: linear-gradient(17deg, #fff, #047edf 99%) !important;
        }
    </style>
</head>

<body>
    <div class="topBar">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-sm-6">
                    <ul>
                        <li>
                            <marquee scrollamount="5"
                                style="line-height: initial;
    margin-top: 7px;
    display: block;">
                                <a href="#" style="      color: #fff;
    ">Welcome to Tiwar KYC Panel </a>
                            </marquee>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6">
                    <ul style="float: right;    display: inline;">
                        <li style="    display: inline-block;">
                            <div class=" forzoominoutFonts pull-right mt-2 mx-2"><a href="{{ config('app.url') }}/"
                                    class="btn btn-primary">Agent Login</a></div>
                        </li>
                        <li class="nobdr theme" style="    display: inline-block;"><a href="{{ route('kyc.create') }}"
                                class="btn btn-warning">Create KYC</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="header" id="sizeTarget">
        <div class="container-fluid">
            <div class="row size">
                <div class="col-12 col-sm-4">
                    <div class="left_side_logo"> <a href="{{ config('app.url') }}/" class="d-inline-block auth-logo">
                            <img src="{{ config('app.url') }}/assets/images/classic-theme_footer_logo.png"
                                alt="" style="max-height: 77px;">
                        </a></div>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="department_name">
                        <h2>Tiwar KYC Panel</h2>
                        <h5>a way to veriFy someone's identity</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <section class="section">
        <div class="container">
            <div class="InnerSection" style="border: 0px;">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 stretch-card grid-margin">
                                <div class="card bg-gradient-fivth card-img-holder text-white">
                                    <div class="card-body"><img src="{{ config('app.url') }}/assets/images/circle.svg"
                                            class="card-img-absolute" alt="circle-image">
                                        <h4 class="font-weight-normal mb-2 text-white">Total Registrations<i
                                                class="mdi mdi-account-multiple-outline mdi-24px float-right"></i></h4>
                                        <span
                                            style="color: rgb(255, 255, 255); font-size: 36px; font-weight: bold; width: 100%;">{{$total->value}}</span>
                                        <h6 class="card-text mt-2 text-white">Till - {{date('d M, Y')}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card grid-margin">
                                <div class="card bg-gradient-forth card-img-holder text-white">
                                    <div class="card-body"><img src="{{ config('app.url') }}/assets/images/circle.svg"
                                            class="card-img-absolute" alt="circlImage">
                                        <h4 class="font-weight-normal mb-2 text-white">Today's New Registrations<i
                                                class="mdi mdi-account mdi-24px float-right"></i></h4><span
                                            style="color: rgb(255, 255, 255); font-size: 36px; font-weight: bold; width: 100%;">{{$today->value}}</span>
                                        <h6 class="card-text mt-2 text-white">{{date('d M, Y')}}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div><a href="{{ route('kyc.create') }}"
                                style="
    width: 100%;
    font-size: 20px;
    margin-bottom: 10px;
"
                                class="btn btn-warning"><i class="mdi mdi-account-lock mdi-24px "></i> Create KYC</a>
                        </div>
                        <div><a href="{{ config('app.url') }}/"
                                style="
    width: 100%;
    font-size: 20px;
    margin-bottom: 10px;
"
                                class="btn btn-primary"><i class="mdi mdi-account-multiple-outline mdi-24px "></i> Agent
                                Login</a> </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                   
              
            <!-- end page title -->
<div class="card">
                                    <div class="card-header">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-auto">
                                                <div>
                                                     <h4 class="mt-3 mb-3">Featured KYC Holders</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <form action="?" method="GET">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="search" id="default-search" name="keyword" value="{{ $_GET['keyword'] ?? '' }}" class="form-control" id="searchResultList" placeholder="Search for candidates...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
</div>  </div>
            </div>

            <div class="job-list-row" style="background: #ddd;
    padding: 19px 8px 0 10px;">
                 <marquee scrollamount="5">
  @foreach ($societies as $society)
<ul>
                    <li class="card">
                        <div class="card-body">
                            <div class="d-flex  align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar-lg rounded">
                                        <img src="{{ Storage::url($society->last_copy)}}" onerror="this.onerror=null;this.src='{{ config('app.url') }}/assets/images/360_sWV.jpg';" alt=""
                                            class="member-img img-fluid d-block rounded">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="pages-profile.html">
                                        <h5 class="fs-16 mb-1">{{ $society->proposer }}</h5>
                                    </a>
                                    <p class="badge text-bg-success">{{ $society->policy }}</p>

                                    <div class="d-flex gap-4 mt-2 text-muted">
                                        <div> Occupation :<br>{{ $society->ocupation }}</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                    @endforeach
                </marquee>

            </div>
        </div>
    </section>


    <footer class="footerparttop"
        style="
    background: #424242;
    padding: 18px 0;
    text-align: center;
    color: #fff;
">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 w3c">
                    <div class="footerTitle">
                        <h5 style="
    color: #fff;
">This Website is Designed,Developed and Content Owned by<span
                                style="color: rgb(4, 126, 223); margin-left: 5px;">Tiwar Empire PVT LTD</span><br>©
                            2014 Copyright.</h5>
                        <p>(This website is best viewed on IE 11+, Mozilla Firefox, Google Chrome)</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- JAVASCRIPT -->
    <script src="{{ config('app.url') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('app.url') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ config('app.url') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ config('app.url') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ config('app.url') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ config('app.url') }}/assets/js/plugins.js"></script>
    <!-- particles js -->
    <script src="{{ config('app.url') }}/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ config('app.url') }}/assets/js/pages/particles.app.js"></script>
</body>

</html>
<!-- end auth-page-wrapper -->
