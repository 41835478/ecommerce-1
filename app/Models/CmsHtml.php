<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsHtml extends Model
{
    protected $fillable = [
       "id","name","body","created_at","updated_at"    ];
    protected $table='cms_html';

    public $timestamps =true ;

    protected $guarded = [];




public function cms_html_language(){
return $this->hasMany('App\Models\CmsHtmlLanguage');
}






}
