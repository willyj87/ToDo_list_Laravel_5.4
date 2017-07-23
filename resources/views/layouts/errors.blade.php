<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/06/17
 * Time: 17:17
 */
?>
@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $er)
                    <li style="text-decoration: none">{{$er}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
