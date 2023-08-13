<?php

namespace App\Http\Controllers;

use App\Models\TrainingData;
use Illuminate\Http\Request;

class NaiveBayesController extends Controller
{
    public function index()
    {
        $names = TrainingData::distinct()->pluck('name');
        $codes = TrainingData::distinct()->pluck('code');
        $titles = TrainingData::distinct()->pluck('title');

        return view('pages.naive_bayes.naive_bayes', compact('names', 'codes', 'titles'));
    }
}
