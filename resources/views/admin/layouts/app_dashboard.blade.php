<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('admin.layouts.include_dashboard.top_asset')
</head>
<body>
<div class="wrapper ">
    @include('admin.layouts.include_dashboard.sidebar')

    <div class="main-panel">
        <!-- Navbar -->
        @include('admin.layouts.include_dashboard.navbar')
        <!-- End Navbar -->
        @yield('content')

    </div>

</div>
</body>
@include('admin.layouts.include_dashboard.bottom_asset')
</html>
