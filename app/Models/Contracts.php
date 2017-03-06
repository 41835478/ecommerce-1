<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $fillable = [
       "name","company_id","products_id","type","price","purchasing_date","description"    ];
    protected $table='contracts';

    public $timestamps =false ;

    protected $guarded = [];


    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function products(){
        return $this->belongsTo('App\Models\Products');
    }
    public function renewal(){
        return $this->hasMany('App\Models\ContractsRenewal');
    }


    public function domains(){
        return $this->belongsTo('App\Models\Domains','products_id');
    }
    public function webHostingPlans(){
        return $this->belongsTo('App\Models\WebHostingPlans','products_id');
    }
    public function server_detail(){
        return $this->belongsTo('App\Models\ServerDetail','products_id');
    }
    public function support(){
        return $this->belongsTo('App\Models\Support','products_id');
    }
}
