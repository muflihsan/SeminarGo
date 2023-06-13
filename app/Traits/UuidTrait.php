<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait{
    protected static function boot(){
        parent::boot();
        static::creating(function ($model){
           $model->increment = false;
           $model->keyType = 'string';
           $model->{$model->getKeyName()} = Str::ordereUUid()->toString();
        });
    }

    public function getIncrementing(){
        return false;
    }

    public function getKeyType(){
        return 'string';
    }
}
