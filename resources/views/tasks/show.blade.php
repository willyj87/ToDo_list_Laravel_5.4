<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 12:28
 */
?>
@extends('layouts.master')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center"> {{$task->name }}</div>
        <table class="table">
            @foreach($task->item as $tas)
                <tr>
                    <td><a class="items"> {{$tas->name}}</a></td>
                    <td><input type="checkbox" class="check" name="id_item" value="{{$tas->id}}"></td>
                    <td><a href="#"> <span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <form method="POST" action="/show/{{$task->id}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Nouveau élement:</label>
            <input name="name" type="text" id="name" class="form-control" required>
            <input name="task_id" type="hidden" value="{{$task->id}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Ajouter</button>
        </div>
        @include('layouts.errors')
    </form>
@endsection
