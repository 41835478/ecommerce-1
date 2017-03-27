<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsHtmlLanguage extends Model
{
    protected $fillable = [
       "id","cms_html_id","cms_language_id","name","body","created_at","updated_at"    ];
    protected $table='cms_html_language';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_html(){
    return $this->belongsTo('App\Models\CmsHtml');
    }



}
