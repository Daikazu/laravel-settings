<?php

namespace Daikazu\LaravelSettings;

use Daikazu\LaravelSettings\Models\Setting;


class LaravelSettings
{



    public function getSetting($key, $default = null)
    {

        return $default;

    }


    static public function store($group, $key, $value)
    {

        $key = implode('.', [str_slug($group), $key]);

        $keyCheck = Setting::where('key', $key)->get()->count();

        if ($keyCheck > 0) {
            return false; // TODO: Create Exception Error

        }

        $lastSetting = Setting::orderBy('order', 'DESC')->first();

        if (is_null($lastSetting)) {
            $order = 0;
        } else {
            $order = intval($lastSetting->order) + 1;
        }


        $setting = Setting::create([
            'order' => $order,
            'key'   => $key,
            'value' => $value,
        ]);


        return $setting;


    }


}
