<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingDataController extends Controller
{
    public function index()
    {
        return view('pages.training_data.training_data');
    }
}
