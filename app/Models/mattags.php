<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mattags extends Model
{
    use HasFactory;
    protected $fillable = ['material_id','tag',];
    public function material()
    {
        return $this->belongsToMany(Material::class, 'tag_id');
    }
}
