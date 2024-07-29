<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsTranslate extends Model {
    protected $table = 'settings_translate';
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'author',
        'lang',
    ];
}
