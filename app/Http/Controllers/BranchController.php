<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Branch;
use DB;

class BranchController extends Controller 
{
    public function getBranchs() {
        return Branch::all();
    }

    public function getBranch($id) {
        return Branch::find($id);
    }

    public function listBranchs() {
        return view("branchs.list", ["branchs" => Branch::all()]);
    }
    public function newBranch() {
        return view("branchs.new");
    }
    public function postBranch(Request $request) {
        Branch::create([
            "address" => $request->address
            
        ]);
        return ['result' => 'ok'];
    }

    public function editBranch($id) {
        $branch = Branch::where(["id" => $id])->first();
        return view("branchs.edit", ["branch" =>  $branch ]);
    }

    public function putBranch(Request $request) {
        $branch = Branch::where(["id" => $request->id])->first();
        $branch->address = $request->address;
        $branch->update();
        return ['result' => 'ok'];
    }
    public function deleteBranch(Request $request) {
        $branch = Branch::where(["id" => $request->id])->first();
        $branch->delete();
        return ['result' => 'ok'];
    }
}
