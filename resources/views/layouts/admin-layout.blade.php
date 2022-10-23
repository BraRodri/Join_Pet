<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta http-equiv="Access-Control-Allow-Origin" content="*">

        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
        <title>@yield('pagina') | Panel Control | Join Pet</title>

        <x-admin.css-admin></x-admin.css-admin>

    </head>
    <body id="page-top" class="h-100">

        @routes

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <x-admin.sidebar></x-admin.sidebar>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <x-admin.topbar></x-admin.topbar>
                    <!-- End of Topbar -->

                    {{ $slot }}

                </div>

                <!-- Footer -->
                <x-admin.footer-admin></x-admin.footer-admin>
                <!-- End of Footer -->

            </div>

        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <x-admin.js-admin>
            {{$js}}
        </x-admin.js-admin>

    </body>
</html>
