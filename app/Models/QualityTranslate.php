<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityTranslate extends Model {
    protected $table = 'qualities_translate';
    protected $primaryKey = 'id';
    protected $fillable = [
        'quality_id',
        'title',
        'slug',
        'description',
        'keywords',
        'text',
        'lang'
    ];
}
