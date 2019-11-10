<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farmer extends Model
{
    protected $fillable=['name','dob','mobile','gender','adhaar','address','image','bank_name','account_number'];
}
