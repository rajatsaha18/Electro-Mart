<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/modern_admin_panel/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 05:33:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Summernote css -->
    <link href="{{ asset('/') }}admin/assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}admin/assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}admin/assets/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="{{ asset('/') }}admin/assets/css/lines.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('/') }}admin/assets/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('/') }}admin/assets/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="{{ asset('/') }}admin/assets/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/') }}admin/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="{{ asset('/') }}admin/assets/js/d3.v3.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/rickshaw.js"></script>
</head>

<body>
    <script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-98H8KRKT85');
    </script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="../../../assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }


            #w3lDemoBar.w3l-demo-bar {
                top: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                padding: 40px 5px;
                padding-top: 70px;
                margin-bottom: 70px;
                background: #0D1326;
                border-top-left-radius: 9px;
                border-bottom-left-radius: 9px;
            }

            #w3lDemoBar.w3l-demo-bar a {
                display: block;
                color: #e6ebff;
                text-decoration: none;
                line-height: 24px;
                opacity: .6;
                margin-bottom: 20px;
                text-align: center;
            }

            #w3lDemoBar.w3l-demo-bar span.w3l-icon {
                display: block;
            }

            #w3lDemoBar.w3l-demo-bar a:hover {
                opacity: 1;
            }

            #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
                color: #e6ebff;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 30px;
                border-top: 1px solid #41414d;
                padding-top: 40px;
            }

            #w3lDemoBar.w3l-demo-bar .demo-btns {
                border-top: 1px solid #41414d;
                padding-top: 30px;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
                font-size: 26px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
            }

            .toggle-right-sidebar span {
                background: #0D1326;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                color: #e6ebff;
                border-radius: 50px;
                font-size: 26px;
                cursor: pointer;
                opacity: .5;
            }

            .pull-right {
                float: right;
                position: fixed;
                right: 0px;
                top: 70px;
                width: 90px;
                z-index: 99999;
                text-align: center;
            }

            /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

            #right-sidebar {
                width: 90px;
                position: fixed;
                height: 100%;
                z-index: 1000;
                right: 0px;
                top: 0;
                margin-top: 60px;
                -webkit-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
                -o-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                overflow-y: auto;
            }


            /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

            .hide-right-bar-notifications {
                margin-right: -300px !important;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }



            @media (max-width: 992px) {
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;

                }
            }

            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;

                }
            }

            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }

                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }

                #right-sidebar,
                .pull-right {
                    width: 90px;
                }

                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }
        </style>

        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
        </div>
        <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
            style="overflow: hidden; outline: none;">
        </div>
        </div>
        </div>
        </div>

        <div id="wrapper">
            <!-- Navigation -->
            <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Modern</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="fa fa-comments-o"></i><span class="badge">4</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header">
                                <strong>Messages</strong>
                                <div class="progress thin">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="{{ asset('/') }}admin/assets/images/1.png" alt="" />
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                    <span class="label label-info">NEW</span>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="{{ asset('/') }}admin/assets/images/2.png" alt="" />
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                    <span class="label label-info">NEW</span>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="{{ asset('/') }}admin/assets/images/3.png" alt="" />
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="{{ asset('/') }}admin/assets/images/4.png" alt="" />
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="{{ asset('/') }}admin/assets/images/5.png" alt="" />
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="avatar">
                                <a href="#">
                                    <img src="{{ asset('/') }}admin/assets/images/pic1.png" alt="" />
                                    <div>New message</div>
                                    <small>1 minute ago</small>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer text-center">
                                <a href="#">View all messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img
                                src="images/1.png"><span class="badge">9</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header text-center">
                                <strong>Account</strong>
                            </li>
                            <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span
                                        class="label label-info">42</span></a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span
                                        class="label label-success">42</span></a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span
                                        class="label label-danger">42</span></a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> Comments <span
                                        class="label label-warning">42</span></a></li>
                            <li class="dropdown-menu-header text-center">
                                <strong>Settings</strong>
                            </li>
                            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span
                                        class="label label-default">42</span></a></li>
                            <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span
                                        class="label label-primary">42</span></a></li>
                            <li class="divider"></li>
                            <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                            <li class="m_2">
                                <a href="#"
                                    onclick=" event.preventDefault(); document.getElementById('logoutForm').submit();"><i
                                        class="fa fa-lock"></i> Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" value="Search..." onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Search...';}">
                </form>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="{{ route('dashboard') }}"><i
                                        class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-laptop nav_icon"></i>Category Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('category-add') }}">Add Category</a>
                                        <a href="{{ route('category-manage') }}">Manage Category</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-indent nav_icon"></i>Sub Category Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('sub-category.index') }}">Add Sub Category</a>
                                        <a href="{{ route('sub-category.manage') }}">Manage Sub Category</a>
                                    </li>

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope nav_icon"></i>Brand Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('brand.index') }}">Add Brand</a>
                                        <a href="{{ route('brand.manage') }}">Manage Brand</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Unit Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('unit.index') }}">Add Unit</a>
                                        <a href="{{ route('unit.manage') }}">Manage Unit</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table nav_icon"></i>Product Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('product.index') }}">Add Product</a>
                                        <a href="{{ route('product.manage') }}">Manage Product</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Order Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="media.html">Manage Order</a>
                                    </li>

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>User Module<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="media.html">Add User</a>
                                        <a href="media.html">Manage User</a>
                                    </li>

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <!---728x90--->

                <div class="graphs">
                    @yield('body')

                    <!---728x90--->
                    <div class="copy">
                        <p>Copyright &copy; 2022 Modern. All Rights Reserved | Design by <a
                                href="http://w3layouts.com/" target="_blank">ElectroMart</a> </p>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('/') }}admin/assets/js/bootstrap.min.js"></script>
        <!-- Summernote js -->
        <script src="{{ asset('/') }}admin/assets/libs/summernote/summernote-bs4.min.js"></script>

        <!-- init js -->
        <script src="{{ asset('/') }}admin/assets/js/pages/form-editor.init.js"></script>
        <script>
            function getSubCategory(categoryId) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('product.get-sub-category') }}",
                    data: {
                        id: categoryId
                    },
                    datatype: "JSON",
                    success: function(response) {
                        // console.log(response);
                        var option = '';
                        option += '<option value="" disabled selected>-- Select SubCategory --</option>';
                        $.each(response, function(key, value) {
                            option += '<option value="' + value.id + '">' + value.name + '</option>';
                        });
                        var subCategoryId = $('#subCategoryId');
                        subCategoryId.empty();
                        subCategoryId.append(option);
                    }
                });
            }
        </script>

    </body>

    <!-- Mirrored from p.w3layouts.com/demos/modern_admin_panel/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 05:33:01 GMT -->

</html>
