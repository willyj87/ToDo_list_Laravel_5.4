<?php

namespace App;


class Tasks extends Model
{
    
    //
    public function item()
    {
        return $this->hasMany(Items::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function counts()
    {
        static $tab;
        $tab ['encours'] = Tasks::all()->where('statut',0)->count();
        $tab ['termine'] = Tasks::all()->where('statut',1)->count();
        $tab ['sup'] = Tasks::all()->where('statut',2)->count();
        
        return $tab;
    }
}
