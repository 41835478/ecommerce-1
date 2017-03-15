<?php namespace App\Models\common\email;

use Illuminate\Database\Eloquent\Model;

class EmailMassTemplate extends Model
{
    protected $fillable = [ "email_group_id","name","subject","body","language","created_at","updated_at"    ];
    protected $table='email_mass_template';

    public $timestamps =false ;

    protected $guarded = [];

}
