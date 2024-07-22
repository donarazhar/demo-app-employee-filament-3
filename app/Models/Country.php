<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    Public function employee(): HasMany 
    {
        return $this->hasMany(Employee::class);
    }
}
