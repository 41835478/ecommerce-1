<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $fillable = [
       "id","name","link","version","parent","type"   ];
    protected $table='files';

    public $timestamps =false ;

    protected $guarded = [];


    public function parentFile(){
        return $this->belongsTo('App\Models\Files','parent');
    }

    public function products(){
        return $this->belongsTo('App\Models\Products','module_id');
    }


    public function domains(){
        return $this->belongsTo('App\Models\Domains','module_id');
    }
    public function webHostingPlans(){
        return $this->belongsTo('App\Models\WebHostingPlans','module_id');
    }
    public function server_detail(){
        return $this->belongsTo('App\Models\ServerDetail','module_id');
    }
    public function support(){
        return $this->belongsTo('App\Models\Support','module_id');
    }
}
