<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        $foods = [
            ['type' => 'Doro Wot', 'drink' => 'Water'],
            ['type' => 'Tibs', 'drink' => 'Ambo Wuha'],
            ['type' => 'Shiro', 'drink' => 'Tej'],
            ['type' => 'Kitfo', 'drink' => 'Beer']
        ];
        
            return view('foods', [
                'foods' => $foods
            ]);
    }


    public function show($id){
    return view('details', ['id' => $id]);

    }
}
