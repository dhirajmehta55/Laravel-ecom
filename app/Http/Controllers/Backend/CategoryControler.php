<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    public function index(){
        $category = Category::all();

        return view('Backend.Page.Category.index',compact('category'));
    }

    public function create(){
        return view('Backend.Page.Category.create');
    }
    public function store(Request $request){

        $existCategory = Category::where('category_name',$request->category_name)->first();
        if($existCategory){
            toast($request->category_name . ' ' .  'already exist','error');
            return redirect()->back();
        }else{
            $category = new Category();
            $category->category_name= $request->category_name;
            $category->description = $request->description;
            if($request->hasFile('category_image')){
                $categoryImage = $request->file('category_image');
                $newCategoryImage = $categoryImage->hashName();
                $categoryImage->move('category',$newCategoryImage);
                $category->category_image = "category/$newCategoryImage";
            }
            $category->save();
            toast($request->category_name . 'Added','success');
            return redirect()->back();
        }


    }

    public function active($id){
        $activeCategory = Category::findOrFail($id);
        $activeCategory->status = 'active';
        $activeCategory->save();
        toast($activeCategory->category_name . ' ' . 'active successfully', 'success');
        return redirect()->back();
    }
    public function deactive($id){
        $activeCategory = Category::findOrFail($id);
        $activeCategory->status = 'deactive';
        $activeCategory->save();
        toast($activeCategory->category_name . ' ' . 'deactive successfully','success');
        return redirect()->back();

    }
}
