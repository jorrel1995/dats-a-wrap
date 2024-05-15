<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';


    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message'
    ];
    use HasFactory;
}
