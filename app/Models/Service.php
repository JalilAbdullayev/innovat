<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceTranslate;

class Service extends Model {
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
    ];

    public function translate() {
        return $this->hasMany(ServiceTranslate::class, 'service_id', 'id');
    }
}
