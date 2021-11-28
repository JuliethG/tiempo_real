<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index(){
        $animals = Animals::all();
        return view('form',compact('animals'));
    }
}
