<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Admin SmartTech</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
          href="{{url('Admin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    {{--font--}}
    <link rel="stylesheet" type="text/css" href="{{url('Admin//files/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Admin/files/assets/icon/feather/css/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Admin/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{url('Admin/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Admin/files/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Admin/files/assets/css/component.css')}}">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('slide-bar')

        @yield('content')
    </div>
</div>
</div>

</div>

<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{url('Admin/files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript"
        src="{{url('Admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{url('Admin/files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{url('Admin/files/bower_components/chart.js/js/Chart.js')}}"></script>
<!-- amchart js -->
<script src="{{url('Admin/files/assets/pages/widget/amchart/amcharts.js')}}"></script>
<script src="{{url('Admin/files/assets/pages/widget/amchart/serial.js')}}"></script>
<script src="{{url('Admin/files/assets/pages/widget/amchart/light.js')}}"></script>
<!-- Editable-table js -->
<script type="text/javascript" src="{{url('Admin/files/assets/pages/edit-table/jquery.tabledit.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/assets/pages/edit-table/editable.js')}}"></script>
<!-- data-table js -->
<script src="{{url('Admin/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('Admin/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('Admin/files/assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{url('Admin/files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{url('Admin/files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{url('Admin/files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('Admin/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('Admin/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script
    src="{{url('Admin/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script
    src="{{url('Admin/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- i18next.min.js -->
<!-- jquery file upload js -->
<script src="{{url('Admin/files/assets/pages/jquery.filer/js/jquery.filer.min.js')}}"></script>
<script src="{{url('Admin/files/assets/pages/filer/custom-filer.js')}}" type="text/javascript"></script>
<script src="{{url('Admin/files/assets/pages/filer/jquery.fileuploads.init.js')}}" type="text/javascript"></script>
<!-- Model animation js -->
<script src="{{url('Admin/files/assets/js/classie.js')}}"></script>
<script src="{{url('Admin/files/assets/js/modalEffects.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('Admin/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('Admin/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('Admin/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->
<script src="{{url('Admin/files/assets/pages/data-table/js/data-table-custom.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/assets/js/SmoothScroll.js')}}"></script>
<script src="{{url('Admin/files/assets/js/pcoded.min.js')}}"></script>
<script src="{{url('Admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('Admin/files/assets/js/vartical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/assets/pages/dashboard/analytic-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{url('Admin/files/assets/js/script.js')}}"></script>
@yield('ckeditor')
</body>

</html>
