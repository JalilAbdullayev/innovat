<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model {
    protected $table = 'contact';
    protected $primaryKey = 'id';

    protected $fillable = [
        'phone',
        'email',
        'map',
        'facebook',
        'instagram',
        'linkedin'
    ];

    public function translate(): HasMany {
        return $this->hasMany(ContactTranslate::class, 'contact_id', 'id');
    }

    public function translated(): HasMany {
        return $this->translate()->where('lang', session('locale'));
    }
}
