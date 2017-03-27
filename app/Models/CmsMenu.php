<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsMenu extends Model
{
    protected $fillable = [
       "id","name","type","created_at","updated_at"    ];
    protected $table='cms_menu';

    public $timestamps =true ;

    protected $guarded = [];




public function cms_menu_language(){
return $this->hasMany('App\Models\CmsMenuLanguage');
}


public function cms_menu_item(){
return $this->hasMany('App\Models\CmsMenuItem');
}






}
