<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function getAnimals (Request $request){
        $term = $request->get('term');
        $querys = Animal::where('name', 'LIKE', '%' . $term . '%')->get();
        $data = [];
        foreach ($querys as $query){
                $data[] = [
                    'label' => $query->name
                ];
        }
        return $data;
    }
}
