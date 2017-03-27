<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsArticleLanguage extends Model
{
    protected $fillable = [
       "id","cms_article_id","cms_language_id","name","body","created_at","updated_at"    ];
    protected $table='cms_article_language';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_article(){
    return $this->belongsTo('App\Models\CmsArticle');
    }









}
