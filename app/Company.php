<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['loan_amount', 'loan_term', 'interest_rate', 'created_date_at'];
}
