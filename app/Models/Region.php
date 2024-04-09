<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $fillable = [
        'region_name',
        'user_id',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function districts()
    {
        return $this->hasMany(District::class);
    }
    public function villages()
    {
        return $this->hasManyThrough(Village::class, District::class);
    }
    public function tps()
    {
        return $this->hasManyDeep(Tps::class, [District::class, Village::class]);
    }
    public function voters()
    {
        return $this->hasManyDeep(Voter::class, [District::class, Village::class, Tps::class]);
    }
}
