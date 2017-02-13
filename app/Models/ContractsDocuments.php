<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractsDocuments extends Model
{
    protected $fillable = [
      "contracts_id","products_id","name","links","description","type"    ];
    protected $table='contracts_documents';

    public $timestamps =false ;

    protected $guarded = [];

}
