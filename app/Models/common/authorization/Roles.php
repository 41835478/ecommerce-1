<?php namespace App\Models\common\authorization;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [ "slug","name","permissions","deny_permissions","created_at","updated_at"    ];
    protected $table='roles';

    public $timestamps =true ;

    protected $guarded = [];

}
