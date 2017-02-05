<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
       "id","company_id","users_id","phone","description","status","permissions"    ];
    protected $table='contacts';

    public $timestamps =false ;

    protected $guarded = [];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}
