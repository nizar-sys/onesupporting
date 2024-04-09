<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $fillable = [
        'village_name',
        'village_type',
        'district_id',
        'user_id',
    ];
    public function regions()
    {
        return $this->belongsToThrough(Region::class, District::class);
    }
    public function districts()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function tps()
    {
        return $this->hasMany(Tps::class);
    }
    public function voters()
    {
        return $this->hasManyDeep(Voter::class, [Tps::class, Village::class]);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
