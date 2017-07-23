<?php

namespace App;


class Items extends Model
{
    //
    public function tasks()
    {
        return $this->belongsTo(Tasks::class);
    }
}
