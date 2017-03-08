<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    protected $fillable = [
      "products_id","version","manual","article","links","release_notes" ,"publish_date"    ];
    protected $table='versions';

    public $timestamps =false ;

    protected $guarded = [];

    public function products(){
        return $this->belongsTo('App\Models\Products');
    }


    public function article(){
        return $this->belongsTo('App\Models\Documents','article');
    }

    public function manual(){
        return $this->belongsTo('App\Models\Documents','manual');
    }

    public function release_notes(){
        return $this->belongsTo('App\Models\Documents','release_notes');
    }


    public function files(){
        return $this->belongsTo('App\Models\Files','links');
    }

}
