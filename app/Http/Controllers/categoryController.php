<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{
    public function createCategory(){
        return view('admin.category.createCategory');
    }


    public function saveCategory(Request $request){
        $this->validate($request, [
            'entryType' => 'required',
            'categoryName' => 'required',
            'shortDescription' => 'required',
            'publicationStatus' => 'required',
        ]);
        $category = new category();
        $category->entryType = $request->entryType;
        $category->categoryName = $request->categoryName;
        $category->shortDescription = $request->shortDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();
        return redirect('/category/add')->with('message', 'Category info save successfully');
    }


    public function manageCategory() {
        $categories = category::paginate(10);
        return view('admin.category.manageCategory', ['categories' => $categories]);
    }


    public function editCategory($id) {
        $categoryById = category::where('id', $id)->first();
        return view('admin.category.editCategory', ['categoryById' => $categoryById]);
    }


    public function updateCategory(Request $request ,$id) {
        $this->validate($request, [
            'entryType' => 'required',
            'categoryName' => 'required',
            'shortDescription' => 'required',
            'publicationStatus' => 'required',
        ]);
        $category= category::find($id);
        $category->entryType=$request->input('entryType');
        $category->categoryName=$request->input('categoryName');
        $category->shortDescription=$request->input('shortDescription');
        $category->publicationStatus=$request->input('publicationStatus');
        $category->save();
        
        return redirect('/category/manage')->with('message', 'Category update save successfully');
    }

    
    public function deleteCategory($categoryId) {
        $category = category::find($categoryId);
        $category->delete();
        return redirect('/category/manage')->with('message', 'Category Info Delete Successfully');
    }
}
