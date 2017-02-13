<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    protected $fillable = [

        "name",
        "deleted",
        "description" ,
        "created_at" ,
        "modified_at",
        "created_by_id",
        "modified_by_id",
        "assigned_user_id" ,
        "product_id",
        "type" ,
        "version_id",
        "version"
    ];
    protected $table='products_list';

    public $timestamps =false ;

    protected $guarded = [];

}
