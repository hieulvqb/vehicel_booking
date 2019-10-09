<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{---------------------- css ----------------------}}
    @include('auth.layouts.include_registering_login.top_asset')
    {{----------------------end css ----------------------}}
</head>
<body class="off-canvas-sidebar">

{{---------------------menu---------------------}}
@include('auth.layouts.include_registering_login.nav_login_logout')
{{---------------------end menu---------------------}}

{{---------------------content---------------------}}
@yield('content')
{{---------------------end content--------------------}}

{{-------------------------------js-------------------------------}}
@include('auth.layouts.include_registering_login.bottom_asset')
{{-------------------------------end js-------------------------------}}


<script>
    $(document).ready(function () {
        md.checkFullPageBackgroundImage();
    });
</script>
</body>
</html>
