<?php

namespace App\Http\Controllers\InfoLeyes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeyKarinController extends Controller
{
    public function index() {
        return view('infoleyes.leykarin.index');
    }
    
    public function normativa() {
        return view('infoleyes.leykarin.normativa');
    }
}
