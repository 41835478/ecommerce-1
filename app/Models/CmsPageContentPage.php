<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsPageContentPage extends Model
{
    protected $fillable = [
       "id","cms_page_id","cms_page_content_id"    ];
    protected $table='cms_page_content_page';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_page(){
    return $this->belongsTo('App\Models\CmsPage');
    }

    public function cms_page_content(){
    return $this->belongsTo('App\Models\CmsPageContent');
    }








}
