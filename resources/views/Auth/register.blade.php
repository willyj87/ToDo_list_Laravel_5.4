<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 10:16
 */
?>
@extends('layouts.master')
@section('content')
<form method="post" action="/register">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="confirmation">Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirmation" placeholder="Confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @include('layouts.errors')
</form>
@endsection