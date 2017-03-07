<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerDetail extends Model
{
    protected $fillable = ["server_spec_id","name" ,"company_id","location","cost","unique_name","operating_system","control_panel"    ];
    protected $table='server_detail';

    public $timestamps =false ;

    protected $guarded = [];

    public function server_spec(){
        return $this->belongsTo('\App\Models\ServerSpec');
    }


}
