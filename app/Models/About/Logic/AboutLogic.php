<?php
namespace App\Models\About\Logic;

class AboutLogic
{
    /**
     * @return array
     */
    public static function getData() : array
    {
        return config('custom.about-data');
    }
}