<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class FruitController extends Controller
{
    public function getFruits()
    {
        $allFruits=Fruit::all();
        return view('fruits',compact('allFruits'));
    }
}
