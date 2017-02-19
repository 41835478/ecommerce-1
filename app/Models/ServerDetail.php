<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerDetail extends Model
{
    protected $fillable = [
       "id","server_spec_id","name","server_company_spec_id","cost","unique_name","operating_system","control_panel","additional_cost"    ];
    protected $table='server_detail';

    public $timestamps =false ;

    protected $guarded = [];

}
