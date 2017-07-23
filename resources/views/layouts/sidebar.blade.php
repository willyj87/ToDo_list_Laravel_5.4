<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/06/17
 * Time: 22:01
 */
?>
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Status</a>
        <a href="#" class="list-group-item">En cours<span class="badge">{{$counts['encours']}}</span></a>
        <a href="#" class="list-group-item">Terminés<span class="badge">{{$counts['termine']}}</span></a>
        <a href="#" class="list-group-item">Supprimés<span class="badge">{{$counts['sup']}}</span></a>
    </div>
</div><!--/.sidebar-offcanvas-->
