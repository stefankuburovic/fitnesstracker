<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    public function index()
    {


        $all = Client::where('trainer_id', '=', 1)->get();
        //dd($all);

        return view('trainer', compact('all'));

    }
}
