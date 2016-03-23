<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description"  content=""/>
        <meta name="keywords" content=""/>
        <meta name="robots" content="ALL,FOLLOW"/>
        <meta name="Author" content="AIT"/>
        <meta http-equiv="imagetoolbar" content="no"/>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/screen.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/jquery.wysiwyg.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/jquery.ui.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/visualize.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/visualize-light.css') }}" type="text/css"/>

        <!--[if IE 7]>
        	<link rel="stylesheet" type="text/css" href="{{ asset('css/ie7.css')}}" />
        <![endif]-->

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.visualize.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.wysiwyg.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tiny_mce/jquery.tinymce.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.idtabs.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.datatables.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.jeditable.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.ui.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/excanvas.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/cufon.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/Geometr231_Hv_BT_400.font.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </head>

    <body>
        <div class="clear">
            <div class="sidebar"> <!-- *** sidebar layout *** -->
                <div class="logo clear">
                    <a href="index-2.html" title="View dashboard">
                        <img src="{{ asset('images/nutrient_logo.gif') }}" alt="" class="picture" />
                        <span class="title">Admin Nutrient</span>
                        <span class="text">template</span>
                    </a>
                </div>

                <div class="menu">
                    <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Articles</a>
                        <ul>
                            <li><a href="#">Write a new Article</a></li>
                            <li><a href="{{ url('/thucpham') }}">Quản Lý Thực Phẩm</a></li>
                            <li><a href="#">Quản Lý Món Ăn</a></li>
                            <li><a href="#">Quản Lý Thực Đơn</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="#">View All Pages</a></li>
                            <li><a href="#">Create New Page</a></li>
                            <li><a href="#">Import Pages</a></li>
                            <li><a href="#">Export Pages</a></li>
                            <li><a href="#">Create Backup</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Image Gallery</a></li>
                    <li><a href="#">Events Calendar</a></li>
                    <li><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>

            <div class="main">
                <div class="main-wrap">
                    <div class="header clear">
                        <ul class="links clear">
                        <li><strong>Welcome Admin :</strong></li>
                        <li><a href="#"><img src="{{ asset('images/ico_enelope_24.png' )}}" alt="" class="icon" /> <span class="text">5 messages</span></a></li>
                        <li><a href="#"><img src="{{ asset('images/ico_view_24.png') }}" alt="" class="icon" /> <span class="text">View site</span></a></li>
                        <li><a href="login.html"><img src="{{ asset('images/ico_logout_24.png') }}" alt="" class="icon" /> <span class="text">Logout</span></a></li>
                        </ul>
                    </div>

                    <div class="page clear">
                        @yield('content')
                    </div>

                    <div class="footer clear">
                        <span class="copy"><strong>© 2016 Copyright by <a href=http://www.ait.sk"/>AIT.</a></strong></span> Powered by <a href="http://www.ait.sk/">UniAdmin.</a>
                    </div>
                </div>

            </div>
        </div>


    </body>
</html>