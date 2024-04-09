<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'name',
        'url',
        'icon',
        'permission_name',
        'prefix',
        'is_active',
    ];
    public function scopeRoot($query)
    {
        $query->whereNull('parent_id')->where('is_active', 1);
    }
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
