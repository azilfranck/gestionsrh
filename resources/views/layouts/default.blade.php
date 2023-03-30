<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>layout Nav</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.css" rel="stylesheet" type="text/css')}}">
</head>



<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <h1>DAF-RHAS</h1>
            <ul class="navbar-nav hk-navbar-content">
                
               
                
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            
                            <div class="media-body">
                                <span>{{ Auth::user()->name }}<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <x-dropdown-link class="dropdown-item" :href="route('profile.edit')"><i class="dropdown-icon zmdi zmdi-card"></i>
                            {{ __('MODIFIER PROFIL') }}
                        </x-dropdown-link>
                        
                        <div class="dropdown-divider"></div>
                        
                        <form  method="POST"  action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link class="dropdown-item"  :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="dropdown-icon zmdi zmdi-power"></i>
                                {{ __('DECONNEXION') }}
                            </x-dropdown-link>
                        </form>

                    </div>
                    
                </li>
            </ul>
        </nav>
       
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard1.html">CRM</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard2.html">Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard3.html">Statistics</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="dashboard4.html">Classic</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="dashboard5.html">Analytics</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Pages</span>
                            </a>
                            <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('modification.information')}}">Modification information agent</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">autre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery.html">autre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="activity.html">autre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.html">autre</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                    
                    
                </div>
            </div>
        </nav>
       
        <!-- /Vertical Nav -->

     
    <div>
    @yield('content')
    </div>
   
	

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('dist/js/init.js')}}"></script>

</body>

</html>