<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Blog :: Admin</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{{ asset('admin/plugins/charts-c3/c3.min.css')}}"/>

<!-- Core css -->
<link rel="stylesheet" href="{{ asset('admin/css/main.css')}}"/>
<link rel="stylesheet" href="{{ asset('admin/css/theme1.css')}}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"/>
</head>

<body class="font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

@yield('content')


<script src="{{ asset('admin/bundles/lib.vendor.bundle.js')}}"></script>

<script src="{{ asset('admin/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{ asset('admin/bundles/counterup.bundle.js')}}"></script>
<script src="{{ asset('admin/bundles/knobjs.bundle.js')}}"></script>
<script src="{{ asset('admin/bundles/c3.bundle.js')}}"></script>

<script src="{{ asset('admin/js/core.js')}}"></script>
<script src="{{ asset('admin/js/page/project-index.js')}}"></script>
</body>

<!-- soccer/project/  07 Jan 2020 03:37:22 GMT -->
</html>