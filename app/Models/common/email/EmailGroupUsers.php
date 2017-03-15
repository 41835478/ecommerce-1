<?php namespace App\Models\common\email;

use Illuminate\Database\Eloquent\Model;

class EmailGroupUsers extends Model
{
    protected $fillable = [ "group_id","users_id","type"    ];
    protected $table='email_group_users';

    public $timestamps =false ;

    protected $guarded = [];

}
