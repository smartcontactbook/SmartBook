<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('css/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bower_components/morris.js/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div >
            <div id="master"></div>
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        
        <script src="{{ asset('js/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/morris.js/morris.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('js/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('js/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('js/dist/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('js/dist/js/demo.js') }}"></script>
    </body>
</html>
