<?php

namespace App\Models;

use App\Models\City;
use App\Models\Country;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }   

    Public function employee(): HasMany 
    {
        return $this->hasMany(Employee::class);
    }

     public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
