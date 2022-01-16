<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    use HasFactory;

    protected $table = 'contact-list';
    protected $primaryKey = 'id';
    protected $timestamp = false;
    protected $fillable = ['name','phone','usuario_id']; //fields of the table, need it for the create(), store(), edit(), update()
    protected $hidden = ['updated_at']; //data that we don't want to share
    protected $visible = ['id','name', 'phone','usuario_id']; //data we want to see


    public function usuarios(){
        return $this->belongsTo(Usuario::class); //contactList ($this) belongs to a user
    }
}
