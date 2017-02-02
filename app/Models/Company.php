<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
       "id","name","email","phone","website","address","country","city","zipcode","status"    ];
    protected $table='company';

    public $timestamps =false ;

    protected $guarded = [];

}
