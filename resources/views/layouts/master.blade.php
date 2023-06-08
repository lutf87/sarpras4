<!-- Header -->
@include('layouts.contents.header')
<!-- Header -->
<body class="sb-nav-fixed">
    <!-- navbar -->
    @include('layouts.contents.navbar')
    <!-- navbar -->
    <div id="layoutSidenav">
        <!-- sidebar -->
        @include('layouts.contents.sidebar')
        <!-- sidebar -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">@yield('page-title')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <!-- contents -->
                    @yield('contents')
                    <!-- contents -->
                </div>
            </main>
            <footer class="py-4 bg-dark mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Sarpras STMIK PPKIA PRADNYA PARAMITA 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- script -->
    @include('layouts.scripts.script')
    <!-- script -->
</body>

</html>
