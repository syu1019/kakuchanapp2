<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
        DB::table('kakuta_fives')->insert([
            'kakuta' => 'kakutaaaaa'
        ]);

        return view('admin');
    }
}
