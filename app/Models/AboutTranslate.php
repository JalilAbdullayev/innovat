<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTranslate extends Model {
    protected $table = 'about_translate';
    protected $fillable = [
        'about_id',
        'title',
        'text',
        'lang',
    ];
}
