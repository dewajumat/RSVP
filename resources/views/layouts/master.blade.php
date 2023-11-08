<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rumah Sewa Villa Pertiwi</title>

    
    {{-- local-css --}}
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/scripts.js') }}"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <script src="{{ URL::asset('js/sort-table.js') }}"></script>

</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand" style="" id="green">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" style="color: white" href="/vkontrakan/index" ><strong>Rumah Sewa Villa Pertiwi</strong></a>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white"><i class="fas fa-user fa-fw" style="color: white"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav" style="background: #2cc185; color:white" id="sidenavAccordion green">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/vkontrakan/index" style="color: white">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="/vkontrakan/mindex" style="color: white">
                            <div class="sb-nav-link-icon"><i class="fas fa-wrench"></i></div>
                            Pemeliharaan
                        </a>
                        <a class="nav-link" href="/vkontrakan/report" style="color: white">
                            <div class="sb-nav-link-icon"><i class="fas fa-money-bill"></i></div>
                            Laporan Keuangan
                        </a>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="/vkontrakan/landpage" style="color: white">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Landing Page
                        </a>
                        <a class="nav-link" href="/vkontrakan/landpage#about" style="color: white">
                            <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                            About
                        </a>
                        <a class="nav-link" href="/vkontrakan/landpage#contact" style="color: white">
                            <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                            Contact
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    
</body>
</html>