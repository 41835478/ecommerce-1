<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServerSpec extends Model
{
    protected $fillable = ["name","hard_disk","cpu","port","ram","raid"    ];
    protected $table='server_spec';

    public $timestamps =false ;

    protected $guarded = [];

    public function server_company(){
        return $this->hasMany('\App\Models\ServerCompanyServerSpec','server_spec_id');
    }
}
