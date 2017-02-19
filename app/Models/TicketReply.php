<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    protected $fillable = [
       "id","ticket_id","contact_id","description","create_time"    ];
    protected $table='ticket_reply';

    public $timestamps =false ;

    protected $guarded = [];

}
