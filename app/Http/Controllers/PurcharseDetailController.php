<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use DB;
class PurcharseDetailController extends Controller
{
    public function getDetails() {
        return PurchaseDetail::all();
    }

    public function getDetail($id) {
        return PurchaseDetail::find($id);
    }

    public function postDetails(Request $request) {
        $result = ['result' => 'ok'];
        try {
            DB::beginTransaction();

            $purchase = Purchase::create([
                'date' => $request->date,
                'total' => $request->quantity * $request->unitPrice
            ]);

            PurchaseDetail::create([
                'PurchaseID'=> $purchase->id,
                'ProductID'=>$request->ProductID,
                'quanity'=> $request->quanity,
                'unitPrice'=> $request->unitPrice
            ]);

            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
        }

        return $result;
    }

    public function putDetails(Request $request) {
        $result = ['result' => 'ok'];
        try {
            DB::beginTransaction();
            $purchase = Purchase::where(["id" => $request->id])->first();
            $purchase->date = $request->date;
            $purchase->total = $request->total;
            $purchase->EmployeeID = $request->EmployeeID;
            $purchase->ClientID = $request->ClientID;

            $purchaseDetail = PurchaseDetail::where(["PurchaseID" => $purchase->id])->first();
            $purchaseDetail->PurchaseID = $request->PurchaseID;
            $purchaseDetail->ProductID = $request->ProductID;
            $purchaseDetail->quanity = $request->quanity;
            $purchaseDetail->unitPrice = $request->unitPrice;

            $purchase->update();
            $user->update();
            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
        }
        return $result;
    }

    public function deletePurchaseDetail($id) {
        $result = ['result' => 'ok'];
        try {
            DB::beginTransaction();
            $purchase = Purchase::find($id);
            $detail = PurchaseDetail::where(["PurchaseID" => $purchase->id])->first();
            $purchase->delete();
            $detail->delete();
            DB::commit();
        } catch (Exception $e) {
            $result = ['result' => 'error'];
            DB::rollback();
        }

        return $result;
    }
}
