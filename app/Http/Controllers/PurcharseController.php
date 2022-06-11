<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Employee;
use App\Models\Client;
use DB;

class PurcharseController extends Controller
{
    public function getPurchases() {
        return Purchase::all();
    }

    public function getPurchase($id) {
        return Purchase::find($id);
    }

    public function postPurchase(Request $request) {
        $result = ['result' => 'ok'];
        try {

            Purchase::create([
                'date' => $request->date,
                'total' => $request->total,
                'EmployeeID' => $request->EmployeeID ,
                'ClientID' => $request->ClientID
            ]);

        } catch (Exception $e) {
            $result = ['result' => 'error'];
        }

        return $result;
    }

    public function putPurchase(Request $request) {
        $result = ['result' => 'ok'];
        try {
            $purchase = Purchase::where(["id" => $request->id])->first();
            $purchase->date = $request->date;
            $purchase->total = $request->total;
            $purchase->EmployeeID = $request->EmployeeID;
            $purchase->ClientID = $request->ClientID;
            $purchase->update();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
        }
        return $result;
    }

    public function deleteCustomer($id) {
        $result = ['result' => 'ok'];
        try {
            $purchase = Purchase::find($id);
            $purchase->delete();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
        }

        return $result;
    }

    public function newPurchase() {
        return view("Purchase.new");
    }
}
