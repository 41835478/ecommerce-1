<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
       "id","company_id","name","create_date","due_date","description"    ];
    protected $table='invoice';

    public $timestamps =false ;

    protected $guarded = [];

    public function company(){
        return $this->belongsTo('\App\Models\Company');
    }
}
