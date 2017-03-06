<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ["invoice_id","amount","status","payment_condition","create_date","due_date","description"    ];
    protected $table='payment';

    public $timestamps =false ;

    protected $guarded = [];

    public function invoice(){
        return $this->belongsTo('\App\Models\Invoice');
    }
}
