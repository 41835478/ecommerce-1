<?php namespace App\Models\common\email;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $fillable = [ "email_group_id","name","subject","body","type","to_field","to_email","language","status","created_at","updated_at"    ];
    protected $table='email_template';

    public $timestamps =true ;

    protected $guarded = [];

}
