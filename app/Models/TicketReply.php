<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    protected $fillable = ["ticket_id","contact_id","description","create_time"    ];
    protected $table='ticket_reply';

    public $timestamps =false ;

    protected $guarded = [];

    public  function contact(){
        return $this->belongsTo('\App\Models\Contacts');
    }
    public  function ticket(){
        return $this->belongsTo('\App\Models\Ticket');
    }

}
