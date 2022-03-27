<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function display()
    {
        $articles = DB::table('article')->get();
        return view('blog', compact('articles'));
    }

    public function articleGet(Request $request): void
    {
        $row = DB::table('article')->where('id', '=', $request->id)->get();
        echo json_encode($row[0]);
    }
}
