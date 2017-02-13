<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $fillable = [
       "company_id","products_id","purchasing_date","description"    ];
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
}
