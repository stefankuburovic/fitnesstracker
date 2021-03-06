<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{



    /*
     * Returns all clients from a selected trainer
     * */

    public function index($id)
    {

        $trainer_clients = Client::where('trainer_id', '=', $id)->get();

        return view('trainer', compact('trainer_clients'));
    }




    /*
     * Return a view for creating a new client
     * */

    public function create()
    {
        return view('post');
    }




    /*
     * Storing a new client
     * */

    public function store(Request $request, Client $client)
    {
        $client->clients_name = $request->clients_name;
        $client->clients_age = $request->clients_age;
        $client->height = $request->height;
        $client->weight = $request->weight;
        $client->trainer_id = $request->trainer_id;
        $client->save();

        return redirect('trainer/1');
    }
}
