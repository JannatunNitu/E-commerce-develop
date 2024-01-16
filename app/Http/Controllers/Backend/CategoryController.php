<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\SlugGenerator;

class CategoryController extends Controller
{
   use SlugGenerator;

    function ViewCategory(){
        $categories = Category::latest()->paginate(20);
        return view('Backend.category.viewCategory',compact('categories'));
    }
    function CreateCategory(){
        return view('Backend.category.createCategory');
    }
    function StoreCategory(Request $request){
        // VALIDATION
        $request->validate([
         'category_name' => 'required|max:255',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = $this->uniqueSlug($request->category_name, $request->slug,Category::class);
        $category->save();
        $notification = [
            'message' => 'Cateogory Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('category.create')
            ->with($notification);

    }
    function EditCategory($slug)
    {
        $categories = Category::latest()->paginate(20);
        $editcategory = Category::where('slug',$slug)->first();
        return view('Backend.category.editCategory',compact('editcategory','categories'));
    }
    function UpdateCategory(Request $request,$slug)
    {
       $request->validate([
            'category_name' => 'required|max:255',
        ]);
        $editcategory = Category::where('slug',$slug)->first();
        $editcategory->category_name = $request->category_name;
        $editcategory->slug = $this->uniqueSlug($request->category_name, $request->slug, Category::class);
        $editcategory->save();
        $notification = [
                'message' => 'Cateogory Successfully Uploaded',
                'alert-type' => 'success',
            ];
        return redirect()
        ->route('category.view')
        ->with($notification);
    } 
    function DeleteCategory($id){
        $Categories = Category::find($id);
        if(!is_null($Categories)){
            $Categories->delete();
        }
        return back();
     }
     function forceDelete($id){
        $Category = Category::withTrashed()->find($id);
       if(!is_null($Category)){
        $Category->forceDelete();
       }
       return back();
    }
     function restore($id){
        $Category = Category::withTrashed()->find($id);
       if(!is_null($Category)){
        $Category->restore();
       }
       return back();
    }
    function AllTrash(){
        $categories = Category::onlyTrashed()->latest()->paginate(10);
        return view('Backend.Trash.CategoryTrash',compact('categories'));
    }
         

    
   
}
