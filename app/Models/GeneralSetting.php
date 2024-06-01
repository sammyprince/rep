<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $table = "general_settings";
    protected $fillable = ['name', 'display_name', 'value', 'is_specific', 'type'];
    public static function getGeneralSetting(){
        if(\Illuminate\Support\Facades\Schema::hasTable("general_settings")){
            $settings = \App\Models\GeneralSetting::select('name', 'value')->pluck('value', 'name')->toArray();
            return $settings;
        }
        return [];
    }
}
