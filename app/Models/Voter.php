<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;
    use HasFactory;
    protected $fillable = [
        'voter_name',
        'tps_id',
        'voter_image',
        'gender',
        'voter_potential',
        'user_id',
    ];


    public function regions()
    {
        return $this->belongsToThrough(Region::class, [District::class, Village::class, Tps::class]);
    }
    public function districts()
    {
        return $this->belongsToThrough(District::class, [Village::class, Tps::class]);
    }
    public function villages()
    {
        return $this->belongsToThrough(Village::class, [Tps::class]);
    }
    public function tps()
    {
        return $this->belongsTo(Tps::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
