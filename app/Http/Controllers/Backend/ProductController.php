<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('Backend.Page.Product.Index',compact('product'));
    }

    public function create(){
        $category = Category::all();
        return view('Backend.Page.Product.create',compact('category'));
    }

    public function store(ProductRequest $request){
        $product = new Product();
        $product->sku = $request->sku;
        $product->slug = Str::slug($request->slug, '-');
        $product->product_name = $request->product_name;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->product_description = $request->product_description;
        $product->selling_price = $request->price - ($request->price * $request->discount)/100;
        if($request->hasFile('product_image')){
            $productImage = $request->file('product_image');
            $newProduct = $productImage->hashName();
            $productImage->move('product',$newProduct);
            $product->product_image = "/product/$newProduct";
        }
        $product->save();
        toast('Product added successfully','success');
        return redirect()->back();
    }

    public function productShow($id){
        $product = Product::findOrfail($id);
        return view('Backend.Page.Product.Show',compact( 'product' ));
    }

public function activeFeatured($id){
    $deactiveFeatured = Product::findOrFail($id);
    $productName = $deactiveFeatured->product_name;
    $deactiveFeatured->is_featured = 'active';
    $deactiveFeatured->save();
    toast($productName . 'is Activated','success');
    return redirect()->back();

}

public function deActiveFeatured($id){
    $deactiveFeatured = Product::findOrFail($id);
    $productName = $deactiveFeatured->product_name;
    $deactiveFeatured->is_featured = 'deactive';
    $deactiveFeatured->save();
    toast($productName . 'is Deactivated','success');
    return redirect()->back();

}
}
