<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts'; // The name of the contacts table in the database.

    protected $fillable = [
        'name', 'email', 'phone_number', 'address',
    ];


}
