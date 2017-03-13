<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
      "company_id","users_id","roles_id","name","email","phone","description","status"    ];
    protected $table='contacts';

    public $timestamps =false ;

    protected $guarded = [];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
    public function roles(){
        return $this->belongsTo('App\Models\Roles');
    }
}
