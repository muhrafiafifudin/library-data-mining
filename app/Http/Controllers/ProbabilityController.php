<?php

namespace App\Http\Controllers;

use App\Models\TrainingData;
use Illuminate\Http\Request;

class ProbabilityController extends Controller
{
    public function index()
    {
        // Status Probability
        $probability_count = TrainingData::count();

        $probability_a = TrainingData::where('status', 'Minat')->count();
        $probability_b = TrainingData::where('status', 'Tidak Minat')->count();

        $probability_a_value = $probability_a / $probability_count;
        $probability_b_value = $probability_b / $probability_count;

        $probability = collect([
            (object) [
                'probability_a' => $probability_a,
                'probability_b' => $probability_b,
                'probability_a_value' => $probability_a_value,
                'probability_b_value' => $probability_b_value
            ]
        ]);

        $probability = $probability->first();

        // Name Probability
        $name_distinct = TrainingData::select('name')->distinct()->get();

        $name_probability = collect([]);

        foreach ($name_distinct as $value) {
            $name_a = TrainingData::where([['name', $value->name], ['status', 'Minat']])->count();
            $name_b = TrainingData::where([['name', $value->name], ['status', 'Tidak Minat']])->count();

            $name_probability->push((object) [
                'name' => $value->name,
                'name_a' => $name_a,
                'name_b' => $name_b,
                'name_a_value' => $name_a / $probability_a,
                'name_b_value' => $name_b / $probability_b,
            ]);
        }

        // Code Probability
        $code_distinct = TrainingData::select('code')->distinct()->get();

        $code_probability = collect([]);

        foreach ($code_distinct as $value) {
            $code_a = TrainingData::where([['code', $value->code], ['status', 'Minat']])->count();
            $code_b = TrainingData::where([['code', $value->code], ['status', 'Tidak Minat']])->count();

            $code_probability->push((object) [
                'code' => $value->code,
                'code_a' => $code_a,
                'code_b' => $code_b,
                'code_a_value' => $code_a / $probability_a,
                'code_b_value' => $code_b / $probability_b,
            ]);
        }

        // Title Probabilitu
        $title_distinct = TrainingData::select('title')->distinct()->get();

        $title_probability = collect([]);

        foreach ($title_distinct as $value) {
            $title_a = TrainingData::where([['title', $value->title], ['status', 'Minat']])->count();
            $title_b = TrainingData::where([['title', $value->title], ['status', 'Tidak Minat']])->count();

            $title_probability->push((object) [
                'title' => $value->title,
                'title_a' => $title_a,
                'title_b' => $title_b,
                'title_a_value' => $title_a / $probability_a,
                'title_b_value' => $title_b / $probability_b,
            ]);
        }

        // Type Probability
        $type_distinct = TrainingData::select('type')->distinct()->get();

        $type_probability = collect([]);

        foreach ($type_distinct as $value) {
            $type_a = TrainingData::where([['type', $value->type], ['status', 'Minat']])->count();
            $type_b = TrainingData::where([['type', $value->type], ['status', 'Tidak Minat']])->count();

            $type_probability->push((object) [
                'type' => $value->type,
                'type_a' => $type_a,
                'type_b' => $type_b,
                'type_a_value' => $type_a / $probability_a,
                'type_b_value' => $type_b / $probability_b,
            ]);
        }

        // Class Probability
        $class_distinct = TrainingData::select('class')->distinct()->get();

        $class_probability = collect([]);

        foreach ($class_distinct as $value) {
            $class_a = TrainingData::where([['class', $value->class], ['status', 'Minat']])->count();
            $class_b = TrainingData::where([['class', $value->class], ['status', 'Tidak Minat']])->count();

            $class_probability->push((object) [
                'class' => $value->class,
                'class_a' => $class_a,
                'class_b' => $class_b,
                'class_a_value' => $class_a / $probability_a,
                'class_b_value' => $class_b / $probability_b,
            ]);
        }

        return view('pages.probability.probability', compact('probability', 'name_probability', 'code_probability', 'title_probability', 'type_probability', 'class_probability'));
    }
}
