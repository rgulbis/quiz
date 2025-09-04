<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HighScores extends Model
{
    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
