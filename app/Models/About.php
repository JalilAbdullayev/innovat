<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model {
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image'
    ];

    public function translate() {
        return $this->hasMany(AboutTranslate::class, 'about_id', 'id');
    }
}
