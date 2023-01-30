<?php
namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        foreach($products as $product){
            $product->category_name = $product->category ? $product->category->name : '';
        }
        return view('admin.product.ProductIndex', compact('products'));
    }

    public function show(){
        
    }

    public function create(Request $request){
        $categories = Category::all();
        return view('admin.product.CreateProduct', compact('categories'));
    }

    public function store(Request $request){
        // dd($request->all);
        $image = $request->file('image');

        if($image) {
            $link = Storage::disk('public')->put("product-images", $image);
        }


            Product::create([
            'name'=> $request->name,
            'category_id'=>$request->category_id,
            'price'=> $request->price,
            'image'=> $link ?? $products->image,
            'description' => $request->description,
            'color' => $request->color,
            'size' => $request->size,

        ]);
        return redirect('/products');
    }

    public function edit($id){
        $products=Product::find($id);
        $categories=Category::all();
        return view('admin.product.EditProduct' , compact('products','categories'));
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
            'size' => $request->size,
        ]);
        return redirect('/products');    }

    public function delete($id){
        $products = Product::find($id);
        $products->delete();
        return redirect('/products');

    }
    
}




