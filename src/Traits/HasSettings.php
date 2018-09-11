<?php
namespace Daikazu\LaravelSettings\Traits;

use Daikazu\LaravelSettings\Models\Setting;

trait HasSettings
{


    public function settings()
    {
    return $this->morphMany(Setting::class, 'settingable');

    }




}
