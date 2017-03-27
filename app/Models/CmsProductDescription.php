<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsProductDescription extends Model
{
    protected $fillable = [
       "id","cms_product_id","cms_language_id","name","description","tag","meta_title","meta_description","meta_keyword","created_at","updated_at"    ];
    protected $table='cms_product_description';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_product(){
    return $this->belongsTo('App\Models\CmsProduct');
    }

    public function cms_language(){
    return $this->belongsTo('App\Models\CmsLanguage');
    }








}
