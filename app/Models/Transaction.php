<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    public function appusers() {
        return $this->belongsTo(AppUser::class);
    }

    public function coffees() {
        return $this->belongsTo(Coffee::class, 'coffee_id');
    }
}
