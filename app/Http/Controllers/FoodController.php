<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class FoodController extends Controller
{
    public function index(){
        $foods = Order::latest()->get();
        
            return view('foods.index', [
                'foods' => $foods
            ]);
    }


    public function show($id){

        $food = Order::findOrFail($id);

        return view('foods.show', ['food' => $food]);
    }


    public function create(){
        return view('foods.create');
    }
}
