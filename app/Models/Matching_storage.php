<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching_storage extends Model
{
    use HasFactory;
    public $fillable=
    [
    'name', 'size', 'price','image',
    ];
    public function product()
    {
        return $this->hasMany(Product::class,'matching_storage_id','id');
        
    }

}
