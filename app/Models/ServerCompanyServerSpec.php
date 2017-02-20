<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerCompanyServerSpec extends Model
{
    protected $fillable = [ "server_company_id","server_spec_id","cost","period"    ];
    protected $table='server_company_server_spec';

    public $timestamps =false ;

    protected $guarded = [];

    public function server_company(){
        return $this->belongsTo('\App\Models\ServerCompany');
    }

    public function server_spec(){
        return $this->belongsTo('\App\Models\ServerSpec');
    }

}
