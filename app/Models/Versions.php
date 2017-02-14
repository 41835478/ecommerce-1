<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    protected $fillable = [
      "products_id","version","manual","articale","links","release_notes" ,"publish_date"    ];
    protected $table='versions';

    public $timestamps =false ;

    protected $guarded = [];

    public function products(){
        return $this->belongsTo('App\Models\Products');
    }
}
