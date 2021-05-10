<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\shop;

class quadre extends Model
{
  
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $guarded = [''];

    public function shop(){
        return $this->belongsTo(shop::class);
    } 
}
