<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaiveBayes extends Model
{
    use HasFactory;

    protected $table = 'naive_bayes';

    protected $guarded = [];
}
