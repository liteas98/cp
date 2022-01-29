<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    @yield('link')
    @include('backend.inc.style')
    @yield('style')
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
@include('backend.inc.header')

@include('backend.inc.nav')

<div class="app-content content">

    <div class="content-overlay"></div>

    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper container-xxl p-0">

        <div class="content-header row"></div>

        <div class="content-body">

            @yield('content')

        </div>

    </div>

</div>

<div class="sidenav-overlay"></div>

<div class="drag-target"></div>

@include('backend.inc.footer')

@yield('modal')

@include('backend.inc.script')

@yield('script')
</body>
</html>
