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

    public function getClient($id) {
        return Client::find($id);
    }

    public function listClients() {
        return view("Client.list", ["client" => Client::all()]);
    }

    public function newClient() {
        return view("Client.new");
    }

    public function postClient(Request $request) {
        Client::create([
            "bussinessName" => $request->bussinessName,
            "nit" => $request->nit
        ]);
        return ['result' => 'ok'];
    }

    public function editClient($id) {
        $client = Client::where(["id" => $id])->first();
        return view("Client.edit", ["client" => $client]);
    }

    public function putClient(Request $request) {
        $client = Client::where(["id" => $request->id])->first();
        $client->bussinessName = $request->bussinessName;
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
