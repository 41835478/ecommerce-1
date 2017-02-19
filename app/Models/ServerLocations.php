<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerLocations extends Model
{
    protected $fillable = [
       "id","server_company_id","location_id"    ];
    protected $table='server_locations';

    public $timestamps =false ;

    protected $guarded = [];

}
