<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsPage extends Model
{
    protected $fillable = [
       "id","name","created_at","updated_at"    ];
    protected $table='cms_page';

    public $timestamps =true ;

    protected $guarded = [];




public function cms_article(){
return $this->hasMany('App\Models\CmsArticle');
}


public function cms_page_content(){
return $this->hasMany('App\Models\CmsPageContent');
}


public function cms_page_content_page(){
return $this->hasMany('App\Models\CmsPageContentPage');
}






}
