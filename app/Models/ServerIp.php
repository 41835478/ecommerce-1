<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerIp extends Model
{
    protected $fillable = [
       "id","server_detail_id","ip","default_getway","mask","name_server_1","name_server_2","type","display"    ];
    protected $table='server_ip';

    public $timestamps =false ;

    protected $guarded = [];

}
