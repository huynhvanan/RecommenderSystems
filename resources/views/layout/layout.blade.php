<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon image -->
    <link rel="shortcut icon" type="image/png" href="{{ url('public/images/logo_ctu.png') }}"/>

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <!-- Ckeditor 4 -->
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('public/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ url('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('public/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('public/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('public/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <!-- Bootstrap-datepicker -->
    <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('public/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    @yield('link_cdn')

    <style type="text/css" media="screen">
        table {
            margin: 5;
            padding: 0;
            width: 100%;
            table-layout: auto;

        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .10em;
        }

        table th,
        table td {
            padding: .150em;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        table th {
            font-size: 12px;
            text-transform: uppercase;
            color: black;font-weight: bold;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
                width: 100%;
            }

            table thead {
                clip: rect(0 0 0 0);
                height: 1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
            }

            table tr {
                display: block;
                margin-bottom: 15px;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .6em;
                text-align: right;

            }

            table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
                border: 1px solid #ddd;
            }
        }

        /*error jquery*/
        .error{
            color: #ff0000;
            font-style: italic;
        }
    </style>

</head>
<!-- Loader CSS khi chuy???n trang myFunction -->
<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Mulish', sans-serif;" onload="myFunction()">

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown p-0">
                <a href="#" class="nav-link text-danger" data-toggle="modal" data-target="#modelLogout">
                    <b><i class="fa fa-sign-out"></i> ????ng xu???t</b>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Modal -->
    <div class="modal fade" id="modelLogout" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-2">
                    <h4>B???n c?? mu???n ????ng xu???t kh??ng ?</h4>
                </div>
                <div class="modal-footer p-2">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> ????ng</button>
                    <a class="btn btn-primary btn-sm" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> ????ng xu???t</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{ asset('public/images/logo_ctu.png') }}" class="brand-image img-circle elevation-2" style="opacity: .8">
            <span class="brand-text font-weight-light font-weight-bold"><b>H??? Th???ng G???i ??</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                @if((Auth::check() && Auth::user()->role_id == 1) || (Auth::check() && Auth::user()->role_id == 2))
                    <div class="image">
                        @php($teachers = DB::table('teachers')->where('id', Auth::user()->teacher_id)->first())
                        @if ($teachers->avatar != null)
                            <img src="{{ url('public/upload_avatar/'.$teachers->avatar) }}" class="img-circle elevation-2">
                        @else
                            <img src="{{ url('public/dist/img/user_avatar.png') }}" class="img-circle elevation-2">
                        @endif

                    </div>
                    <div class="info">
                        <a href="{{ url('page-profile-user/'.$teachers->id) }}" class="d-block">
                            <b>{{ Auth::user()->username }}</b>
                        </a>
                    </div>
                @else
                    <div class="image">
                        <img src="{{ url('public/dist/img/user_avatar.png') }}" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        @if(Auth::check() && Auth::user()->student_id != null)
                            @php($students = DB::table('students')->where('id', Auth::user()->student_id)->first())
                            <a href="{{ url('view-infor-student/'.$students->id) }}" class="d-block">
                                <b>{{ Auth::user()->username }}</b>
                            </a>
                        @else
                            <script>location.href = "{{ url('logout') }}";</script>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    @if (Auth::check() && Auth::user()->role_id == 1)

                        {{--B???NG ??I???U KHI???N--}}
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ url('/') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>B???ng ??i???u khi???n</p>
                            </a>
                        </li>
                        {{--B???NG ??I???U KHI???N--}}
                        <div class="dropdown-divider mb-3"></div>


                        {{--QU???N L?? C???P B???C--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-sitemap"></i>
                                <p>
                                    Qu???n l?? c???p b???c
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('page-position') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ch???c v???</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-degree') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>H???c v???</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-title') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ch???c danh</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--QU???N L?? C???P B???C--}}
                        <div class="dropdown-divider mb-3"></div>


                        {{--QU???N L?? ????N V???--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-building-o"></i>
                                <p>
                                    Qu???n l?? ????n v???
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('page-department') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Khoa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-part-subject') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>B??? m??n</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-major') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chuy??n Ng??nh</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--QU???N L?? ????N V???--}}
                        <div class="dropdown-divider mb-3"></div>

                        {{--QU???N L?? CT ????O T???O--}}
                        <li class="nav-item has-treeview">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Ch????ng Tr??nh ??T
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('page-program-train') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ch????ng tr??nh ??T</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--QU???N L?? CT ????O T???O--}}
                        <div class="dropdown-divider mb-3"></div>

                        {{--QU???N L?? GI???NG VI??N--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Qu???n l?? ng?????i d??ng
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('page-role') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quy???n truy c???p</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-list-admin') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Qu???n tr???</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-list-teacher') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gi???ng vi??n</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-role-user-access') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ng?????i d??ng truy c???p</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--QU???N L?? GI???NG VI??N--}}
                        <div class="dropdown-divider mb-3"></div>

                        {{--QU???N L?? SINH VI??N--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Qu???n l?? sinh vi??n
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('page-course') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kh??a h???c</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-class-major') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>L???p chuy??n ng??nh</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-list-student') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch sinh vi??n</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--QU???N L?? SINH VI??N--}}
                        <div class="dropdown-divider mb-3"></div>


                        {{--QU???N L?? H???C PH???N--}}
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Qu???n l?? h???c ph???n
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('page-semester-year') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>H???c k??? - N??m h???c</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-category-subject') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lo???i h???c ph???n</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-subject') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>H???c ph???n</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('page-class-subject') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>L???p h???c ph???n</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{--QU???N L?? H???C PH???N--}}
                        <div class="dropdown-divider mb-0"></div>


                    @elseif (Auth::check() && Auth::user()->role_id == 2)

                        {{--QU???N L?? H???C PH???N--}}
                        <li class="nav-item has-treeview">
                            <a href="{{ url('page-class-subject') }}" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>L???p h???c ph???n</p>
                            </a>
                        </li>
                        {{--QU???N L?? H???C PH???N--}}

                    @else

                        {{--QU???N L?? H???C PH???N--}}
                        <li class="nav-item has-treeview">
                            <a href="{{ url('view-infor-student/'.$students->id) }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>K???t qu??? h???c t???p</p>
                            </a>
                        </li>
                        {{--QU???N L?? H???C PH???N--}}

                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('breadcrumb')
        <!-- /.content-header -->

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
        Copyright &copy;
        <script>
            var dt = new Date();
            document.write(dt.getFullYear());
        </script>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>


<!-- ChartJS -->
<script src="{{ url('public/plugins/chart.js/Chart.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ url('public/plugins/sparklines/sparkline.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ url('public/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ url('public/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ url('public/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('public/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- JQVMap -->
<script src="{{ url('public/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('public/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('public/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('public/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('public/dist/js/demo.js') }}"></script>

</body>
</html>
