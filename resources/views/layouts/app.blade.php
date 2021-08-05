<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>HRMS</title>
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/toastr.min.css')}}"> --}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/semi-dark-layout.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/form-wizard.css')}}">


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/charts/chart-apex.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/extensions/ext-component-toastr.css')}}"> --}}
    <!-- END: Page CSS-->

     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/form-validation.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-auth.css')}}">

     <!-- END: Page CSS-->

     {{-- for date picker  --}}
     <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/pickers/form-flat-pickr.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/pickers/form-pickadate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <div id="app"></div>






    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->


     <!-- BEGIN: Page Vendor JS-->
     <script src="{{asset('vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
     <script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
     <script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
     <!-- END: Page Vendor JS-->














     {{-- for date time picker  --}}
     <script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
     <script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
     <script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
     <script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
     <script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>


 <script src="{{asset('js/app.js')}}"></script>
 <script src="{{asset('js/scripts/forms/pickers/form-pickers.js')}}"></script>
 <script src="{{asset('js/scripts/forms/form-select2.js')}}"></script>
 <!-- BEGIN: Page JS-->
 <script src="{{asset('js/scripts/forms/form-wizard.js')}}"></script>
 <!-- END: Page JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('js/core/app-menu.js')}}"></script>
<script src="{{asset('js/core/app.js')}}"></script>
<!-- END: Theme JS-->

</body>
<!-- END: Body-->

</html>
