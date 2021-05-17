<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\quadre;

class shop extends Model
{
    public $timestamps = false; 
    
    use HasFactory;
   
    protected $primaryKey = 'id';
    protected $guarded = [''];

    public function quadre(){
        return $this->HasOne(quadre::class);
    } 

    public function quadres (){
        return $this->hasMany(quadre::class);
    }

}
