<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractsRenewal extends Model
{
    protected $fillable = [
       "id","contracts_id","description","price"    ];
    protected $table='contracts_renewal';

    public $timestamps =false ;

    protected $guarded = [];

}
