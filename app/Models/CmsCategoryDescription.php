<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsCategoryDescription extends Model
{
    protected $fillable = [
       "id","cms_category_id","cms_language_id","name","description","meta_title","meta_description","meta_keyword","created_at","updated_at"    ];
    protected $table='cms_category_description';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_category(){
    return $this->belongsTo('App\Models\CmsCategory');
    }








}
