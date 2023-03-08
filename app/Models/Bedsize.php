<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedsize extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name','price',
        ];
        public function product()
        {
            return $this->hasMany(Product::class,'bedsize_id','id');
            
        }
   
}
