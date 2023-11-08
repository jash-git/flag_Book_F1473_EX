<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    // index()方法
    public function index() {
        return view('index');        
    }
    // sum()方法
    public function sum($a, $b = 5) {
        $total = $a + $b;
        return view('sum')->with('a', $a)
               ->with('b', $b)->with('total', $total);
    }   
    // list()方法
    public function list() { 
        $book = array(
                "id"=>"W0001",
                "title"=> "PHP程式設計", 
                "author"=>"陳會安",
                "price"=>"550");
        return view('list')->with('title', '圖書資料')
                           ->with('book', $book); // 傳遞陣列資料
    }      
}
