<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsMenuItem extends Model
{
    protected $fillable = [
        "parent_item_id","cms_menu_id","name","alias","disable","hide","module_type","module_id","order"    ];
    protected $table='cms_menu_item';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_menu(){
    return $this->belongsTo('App\Models\CmsMenu');
    }


    public function parent_item(){
        return $this->belongsTo('App\Models\CmsMenuItem');
    }




    public function cms_menu_item_language(){
return $this->hasMany('App\Models\CmsMenuItemLanguage');
}



    public function cms_page(){
        return $this->belongsTo('App\Models\CmsPage','module_id');
    }
    public function cms_article(){
        return $this->belongsTo('App\Models\CmsArticle','module_id');
    }
    public function cms_form(){
        return $this->belongsTo('App\Models\CmsForm','module_id');
    }
    public function cms_category(){
        return $this->belongsTo('App\Models\CmsCategory','module_id');
    }
    public function cms_product(){
        return $this->belongsTo('App\Models\CmsProduct','module_id');
    }





}
