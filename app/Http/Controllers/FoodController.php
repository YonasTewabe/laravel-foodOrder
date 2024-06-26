<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class FoodController extends Controller
{
    public function index(){
        $foods = Order::latest()->get();
        
            return view('foods', [
                'foods' => $foods
            ]);
    }


    public function show($id){
    return view('details', ['id' => $id]);

    }
}
