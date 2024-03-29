<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'provinces';

    protected $fillable = [ 
        'name',
        'gso_id',
    ];
    public function district()
    {
        return $this->hasMany(District::class);
    }
    public function scopeGetDistrict($value)
    {
        return $this->where('gso_id', $value)->with('district');
    }
}
