<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaiveBayesController extends Controller
{
    public function index()
    {
        return view('pages.naive_bayes.naive_bayes');
    }
}
