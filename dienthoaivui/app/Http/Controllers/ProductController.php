<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index ()
    {
        $products = Product::all();
        // $products = DB::table('products')->get();
        // print_r($products);
        // $categories = DB::table('categories')->get();
        $categories = Category::all();
        // print_r($categories);
        return view('list',['products' => $products, 'categories' => $categories]);
    }
    public function store(Request $request)
    {

        $product=Product::create($request->all());
        $image= time().'.'.$request->image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('', $image);
        $product->image = $image;

        // $image = $request->image;
        $product->save();
        return response()->json([
            'data'=>$product,
            'message'=>'Tạo thành công'
        ],200);

    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
    public function show(Request $request, $id){
        $product = Product::find($id);
        if($request->hasFile('image')){
            $image= time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('', $image);
            $product->image = $image;
        }
        $product->update($request->all());
        return response()->json(['data'=>$product],200);
    }
    public function test()
    {
        return view('home');
    }
    public function getProductById($id){
        $product =Product::findOrFail($id);
        return response()->json(['data'=>$product]);

    }


}
