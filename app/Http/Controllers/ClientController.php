<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use DB;

class ClientController extends Controller
{
    public function getClients() {
        return Client::all();
    }

    public function get($id) {
        return Client::find($id);
    }

    public function listClients() {
        return view("clients.list", ["clients" => Client::all()]);
    }

    public function newClient() {
        return view("clients.new");
    }

    public function postClient(Request $request) {
        Client::create([
            "businessName" => $request->businessName,
            "nit" => $request->nit
        ]);
        return ['result' => 'ok'];
    }

    public function editClient($id) {
        $client = Client::where(["id" => $id])->first();
        return view("clients.edit", ["client" => $client]);
    }

    public function putClient(Request $request) {
        $client = Client::where(["id" => $request->id])->first();
        $client->businessName = $request->businessName;
        $client->nit = $request->nit;
        $client->update();
        return ['result' => 'ok'];
    }

    public function deleteClient(Request $request) {
        $client = Client::where(["id" => $request->id])->first();
        $client->delete();
        return ['result' => 'ok'];
    }
}
