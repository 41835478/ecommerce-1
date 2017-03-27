<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsWishlist extends Model
{
    protected $fillable = [
       "id","users_id","cms_product_id","created_at","updated_at"    ];
    protected $table='cms_wishlist';

    public $timestamps =true ;

    protected $guarded = [];

    public function users(){
    return $this->belongsTo('App\Models\Users');
    }

    public function cms_product(){
    return $this->belongsTo('App\Models\CmsProduct');
    }








}
