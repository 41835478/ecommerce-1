<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsContent extends Model
{
    protected $fillable = [
       "id","name","body","created_at","updated_at"    ];
    protected $table='cms_content';

    public $timestamps =true ;

    protected $guarded = [];








}
