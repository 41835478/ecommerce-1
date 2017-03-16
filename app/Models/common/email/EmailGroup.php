<?php namespace App\Models\common\email;

use Illuminate\Database\Eloquent\Model;

class EmailGroup extends Model
{
    protected $fillable = ["name","created_at","updated_at"    ];
    protected $table='email_group';

    public $timestamps =true ;

    protected $guarded = [];

}
