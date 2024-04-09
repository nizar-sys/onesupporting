<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class One extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = [
        'user_id',
        'region_id',
        'district_id',
        'village_id',
        'tps_id',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tps()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
    public function villages()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
    public function districts()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function regions()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
