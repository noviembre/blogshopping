<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/glo/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/glo/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/glo/plugins/themify/css/themify.css') }}" rel="stylesheet" type="text/css">

    <!-- Angular Tooltip Css -->
    <link href="{{ asset('assets/glo/plugins/angular-tooltip/angular-tooltips.css') }}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{ asset('assets/glo/dist/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/glo/dist/css/glu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/glo/dist/css/glu-responsive.min.css') }}" rel="stylesheet">

    <!-- Custom styles for Color -->
    <link id="jssDefault" rel="stylesheet" href="{{asset('assets/glo/dist/css/skins/default.css')}}">
    @yield('styles')
    <link href="{{ asset('toastr/css/toastr.min.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">

<!-- ===============================
    Navigation Start
====================================-->
<nav class="navbar navbar-expand-lg bb-1 navbar-light br-full-dark bg-dark fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-dark bb-1 br-1 br-light-dark">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler">
            <i class="ti-align-left"></i>
        </a>
        <a class="gredient-cl navbar-brand" href="/">Admin</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">









        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav bg-light-dark" id="exampleAccordion">


                <!-- Start Post -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tour">
                    <a class="nav-link" href="{{ route('products.index') }}">
                        <i class="ti i-cl-1 ti-home"></i>
                        <span class="nav-link-text">Products</span>
                    </a>
                </li>

                <!-- Ends Post -->



                <!-- Start invoice -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pagina Principal">
                    <a class="nav-link" href="/" target="_blank">
                        <i class="ti i-cl-6 ti-eye"></i>
                        <span class="nav-link-text">Pag. Principal</span>
                    </a>
                </li>
                <!-- End Invoice -->


                <!-- Start invoice -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Salir">
                    <a class="nav-link" href="/logout">
                        <i class="ti i-cl-7 ti-power-off"></i>
                        <span class="nav-link-text">Logout</span>
                    </a>
                </li>
                <!-- End Invoice -->



            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->







        <!-- =============== Search Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="ingrese un Tour para buscar">
                    </div>
                </form>
            </li>
        </ul>
        <!-- =============== End Search Bar ============== -->












        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/glo/dist/img/admin.png')}}" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">{{ Auth::user()->name }}</b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li class="dropdown-header green-bg">
                        <div class="header-user-pic">
                            <img src="{{asset('assets/glo/dist/img/admin.png')}}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">{{ Auth::user()->name }}</span>
                            <span class="a-dropdown__header-subtitle">
                                Usuario
                            </span>
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="ti-user"></i> Mi Perfil</a></li>

                    <li><a class="dropdown-item" href="/logout"><i class="fa fa-power-off"></i>
                            Salir
                        </a></li>
                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->








<!-- =========================================================
    Content Wrapper Starts
============================================================ -->

@yield('content')

<!-- =========================================================
    Content Wrapper Ends
============================================================ -->
@yield('scripts')
<!-- Scripts para las alertas  -->
<script src="{{ asset('toastr/js/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
toastr.success("{{ Session::get('success') }}")
    @endif

    @if(Session::has('info'))
toastr.info("{{ Session::get('info') }}")
    @endif

    @if(Session::has('warning'))
toastr.warning("{{ Session::get('warning') }}")
    @endif

    @if(Session::has('error'))
toastr.error("{{ Session::get('error') }}")
    @endif
</script>
</body>

</html>