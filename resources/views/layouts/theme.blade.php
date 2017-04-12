<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/morris/morris.css')}}">

    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/css/comments.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>

</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
    @include('shared.navbar')
    @include('shared.sidebar')
    <!-- Start content -->
    <div class="content-page">

        <div class="content">
            <div class="container">
                <!--Our notification system-->
                @include('shared.noty')
                @yield('working_area')
            </div>
        </div>
    </div>

</div>














<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{URL::asset("assets/js/jquery.min.js")}}"></script>
<script src="{{URL::asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{URL::asset("assets/js/detect.js")}}"></script>
<script src="{{URL::asset("assets/js/fastclick.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.slimscroll.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.blockUI.js")}}"></script>
<script src="{{URL::asset("assets/js/waves.js")}}"></script>
<script src="{{URL::asset("assets/js/wow.min.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.nicescroll.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.scrollTo.min.js")}}"></script>

<!--Morris Chart-->
<script src="{{URL::asset("assets/plugins/morris/morris.min.js")}}"></script>
<script src="{{URL::asset("assets/plugins/raphael/raphael-min.js")}}"></script>

<!-- Counter Up  -->
<script src="{{URL::asset("assets/plugins/waypoints/lib/jquery.waypoints.js")}}"></script>
<script src="{{URL::asset("assets/plugins/counterup/jquery.counterup.min.js")}}"></script>

<!-- Dashboard init -->
<script src="{{URL::asset("assets/pages/jquery.dashboard.")}}"></script>


<!-- App js -->
<script src="{{URL::asset("assets/js/jquery.core.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.app.js")}}"></script>
<script src="{{URL::asset("js/custom.js")}}"></script>
</body>
</html>
