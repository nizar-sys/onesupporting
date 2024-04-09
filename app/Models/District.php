<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $fillable = [
        'region_id',
        'district_name',
        'user_id',
    ];
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function villages()
    {
        return $this->hasMany(Village::class);
    }
    public function tps()
    {
        return $this->hasManyThrough(Tps::class, Village::class);
    }
    public function voters()
    {
        return $this->hasManyDeep(Voter::class, [Village::class, Tps::class]);
    }
}