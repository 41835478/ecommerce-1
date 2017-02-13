<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractsRenewal extends Model
{
    protected $fillable = [
    "contracts_id","description","from_date","to_date","price"    ];
    protected $table='contracts_renewal';

    public $timestamps =false ;

    protected $guarded = [];

}
