<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('admin.product.ProductIndex', compact('products'));
    }

    public function show(){
        
    }

    public function create(Request $request){

        return view('admin.product.CreateProduct');
    }

    public function store(Request $request){
        // dd($request->all);
        $image = $request->file('image');

        if($image) {
            $link = Storage::disk('public')->put("product-images", $image);
        }


            Product::create([
            'name'=> $request->name,
            'price'=> $request->price,
            'image'=> $link ?? $products->image,
            'description' => $request->description,
            'color' => $request->color,

        ]);
        return redirect('/products');
    }

    public function edit($id){
        $products=Product::find($id);
        return view('admin.product.EditProduct' , compact('products'));
    }

    public function update(Request $request,$id){

        $image = $request->file('image');
        if($image) {
            $link = Storage::disk('public')->put("product-images", $image);
        }

        $products = Product::find($id);
        $products->update([
            'name'=>$request->name,
            'price'=> $request->price,
            'image'=> $link ?? $products->image,
            'description' => $request->description,
            'color' => $request->color,
        ]);
        return redirect('/products');    }

    public function delete($id){
        $products = Product::find($id);
        $products->delete();
        return redirect('/products');

    }
    
}




