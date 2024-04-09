<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tps extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = [
        'tps_name',
        'tps_address',
        'village_id',
        'tps_dpt',
        'user_id',
    ];
    public function users()
    {
        return $this->belongsTo(Team::class, 'user_id');
    }
    public function villages()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
    public function districts()
    {
        return $this->belongsToThrough(District::class, [Village::class,]);
    }
    public function regions()
    {
        return $this->belongsToThrough(Region::class, [Village::class, District::class]);
    }
}