<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model {
    protected $table = 'qualities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
    ];

    public function translate() {
        return $this->hasMany(QualityTranslate::class, 'quality_id', 'id');
    }
}
