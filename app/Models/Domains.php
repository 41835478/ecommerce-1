<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{
    protected $fillable = [ 'name', 'provider', 'cost'   ];
    protected $table='domains';

    public $timestamps =false ;

    protected $guarded = [];


}
