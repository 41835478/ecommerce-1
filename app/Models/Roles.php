<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [ "slug","name","permissions","created_at","updated_at"    ];
    protected $table='roles';

    public $timestamps =true ;

    protected $guarded = [];

}
