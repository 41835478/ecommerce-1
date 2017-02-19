<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logtime extends Model
{
    protected $fillable = [
       "id","support_id","ticket_id","hours","summary","expenses","create_date"    ];
    protected $table='logtime';

    public $timestamps =false ;

    protected $guarded = [];

}
