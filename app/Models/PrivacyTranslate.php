<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivacyTranslate extends Model {
    protected $table = 'privacy_translate';
    protected $fillable = ['privacy_id', 'lang', 'text'];
}
