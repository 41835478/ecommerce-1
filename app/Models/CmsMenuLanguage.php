<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsMenuLanguage extends Model
{
    protected $fillable = [
       "id","cms_menu_id","cms_language_id","name","created_at","updated_at"    ];
    protected $table='cms_menu_language';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_menu(){
    return $this->belongsTo('App\Models\CmsMenu');
    }

}
