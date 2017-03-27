<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsForm extends Model
{
    protected $fillable = [
       "id","page_id","name","alias","created_at","updated_at"    ];
    protected $table='cms_form';

    public $timestamps =true ;

    protected $guarded = [];

    public function page(){
    return $this->belongsTo('App\Models\Page');
    }




public function cms_form_field(){
return $this->hasMany('App\Models\CmsFormField');
}






}
