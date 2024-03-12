<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.admin.head')
    @yield('css')
</head>

<body>
    <div class="container-scroller">
        @include('include.admin.header')
        <div class="container-fluid page-body-wrapper">
            @include('include.admin.sidebar')
            <!-- main-panel start -->
            <div class="main-panel">
                @yield('content')
                @include('include.admin.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('include.admin.foot')
    @yield('js')
</body>

</html>
