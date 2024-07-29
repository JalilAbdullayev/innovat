<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {
    protected $table = 'settings';
    protected $fillable = [
        'logo',
        'favicon',
    ];

    public function translate() {
        return $this->hasMany(SettingsTranslate::class, 'settings_id', 'id');
    }
}
