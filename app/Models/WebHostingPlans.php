<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebHostingPlans extends Model
{
    protected $fillable = ['name','web_space','domains_number','emails','traffic'  ];
    protected $table='web_hosting_plans';

    public $timestamps =false ;

    protected $guarded = [];


}
