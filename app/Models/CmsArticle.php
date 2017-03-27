<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsArticle extends Model
{
    protected $fillable = [
       "id","name","body","cms_page_id","created_at","updated_at"    ];
    protected $table='cms_article';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_page(){
    return $this->belongsTo('App\Models\CmsPage');
    }




public function cms_article_language(){
return $this->hasMany('App\Models\CmsArticleLanguage');
}






}
