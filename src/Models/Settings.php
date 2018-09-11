<?php

namespace Daikazu\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';

    protected $guarded = ['id'];

    public $timestamps = false;


    public function settingable()
    {
        return $this->morphTo();
    }










}
