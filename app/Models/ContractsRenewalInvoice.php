<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractsRenewalInvoice extends Model
{
    protected $fillable = [
       "id","contracts_id","contracts_renewal_id","invoice_id","description"    ];
    protected $table='contracts_renewal_invoice';

    public $timestamps =false ;

    protected $guarded = [];

    public function contracts(){
        return $this->belongsTo('\App\Models\Contracts');
    }
    public function contracts_renewal(){
        return $this->belongsTo('\App\Models\ContractsRenewal');
    }
    public function invoice(){
        return $this->belongsTo('\App\Models\Invoice');
    }
}
