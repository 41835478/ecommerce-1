<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $fillable = [
       "id","company_id","products_id","description"    ];
    protected $table='contracts';

    public $timestamps =false ;

    protected $guarded = [];


    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function products(){
        return $this->belongsTo('App\Models\Products');
    }
}
