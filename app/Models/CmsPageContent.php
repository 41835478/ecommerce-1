<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsPageContent extends Model
{
    protected $fillable = [
       "id","module_id","type","cms_page_id","module_name","order","float","display","position","all_pages","created_at","updated_at"    ];
    protected $table='cms_page_content';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_page(){
    return $this->belongsTo('App\Models\CmsPage');
    }




public function cms_page_content_page(){
return $this->hasMany('App\Models\CmsPageContentPage');
}






}
