<?php namespace App\Models\common\authorization;

use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model
{
    protected $fillable = [ "user_id","role_id","created_at","updated_at"    ];
    protected $table='role_users';

    public $timestamps =true ;

    protected $guarded = [];

}