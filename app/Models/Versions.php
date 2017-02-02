<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    protected $fillable = [
       "id","products_id","version","manual","articale","links","release_notes"    ];
    protected $table='versions';

    public $timestamps =false ;

    protected $guarded = [];

}
