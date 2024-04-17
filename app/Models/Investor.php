<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Investor extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' ,
    ];

    protected $hidden = [
        'password',
        ];

=======
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
>>>>>>> 763bcfb8427eb1c1fa14f13411e2015cef484b59
}
