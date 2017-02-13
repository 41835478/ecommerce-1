<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $fillable = [
      "contacts_id","email","module","status","optout"    ];
    protected $table='emails';

    public $timestamps =false ;

    protected $guarded = [];

}
