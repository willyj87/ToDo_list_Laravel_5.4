<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/06/17
 * Time: 22:01
 */
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Off Canvas Template for Bootstrap</title>

        <link href="/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/offcanvas.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-xs-12 col-sm-9">
                    <div class="jumbotron">
                        <h1>Hello, world!</h1>
                        @if(auth()->check())
                            <p><a class="btn btn-default" href="/createTask" role="button">Creer une nouvelle liste</a></p>
                        @endif

                    </div>
                    <div class="row">
                            @yield('content')
                    </div>
                </div>
                @include('layouts.sidebar')
            </div><!--/row-->
            @include('layouts.footer')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="/js/offcanvas.js"></script>
    </body>
</html>