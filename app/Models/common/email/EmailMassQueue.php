<?php namespace App\Models\common\email;

use Illuminate\Database\Eloquent\Model;

class EmailMassQueue extends Model
{
    protected $fillable = [ "subject","body","language","last_users_id","status","email_group_id","created_at","updated_at"    ];
    protected $table='email_mass_queue';

    public $timestamps =true ;

    protected $guarded = [];

}
