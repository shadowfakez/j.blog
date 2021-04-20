<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="menu_nav">
                <ul>
                    <li class="active"><a href="{{ route('home') }}"><span>Главная</span></a></li>
                    <li><a href="{{ route('categories.single', ['slug' => 'category_1']) }}"><span>Категория 1</span></a></li>
                    <li><a href="{{ route('categories.single', ['slug' => 'category_2']) }}"><span>Категория
                                2</span></a></li>
                    <li><a href="{{ route('categories.single', ['slug' => 'category_3']) }}"><span>Категория
                                3</span></a></li>
                    <li><a href="{{ route('categories.single', ['slug' => 'category_4']) }}"><span>Категория
                                4</span></a></li>
                </ul>
            </div>
            <div class="logo">
                <h1><a href="{{ route('home') }}">J.<span>blog</span></a></h1>
            </div>
            <div class="clr"></div>

            @yield('header')

            <div class="clr"></div>
        </div>
    </div>
    <div class="content">
        <div class="content_resize">

            @yield('content')

            @include('layouts.sidebar')

            <div class="clr"></div>
        </div>
    </div>
    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">
                <h2><span>Services</span> Overview</h2>
                <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
                <ul class="fbg_ul">
                    <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                    <li><a href="#">Excepteur officia deserunt.</a></li>
                    <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
                </ul>
            </div>
            <div class="col c2">
                <h2><span>Contact</span> Us</h2>
                <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
                <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                    <span>Telephone:</span> +123-1234-5678<br />
                    <span>FAX:</span> +458-4578<br />
                    <span>Others:</span> +301 - 0125 - 01258<br />
                    <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
            <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/front/js/front.js') }}"></script>

</body>
</html>
