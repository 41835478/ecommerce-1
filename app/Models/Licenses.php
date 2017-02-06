<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licenses extends Model
{
    protected $fillable = [
       "id","company_id","license","type","status"    ];
    protected $table='licenses';

    public $timestamps =false ;

    protected $guarded = [];


    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

}
