<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/06/17
 * Time: 22:02
 */
?>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            @if(!auth()->check())
                <div class="navbar-right" style="padding-top: 10px">
                    <a href="/login">Login</a>&nbsp;<a href="/register"> Register</a>
                </div>
                @else
                <div class="navbar-right" style="padding-top: 10px">
                    <a href="/logout">Logout</a>
                </div>
            @endif
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
