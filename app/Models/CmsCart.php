<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsCart extends Model
{
    protected $fillable = [
       "id","users_id","cms_product_id","option","quantity","created_at","updated_at"    ];
    protected $table='cms_cart';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function cms_product(){
    return $this->belongsTo('App\Models\CmsProduct');
    }








}
