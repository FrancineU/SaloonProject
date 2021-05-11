<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hairstyle;

class HairstyleController extends Controller
{
    public function home() {
        return view("hairstyle");
    }
}