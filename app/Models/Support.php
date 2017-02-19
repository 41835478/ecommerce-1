<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
       "id","name","type","description"    ];
    protected $table='support';

    public $timestamps =false ;

    protected $guarded = [];

}
