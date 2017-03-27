<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsFormField extends Model
{
    protected $fillable = [
       "id","cms_form_id","name","type","created_at","updated_at"    ];
    protected $table='cms_form_field';

    public $timestamps =true ;

    protected $guarded = [];

    public function cms_form(){
    return $this->belongsTo('App\Models\CmsForm');
    }








}
