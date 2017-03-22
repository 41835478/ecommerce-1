<?php namespace App\Models\common\email;

use Illuminate\Database\Eloquent\Model;

class EmailMassTemplate extends Model
{
    protected $fillable = [ "email_group_id","name","subject","body","language","created_at","updated_at"    ];
    protected $table='email_mass_template';

    public $timestamps =true ;

    protected $guarded = [];

    public function email_group(){
        return $this->belongsTo('\App\Models\common\email\EmailGroup');
    }
}
