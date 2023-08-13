<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHistoryController extends Controller
{
    public function index()
    {
        return view('pages.test_history.test_history');
    }
}
