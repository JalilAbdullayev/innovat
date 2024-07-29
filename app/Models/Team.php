<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    protected $table = 'team';
    protected $fillable = ['image'];

    public function translate() {
        return $this->hasMany(TeamTranslate::class, 'member_id', 'id');
    }
}
