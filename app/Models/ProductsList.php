<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsList extends Model
{
    protected $fillable = [
      "name","type","description"    ];
    protected $table='products_list';

    public $timestamps =false ;

    protected $guarded = [];

}