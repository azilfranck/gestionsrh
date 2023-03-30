<x-app-layout>
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
        <title>Brunette I Basic Table</title>
        <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Bootstrap table CSS -->
        <link href="vendors/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <!-- Toggles CSS -->
        <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
        <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="dist/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="loader-pendulums"></div>
        </div>
        <!-- /Preloader -->

        <!-- HK Wrapper -->
        <div class="hk-wrapper hk-vertical-nav">



            <!-- Vertical Nav -->

            <!-- Setting Panel -->
            <div class="hk-settings-panel">
                <div class="nicescroll-bar position-relative">
                    <div class="settings-panel-wrap">
                        <div class="settings-panel-head">
                            <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
                            <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                        </div>
                        <hr>
                        <h6 class="mb-5">Layout</h6>
                        <p class="font-14">Choose your preferred layout</p>
                        <div class="layout-img-wrap">
                            <div class="row">
                                <a href="javascript:void(0);" class="col-6 mb-30 active">
                                    <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                                    <i class="zmdi zmdi-check"></i>
                                </a>
                                <a href="dashboard2.html" class="col-6 mb-30">
                                    <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                                    <i class="zmdi zmdi-check"></i>
                                </a>
                                <a href="dashboard3.html" class="col-6 mb-30">
                                    <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                                    <i class="zmdi zmdi-check"></i>
                                </a>
                                <a href="dashboard4.html" class="col-6 mb-30">
                                    <img class="rounded opacity-70" src="dist/img/layout4.png" alt="layout">
                                    <i class="zmdi zmdi-check"></i>
                                </a>
                                <a href="dashboard5.html" class="col-6">
                                    <img class="rounded opacity-70" src="dist/img/layout5.png" alt="layout">
                                    <i class="zmdi zmdi-check"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h6 class="mb-5">Navigation</h6>
                        <p class="font-14">Menu comes in two modes: dark & light</p>
                        <div class="button-list hk-nav-select mb-10">
                            <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                            <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                        </div>
                        <hr>
                        <h6 class="mb-5">Top Nav</h6>
                        <p class="font-14">Choose your liked color mode</p>
                        <div class="button-list hk-navbar-select mb-10">
                            <button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                            <button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>Scrollable Header</h6>
                            <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                        </div>
                        <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                    </div>
                </div>
                <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
                <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
            </div>
            <!-- /Setting Panel -->

            <!-- Main Content -->
            <div class="hk-pg-wrapper">


                <!-- Container -->
                <div class="container">
                    <!-- Title -->

                    <!-- /Title -->

                    <!-- Row -->
                    <br>
                    <br>
                    <br>
                    <center>
                        <h1 class="shadow"> LISTE DES AGENTS DE LA DIRECTION DES AFFAIRES FINANCES </h1>
                        <center>
                            <br>
                            <div class="row">
                                <div class="col-xl-12">


                                    <section class="hk-sec-wrapper">
                                        <h5 class=""></h5>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-wrap">
                                                    <table  class="table table-hover w-100 ">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="9">
                                                                    @if ($message = Session::get('flash_message'))

                                                                    <div class="alert alert-success alert-block">

                                                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                                                        <strong>{{ $message }}</strong>

                                                                    </div>

                                                                    @endif
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>n°</th>
                                                                <th>Name</th>
                                                                <th>EMAIL</th>
                                                                <th>MATRICULE</th>
                                                                <th>AVATAR</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($agent as $item)
                                                            <tr>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->email}}</td>
                                                                <td>{{$item->matricule}}</td>
                                                                <td>{{$item->avatar}}</td>
                                                                <td>{{$item->action}}</td>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <a href="{{ route('voiragent',['id'=> $item->id]) }}" title="View agent"><button class="btn btn-info btn-sm" aria-hidden="true"></i> View</button></a> <br>
                                                                    <a href="{{ route('updateadmin', ['id' => $item->id]) }}" title="Edit agent"><button class="fa fa-pencil-square-o" aria-hidden="true"></button> Edit</a>
                                                                    <form method="GET" action="{{ url('/update.show/' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                        {{ method_field('DELETE') }}
                                                                        {{ csrf_field() }}


                                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                                    </form>
                                                                    <!--<a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a> -->
                                                                </td>
                                                            </tr>
                                                            @endforeach


                                                            </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </section>




                                </div>
                            </div>
                            <!-- /Row -->

                </div>
                <!-- /Container -->

                <!-- Footer -->
                <div class="hk-footer-wrap container">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p class="d-inline-block">Follow us</p>
                                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- /Footer -->

            </div>
            <!-- /Main Content -->

        </div>
        <!-- HK Wrapper -->

        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Slimscroll JavaScript -->
        <script src="dist/js/jquery.slimscroll.js"></script>

        <!-- FeatherIcons JavaScript -->
        <script src="dist/js/feather.min.js"></script>

        <!-- Fancy Dropdown JS -->
        <script src="dist/js/dropdown-bootstrap-extended.js"></script>

        <!-- Bootstrap-table JavaScript -->
        <script src="vendors/bootstrap-table/dist/bootstrap-table.min.js"></script>
        <script src="dist/js/bootstrap-table-data.js"></script>

        <!-- Peity JavaScript -->
        <script src="vendors/peity/jquery.peity.min.js"></script>
        <script src="dist/js/peity-data.js"></script>

        <!-- Toggles JavaScript -->
        <script src="vendors/jquery-toggles/toggles.min.js"></script>
        <script src="dist/js/toggle-data.js"></script>

        <!-- Init JavaScript -->
        <script src="dist/js/init.js"></script>
        <script src="vendors/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Slimscroll JavaScript -->
        <script src="dist/js/jquery.slimscroll.js"></script>

        <!-- Data Table JavaScript -->
        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="dist/js/dataTables-data.js"></script>

        <!-- FeatherIcons JavaScript -->
        <script src="dist/js/feather.min.js"></script>

        <!-- Fancy Dropdown JS -->
        <script src="dist/js/dropdown-bootstrap-extended.js"></script>


        <!-- Toggles JavaScript -->
        <script src="vendors/jquery-toggles/toggles.min.js"></script>
        <script src="dist/js/toggle-data.js"></script>

        <!-- Init JavaScript -->
        <script src="dist/js/init.js"></script>

        @push('scripts')
             <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
             <script>
              let table = new DataTable('Table');
             </script>
        @endpush



    </body>

    </html>
</x-app-layout>
