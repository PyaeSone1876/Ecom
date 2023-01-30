<?php
namespace App\Http\Controllers\api;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ApiProductController extends Controller
{
    public function ProductAPI (Request $request){
        
        $products=Product::with('category')->get();
        return response()->json(
            $products,200
        );
    }

    public function Category(){
        $category = Category::all();
        return response()->json(
            $category,200
        );
    }

    public function SearchByCategoryID(Request $request){
        $products = Product::where('category_id', $request->input('category'))->get();
        $products->map(function ($product) {
            $product->image = config('app.url') . '/storage/' . $product->image;
        });  
        if ($products) {
             return response()->json(
            $products,200
        ); 
        }
      
    }
   
}
