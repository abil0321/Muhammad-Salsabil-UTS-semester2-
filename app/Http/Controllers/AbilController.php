<?php

namespace App\Http\Controllers;

use App\Models\UTS;
use Illuminate\Http\Request;

class AbilController extends Controller
{
    public function index(){
        $data = UTS::all();
        return view('tampilan', ['data' => $data]);
    }
}
