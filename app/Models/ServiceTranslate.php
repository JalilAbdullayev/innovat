<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceTranslate extends Model {
    protected $table = 'services_translate';
    protected $primaryKey = 'id';
    protected $fillable = [
        'service_id',
        'title',
        'slug',
        'description',
        'keywords',
        'text',
        'lang'
    ];
}
