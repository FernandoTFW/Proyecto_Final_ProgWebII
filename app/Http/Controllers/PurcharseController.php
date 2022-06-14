<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Product;
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
            DB::beginTransaction();
            $client = Client::create([
                "bussinessName" => $request->businessName,
                "nit" => $request->nit
            ]);
            $purchase = Purchase::create([
                'date' => date("Y-m-d", strtotime($request->date)),
                'total' => $request->quantity * $request->unitPrice
            ]);

            PurchaseDetail::create([
                'PurchaseID'=> $purchase->id,
                'ProductID'=>$request->productId,
                'quanity'=> $request->quantity,
                'unitPrice'=> $request->unitPrice
            ]);
            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
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

    public function deletePurchase($id) {
        $result = ['result' => 'ok'];
        try {
            $purchase = Purchase::find($id);
            $purchase->delete();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
        }

        return $result;
    }

    public function newPurchase($id) {
        $product = Product::where(["id" => $id])->first();
        return view("Purchase.new", ["product" => $product]);
    }
}
