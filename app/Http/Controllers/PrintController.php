<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function print_result($id)
    {
        $print_data = DB::table('students')->where('roll_number', $id)->first();
        return view('pages.result_print', ["print_data" => $print_data]);
    }
}
