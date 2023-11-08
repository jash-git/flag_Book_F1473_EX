<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    // index()方法
    public function index() {
        return "Books控制器的預設行為...";        
    }
    // sum()方法
    public function sum($a, $b = 5) {
        $total = $a + $b;
        return $a . " + " . $b . " = " . $total;
    }    
}
