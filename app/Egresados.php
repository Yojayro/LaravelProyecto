<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egresados extends Model
{
    //
    public $timestamps = false;
    protected $guarded = ["id"];

    public function scopeCodigo($query, $ecodigo){
        if($ecodigo){
            return $query->orWhere('ecodigo','like',"%$ecodigo%");
        }
    }
    public function scopePaterno($query, $eapellidopaterno){
        if($eapellidopaterno){
            return $query->orWhere('eapellidopaterno','like',"%$eapellidopaterno%");
        }
    }
    public function scopeNombre($query, $enombre){
        if($enombre){
            return $query->orWhere('enombre','like',"%$enombre%");
        }
    }
}
