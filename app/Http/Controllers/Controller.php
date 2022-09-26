<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
       

        $reviews = Reviews::where('active', '=', 1)->get();
        return view('index', compact('reviews'));
    }
}
