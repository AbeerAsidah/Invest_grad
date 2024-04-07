<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    
    protected $table = "projects";

    protected $fillable = ['first_name','last_name','email','password','phone','location','iD_card','personal_photo',];

    protected $primaryKey = "id";
    public $timestamps = true ;

    public function projects(){
        return $this->hasMany( Complaint::class,'investor_id');
    }

    public function complaints(){
        return $this->hasMany( Complaint::class,'investor_id');
    }
}
