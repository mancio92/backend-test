<?php

namespace App\Http\Controllers;
use App\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index(){
        $labels = Label::all();

        return $labels;
    }
}
