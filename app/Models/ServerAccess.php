<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerAccess extends Model
{
    protected $fillable = [
       "id","server_ip_id","type","user_name","password"    ];
    protected $table='server_access';

    public $timestamps =false ;

    protected $guarded = [];

}
