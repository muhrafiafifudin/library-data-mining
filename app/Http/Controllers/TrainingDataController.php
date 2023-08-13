<?php

namespace App\Http\Controllers;

use App\Models\TrainingData;
use Illuminate\Http\Request;

class TrainingDataController extends Controller
{
    public function index()
    {
        $training_data = TrainingData::all();

        return view('pages.training_data.training_data', compact('training_data'));
    }
}
