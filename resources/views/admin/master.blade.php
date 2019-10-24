<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/') }}admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/') }}admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/') }}admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="{{ asset('/') }}admin/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ asset('/') }}/admin/css/nice-select.css">
    <link href="{{ asset('/') }}admin/css/theme.css" rel="stylesheet" media="all">
    <style>
        .dropdown-content{
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 291px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
    </style>
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    @include('admin.sidebar.sidebar')
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
        @include('admin.header.header')

        <!-- END HEADER DESKTOP-->

        <!-- BREADCRUMB-->
        @yield('body')

        @include('admin.footer.footer')
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('/') }}admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('/') }}admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{ asset('/') }}admin/vendor/slick/slick.min.js">
</script>
<script src="{{ asset('/') }}admin/vendor/wow/wow.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/animsition/animsition.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{ asset('/') }}admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{ asset('/') }}admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('/') }}admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/select2/select2.min.js">
</script>
<script src="{{ asset('/') }}admin/vendor/vector-map/jquery.vmap.js"></script>
<script src="{{ asset('/') }}admin/vendor/vector-map/jquery.vmap.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/vector-map/jquery.vmap.sampledata.js"></script>
<script src="{{ asset('/') }}admin/vendor/vector-map/jquery.vmap.world.js"></script>
<script src="{{ asset('/') }}admin/vendor/jquery-ui.min.js"></script>

<!-- Main JS-->
<script src="{{ asset('/') }}admin/js/main.js"></script>
<script src="{{ asset('/') }}/admin/js/jquery.nice-select.min.js">
</script>


<script src="{{ asset('/') }}admin/sweetalert2/dist/sweetalert2.all.js"></script>
<script>
    $(document).ready(function() {
        $('#datepick').datepicker()
    });
    var alerts=document.getElementById('alert');

    if(alerts.innerHTML==' '){

        Swal.fire({
            position: 'top-center',
            showConfirmButton:true,
            inputAutoTrim: false ,
            type: 'success',
            title: 'Student info has been saved',
            timer: 800,

        });

    }
    setTimeout(function () {
        $(document).ready(function () {
            $('select').niceSelect();
        });
    },1000);







</script>


</body>

</html>
<!-- end document-->
