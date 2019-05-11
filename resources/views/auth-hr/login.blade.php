<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ _('Login Page') }}</title>


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


        <!-- Create your own class to load custum image [ SAMPLE ]-->
    <style>
        .demo-my-bg{
            background-image : url("{{ asset('assets') }}/img/balloon.jpg");
        }
    </style>


        
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    Detailed information and more samples can be found in the document.

    =================================================-->
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">
        
        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay" class="bg-img demo-my-bg" style="background-image: url({{ asset('assets') }}/img/bg-img-3.jpg)"></div>
        
        
        <!-- LOGIN FORM -->
        <!--===================================================-->
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h1 class="h3">{{ _('Account Login') }}</h1>
                        <p>{{ _('Sign In to your account') }}</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email" autofocus>
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="checkbox pad-btm text-left">
                            <input name="remember" id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
                            <label for="demo-form-checkbox">{{ _('Remember me') }}</label>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ _('Sign In') }}</button>
                    </form>
                </div>
        
                <div class="pad-all">
                    <a href="#" class="btn-link mar-rgt">{{ _('Forgot password ?') }}</a>
                    <a href="#" class="btn-link mar-lft">{{ _('Create a new account') }}</a>
        
                    <div class="media pad-top bord-top">
                        <div class="pull-right">
                            <a href="#" class="pad-rgt"><i class="psi-facebook icon-lg text-primary"></i></a>
                            <a href="#" class="pad-rgt"><i class="psi-twitter icon-lg text-info"></i></a>
                            <a href="#" class="pad-rgt"><i class="psi-google-plus icon-lg text-danger"></i></a>
                        </div>
                        <div class="media-body text-left text-bold text-main">
                            {{ _('Login with') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        
        
        
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    </body>
</html>
