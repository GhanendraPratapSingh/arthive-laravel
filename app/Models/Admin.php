<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model implements Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'admin';
    // protected $primaryKey ='admin_id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        // 'admin_last_login'
    ];


    protected $hidden = [
        'password'
    ];

     // Implement methods required by the Authenticatable interface

     public function getAuthIdentifierName()
     {
         return 'id';
     }
 
     public function getAuthIdentifier()
     {
         return $this->getKey();
     }
 
     public function getAuthPassword()
     {
         return $this->password;
     }
 
     public function getRememberToken()
     {
         return null; // Not implemented for this model
     }
 
     public function setRememberToken($value)
     {
         // Not implemented for this model
     }
 
     public function getRememberTokenName()
     {
         return null; // Not implemented for this model
     }
}
