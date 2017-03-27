<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsCategory extends Model
{
    protected $fillable = [
       "id","name","description","parent_id","status","sort_order","column","place","image","created_at","updated_at"    ];
    protected $table='cms_category';

    public $timestamps =true ;

    protected $guarded = [];




    public function cms_category_description(){
        return $this->hasMany('App\Models\CmsCategoryDescription');
    }


    public function parent(){
        return $this->belongsTo('App\Models\CmsCategory');
    }


public function cms_product(){
return $this->hasMany('App\Models\CmsProduct');
}






}
