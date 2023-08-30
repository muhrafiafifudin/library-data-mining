<?php

namespace App\Http\Controllers;

use App\Models\NaiveBayes;
use App\Models\TrainingData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccuracyController extends Controller
{
    public function index()
    {
        $true_positive = 0;
        $true_negative = 0;
        $false_positive = 0;
        $false_negative = 0;

        $naive_bayes = NaiveBayes::where('user_id', Auth::user()->id)->get();

        foreach ($naive_bayes as $value) {
            $training_data = TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first();

            if ($training_data) {
                if ($training_data->status == 'Minat' && $value->status == 'Minat') {
                    $true_positive++;
                } elseif ($training_data->status == 'Tidak Minat' && $value->status == 'Tidak Minat') {
                    $true_negative++;
                } elseif ($training_data->status == 'Tidak Minat' && $value->status == 'Minat') {
                    $false_positive++;
                } elseif ($training_data->status == 'Minat' && $value->status == 'Tidak Minat') {
                    $false_negative++;
                }
            }
        }

        $confusion_matrix = collect([
            (object) [
                'true_positive' => $true_positive,
                'true_negative' => $true_negative,
                'false_positive' => $false_positive,
                'false_negative' => $false_negative
            ]
        ]);

        $confusion_matrix = $confusion_matrix->first();

        $accuracy = ($true_positive + $true_negative) / ($true_positive + $true_negative + $false_positive + $false_negative);
        $precision = $true_positive / ($true_positive + $false_positive);
        $recall = $true_positive / ($true_positive + $false_negative);
        $f1Score = (2 * $precision * $recall) / ($precision + $recall);

        $accuracy = collect([
            (object) [
                'precision' => $precision,
                'recall' => $recall,
                'f1Score' => $f1Score,
                'accuracy' => $accuracy
            ]
        ]);

        $accuracy = $accuracy->first();

        return view('pages.accuracy.accuracy', compact('naive_bayes', 'confusion_matrix', 'accuracy'));
    }
}
