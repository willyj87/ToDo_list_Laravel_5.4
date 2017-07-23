<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 08:54
 */
?>
@extends('layouts.master')
@section('content')
    @foreach($tasks as $task)
        <div class="col-xs-6 col-lg-4">
            <h2>{{$task->name}}</h2>
            @foreach($task->item as $item)
                <p> {{$item->name}}</p>
            @endforeach
            <p><a class="btn btn-default" href="/show/{{$task->id}}" role="button">View details &raquo;</a></p>
        </div>
    @endforeach
@endsection
