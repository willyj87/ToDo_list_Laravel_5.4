<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 17:55
 */
?>
@extends('layouts.master')
@section('content')
    <form method="post" action="/createTask">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Nouvelle liste</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Titre">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @include('layouts.errors')
    </form>
@endsection
