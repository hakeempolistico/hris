
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('assets') }}/css/nifty.min.css" rel="stylesheet">


    <!--Premium Icons [ OPTIONAL ]-->
    <link href="{{ asset('assets') }}/premium/icon-sets/icons/line-icons/premium-line-icons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/premium/icon-sets/icons/solid-icons/premium-solid-icons.min.css" rel="stylesheet">


    <!--=================================================-->


    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{ asset('assets') }}/css/pace.min.css" rel="stylesheet">
    <script src="{{ asset('assets') }}/js/pace.min.js"></script>

    @stack('css')
        
</head>

<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!-- NAVBAR -->
        @include('layouts.navbar')

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                {{-- Page Head --}}
                @include('layouts.head.page-head')


                <!-- CONTENT -->
                @yield('content')

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!-- SIDENAV -->
            @include('layouts/sidebar')
            

        </div>

        

       <!-- FOOTER -->
       @include('layouts.footer')


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="{{ asset('assets') }}/js/nifty.min.js"></script>

    @stack('javascript')

</body>
</html>
