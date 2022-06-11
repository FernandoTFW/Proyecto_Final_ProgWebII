<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Branch;
use DB;

class BranchController extends Controller
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
}
