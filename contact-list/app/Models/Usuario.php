<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id';

    protected $fillable = ['username']; //need it for the store()

    public function contactLists(){
        return $this->hasMany(ContactList::class); //A user ($this) has many contacts
    }
}
