<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{ asset('bootstrap/admin-custom/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bootstrap/admin-custom/custom-admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" sizes="32x32" type="image/png">
</head>

<body class="sb-nav-fixed">
    @include('layouts.components.admin.navbar')

    <div id="layoutSidenav">
        @include('layouts.components.admin.navside')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')

            </main>
            @include('layouts.components.admin.footer')
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap/admin-custom/custom-admin.js') }}"></script>
    <script src="{{ asset('bootstrap/admin-custom/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/admin-custom/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/admin-custom/datatables-simple-demo.js') }}"></script>
</body>

</html>
