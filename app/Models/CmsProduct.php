<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsProduct extends Model
{
    protected $fillable = [
       "id","cms_category_id","name","description","location","quantity","image","shipping","price","points","date_available","weight","length","width","height","subtract","minimum","sort_order","status","viewed","created_at","updated_at","model","sku","upc","ean","jan","isbn","mpn"    ];
    protected $table='cms_product';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_category(){
    return $this->belongsTo('App\Models\CmsCategory');
    }




public function cms_product_description(){
return $this->hasMany('App\Models\CmsProductDescription');
}


public function cms_cart(){
return $this->hasMany('App\Models\CmsCart');
}


public function cms_wishlist(){
return $this->hasMany('App\Models\CmsWishlist');
}


public function cms_compare_list(){
return $this->hasMany('App\Models\CmsCompareList');
}






}
