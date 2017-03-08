<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
   "products_list_id","name","description" ,"article","manual","files_id"   ];
    protected $table='products';

    public $timestamps =false ;

    protected $guarded = [];

    public function productsList(){
        return $this->belongsTo('App\Models\ProductsList');
    }

    public function article(){
        return $this->belongsTo('App\Models\Documents','article');
    }

    public function manual(){
        return $this->belongsTo('App\Models\Documents','manual');
    }

    public function files(){
        return $this->belongsTo('App\Models\Files');
    }
    public function versions(){
        return $this->hasMany('App\Models\Versions');
    }

}
