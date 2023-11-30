<?php

namespace App\Http\Controllers\InternPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function index(){
        return redirect()->route('intern.tasks.index');
    }
}
