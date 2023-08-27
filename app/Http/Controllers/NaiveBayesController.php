<?php

namespace App\Http\Controllers;

use App\Models\NaiveBayes;
use App\Models\TrainingData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class NaiveBayesController extends Controller
{
    public function index()
    {
        $naive_bayes = NaiveBayes::where('user_id', Auth::user()->id)->get();

        $names = TrainingData::distinct()->pluck('name');
        $codes = TrainingData::distinct()->pluck('code');
        $titles = TrainingData::distinct()->pluck('title');
        $types = TrainingData::distinct()->pluck('type');
        $classes = TrainingData::distinct()->pluck('class');

        return view('pages.naive_bayes.naive_bayes', compact('naive_bayes', 'names', 'codes', 'titles', 'types', 'classes'));
    }

    public function show($id)
    {
        $id = Crypt::decrypt($id);

        $naive_bayes = NaiveBayes::findOrFail($id);

        // Status Probability
        $probability_count = TrainingData::count();

        $probability_a = TrainingData::where('status', 'Telah Kembali')->count();
        $probability_b = TrainingData::where('status', 'Belum Kembali')->count();

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
            $name_a = TrainingData::where([['name', $value->name], ['status', 'Telah Kembali']])->count();
            $name_b = TrainingData::where([['name', $value->name], ['status', 'Belum Kembali']])->count();

            $name_probability->push((object) [
                'name' => $value->name,
                'name_a' => $name_a,
                'name_b' => $name_b,
                'name_a_value' => $name_a / $probability_a,
                'name_b_value' => $name_b / $probability_b,
            ]);
        }

        $name = $naive_bayes->name;

        $filtered_name_probability = $name_probability->filter(function ($item) use ($name) {
            return $item->name === $name;
        });

        $filtered_name_probability = $filtered_name_probability->first();

        // Code Probability
        $code_distinct = TrainingData::select('code')->distinct()->get();

        $code_probability = collect([]);

        foreach ($code_distinct as $value) {
            $code_a = TrainingData::where([['code', $value->code], ['status', 'Telah Kembali']])->count();
            $code_b = TrainingData::where([['code', $value->code], ['status', 'Belum Kembali']])->count();

            $code_probability->push((object) [
                'code' => $value->code,
                'code_a' => $code_a,
                'code_b' => $code_b,
                'code_a_value' => $code_a / $probability_a,
                'code_b_value' => $code_b / $probability_b,
            ]);
        }

        $code = $naive_bayes->code;

        $filtered_code_probability = $code_probability->filter(function ($item) use ($code) {
            return $item->code === $code;
        });

        $filtered_code_probability = $filtered_code_probability->first();

        // Title Probabilitu
        $title_distinct = TrainingData::select('title')->distinct()->get();

        $title_probability = collect([]);

        foreach ($title_distinct as $value) {
            $title_a = TrainingData::where([['title', $value->title], ['status', 'Telah Kembali']])->count();
            $title_b = TrainingData::where([['title', $value->title], ['status', 'Belum Kembali']])->count();

            $title_probability->push((object) [
                'title' => $value->title,
                'title_a' => $title_a,
                'title_b' => $title_b,
                'title_a_value' => $title_a / $probability_a,
                'title_b_value' => $title_b / $probability_b,
            ]);
        }

        $title = $naive_bayes->title;

        $filtered_title_probability = $title_probability->filter(function ($item) use ($title) {
            return $item->title === $title;
        });

        $filtered_title_probability = $filtered_title_probability->first();

        // Type Probability
        $type_distinct = TrainingData::select('type')->distinct()->get();

        $type_probability = collect([]);

        foreach ($type_distinct as $value) {
            $type_a = TrainingData::where([['type', $value->type], ['status', 'Telah Kembali']])->count();
            $type_b = TrainingData::where([['type', $value->type], ['status', 'Belum Kembali']])->count();

            $type_probability->push((object) [
                'type' => $value->type,
                'type_a' => $type_a,
                'type_b' => $type_b,
                'type_a_value' => $type_a / $probability_a,
                'type_b_value' => $type_b / $probability_b,
            ]);
        }

        $type = $naive_bayes->type;

        $filtered_type_probability = $type_probability->filter(function ($item) use ($type) {
            return $item->type === $type;
        });

        $filtered_type_probability = $filtered_type_probability->first();

        // Class Probability
        $class_distinct = TrainingData::select('class')->distinct()->get();

        $class_probability = collect([]);

        foreach ($class_distinct as $value) {
            $class_a = TrainingData::where([['class', $value->class], ['status', 'Telah Kembali']])->count();
            $class_b = TrainingData::where([['class', $value->class], ['status', 'Belum Kembali']])->count();

            $class_probability->push((object) [
                'class' => $value->class,
                'class_a' => $class_a,
                'class_b' => $class_b,
                'class_a_value' => $class_a / $probability_a,
                'class_b_value' => $class_b / $probability_b,
            ]);
        }

        $class = $naive_bayes->class;

        $filtered_class_probability = $class_probability->filter(function ($item) use ($class) {
            return $item->class === $class;
        });

        $filtered_class_probability = $filtered_class_probability->first();

        $result_a = $filtered_name_probability->name_a_value * $filtered_code_probability->code_a_value * $filtered_title_probability->title_a_value * $filtered_type_probability->type_a_value * $filtered_class_probability->class_a_value;
        $result_b = $filtered_name_probability->name_b_value * $filtered_code_probability->code_b_value * $filtered_title_probability->title_b_value * $filtered_type_probability->type_b_value * $filtered_class_probability->class_b_value;

        return view('pages.naive_bayes.naive_bayes_detail', compact('filtered_name_probability', 'filtered_code_probability', 'filtered_title_probability', 'filtered_type_probability', 'filtered_class_probability', 'probability', 'naive_bayes'));
    }

    public function store(Request $request)
    {
        // Status Probability
        $probability_count = TrainingData::count();

        $probability_a = TrainingData::where('status', 'Telah Kembali')->count();
        $probability_b = TrainingData::where('status', 'Belum Kembali')->count();

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
            $name_a = TrainingData::where([['name', $value->name], ['status', 'Telah Kembali']])->count();
            $name_b = TrainingData::where([['name', $value->name], ['status', 'Belum Kembali']])->count();

            $name_probability->push((object) [
                'name' => $value->name,
                'name_a' => $name_a,
                'name_b' => $name_b,
                'name_a_value' => $name_a / $probability_a,
                'name_b_value' => $name_b / $probability_b,
            ]);
        }

        $name = $request->name;

        $filtered_name_probability = $name_probability->filter(function ($item) use ($name) {
            return $item->name === $name;
        });

        $filtered_name_probability = $filtered_name_probability->first();

        // Code Probability
        $code_distinct = TrainingData::select('code')->distinct()->get();

        $code_probability = collect([]);

        foreach ($code_distinct as $value) {
            $code_a = TrainingData::where([['code', $value->code], ['status', 'Telah Kembali']])->count();
            $code_b = TrainingData::where([['code', $value->code], ['status', 'Belum Kembali']])->count();

            $code_probability->push((object) [
                'code' => $value->code,
                'code_a' => $code_a,
                'code_b' => $code_b,
                'code_a_value' => $code_a / $probability_a,
                'code_b_value' => $code_b / $probability_b,
            ]);
        }

        $code = $request->code;

        $filtered_code_probability = $code_probability->filter(function ($item) use ($code) {
            return $item->code === $code;
        });

        $filtered_code_probability = $filtered_code_probability->first();

        // Title Probabilitu
        $title_distinct = TrainingData::select('title')->distinct()->get();

        $title_probability = collect([]);

        foreach ($title_distinct as $value) {
            $title_a = TrainingData::where([['title', $value->title], ['status', 'Telah Kembali']])->count();
            $title_b = TrainingData::where([['title', $value->title], ['status', 'Belum Kembali']])->count();

            $title_probability->push((object) [
                'title' => $value->title,
                'title_a' => $title_a,
                'title_b' => $title_b,
                'title_a_value' => $title_a / $probability_a,
                'title_b_value' => $title_b / $probability_b,
            ]);
        }

        $title = $request->title;

        $filtered_title_probability = $title_probability->filter(function ($item) use ($title) {
            return $item->title === $title;
        });

        $filtered_title_probability = $filtered_title_probability->first();

        // Type Probability
        $type_distinct = TrainingData::select('type')->distinct()->get();

        $type_probability = collect([]);

        foreach ($type_distinct as $value) {
            $type_a = TrainingData::where([['type', $value->type], ['status', 'Telah Kembali']])->count();
            $type_b = TrainingData::where([['type', $value->type], ['status', 'Belum Kembali']])->count();

            $type_probability->push((object) [
                'type' => $value->type,
                'type_a' => $type_a,
                'type_b' => $type_b,
                'type_a_value' => $type_a / $probability_a,
                'type_b_value' => $type_b / $probability_b,
            ]);
        }

        $type = $request->type;

        $filtered_type_probability = $type_probability->filter(function ($item) use ($type) {
            return $item->type === $type;
        });

        $filtered_type_probability = $filtered_type_probability->first();

        // Class Probability
        $class_distinct = TrainingData::select('class')->distinct()->get();

        $class_probability = collect([]);

        foreach ($class_distinct as $value) {
            $class_a = TrainingData::where([['class', $value->class], ['status', 'Telah Kembali']])->count();
            $class_b = TrainingData::where([['class', $value->class], ['status', 'Belum Kembali']])->count();

            $class_probability->push((object) [
                'class' => $value->class,
                'class_a' => $class_a,
                'class_b' => $class_b,
                'class_a_value' => $class_a / $probability_a,
                'class_b_value' => $class_b / $probability_b,
            ]);
        }

        $class = $request->class;

        $filtered_class_probability = $class_probability->filter(function ($item) use ($class) {
            return $item->class === $class;
        });

        $filtered_class_probability = $filtered_class_probability->first();

        $result_a = $filtered_name_probability->name_a_value * $filtered_code_probability->code_a_value * $filtered_title_probability->title_a_value * $filtered_type_probability->type_a_value * $filtered_class_probability->class_a_value;
        $result_b = $filtered_name_probability->name_b_value * $filtered_code_probability->code_b_value * $filtered_title_probability->title_b_value * $filtered_type_probability->type_b_value * $filtered_class_probability->class_b_value;

        if ($result_a > $result_b) {
            $status = 'Telah Kembali';
        } else {
            $status = 'Belum Kembali';
        }

        $naive_bayes = new NaiveBayes();
        $naive_bayes->user_id = Auth::user()->id;
        $naive_bayes->name  = $request->name;
        $naive_bayes->code = $request->code;
        $naive_bayes->title = $request->title;
        $naive_bayes->type = $request->type;
        $naive_bayes->class = $request->class;
        $naive_bayes->status = $status;
        $naive_bayes->save();

        return view('pages.naive_bayes.naive_bayes_detail', compact('filtered_name_probability', 'filtered_code_probability', 'filtered_title_probability', 'filtered_type_probability', 'filtered_class_probability', 'probability', 'naive_bayes'));
    }

    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);

            $naive_bayes = NaiveBayes::findOrFail($id);
            $naive_bayes->delete();

            return redirect()->route('naive_bayes.index')->with(['success' => 'Berhasil Menghapus Data !!']);
        } catch (\Throwable $th) {
            return redirect()->route('naive_bayes.index')->with(['error' => 'Gagal Menghapus Data !!']);
        }
    }
}
