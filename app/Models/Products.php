<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
       "id","products_list_id","name","description"    ];
    protected $table='products';

    public $timestamps =false ;

    protected $guarded = [];

}
