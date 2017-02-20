<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerCompany extends Model
{
    protected $fillable = [ "name" ];
    protected $table='server_company';

    public $timestamps =false ;

    protected $guarded = [];

}
