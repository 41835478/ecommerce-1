<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ["contact_id","contract_id","name","type","status","description","create_time","open_time","close_time"    ];
    protected $table='ticket';

    public $timestamps =false ;

    protected $guarded = [];

    public function contact(){
        return $this->belongsTo('\App\Models\Contacts','contact_id');
    }

}
