<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function getProducts() {
        return Product::all();
    }

    public function listProducts() {
        return view("Products.list", ["products" => Product::all()]);
    }

    public function newProduct() {
        return view("Products.new");
    }

    public function postProduct(Request $request) {
        Product::create([
            "productName" => $request->productName,
            "productPrice" => $request->productPrice,
            "stock" => $request->stock,
            "netContent" => $request->netContent
        ]);
        return ['result' => 'ok'];
    }

    public function editProduct($id) {
        $product = Product::where(["id" => $id])->first();
        return view("Products.edit", ["product" => $product]);
    }

    public function putProduct(Request $request) {
        $product = Product::where(["id" => $request->id])->first();
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->stock = $request->stock;
        $product->netContent = $request->netContent;
        $product->update();
        return ['result' => 'ok'];
    }

    public function deleteProduct(Request $request) {
        $product = Product::where(["id" => $request->id])->first();
        $product->delete();
        return ['result' => 'ok'];
    }
}
