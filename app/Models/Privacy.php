<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model {
    protected $table = 'privacy';

    public function translate() {
        return $this->hasMany(PrivacyTranslate::class, 'privacy_id', 'id');
    }
}
