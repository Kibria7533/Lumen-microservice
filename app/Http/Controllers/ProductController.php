<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller{
    public function index(){

        $products =Product::all();
        return response()->json($products);
    }



    public function showOneProduct($id)
    {
        return response()->json(Product::find($id));
    }

    public function create(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
