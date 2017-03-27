<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsMenuItemLanguage extends Model
{
    protected $fillable = [
       "id","cms_menu_item_id","cms_language_id","name","created_at","updated_at"    ];
    protected $table='cms_menu_item_language';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_menu_item(){
    return $this->belongsTo('App\Models\CmsMenuItem');
    }





}
