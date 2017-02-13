<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
       "email","password","permissions","first_name","last_name","avatar"    ];
    protected $table='users';

    public $timestamps =false ;

    protected $guarded = [];

}
