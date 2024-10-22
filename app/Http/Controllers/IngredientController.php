<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;

class IngredientController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'moisture' => 'required',
            'protein' => 'required',
            'wort_color' => 'required',
            'diastatic_power' => 'required',
            'yield_extract' => 'required'
        ]);

        $ingredient = Ingredients::create([
            'name' => $data['name'],
            'moisture' => $data['moisture'],
            'protein' => $data['protein'],
            'wort_color' => $data['wort_color'],
            'diastatic_power' => $data['diastatic_power'],
            'yield_extract' => $data['yield_extract']
        ]);

        dd($ingredient);
        // return $ingredient;
    }
}
