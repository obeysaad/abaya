<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Category as LivewireCategory;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = category::find($id);
        if (!$category) {
            return redirect()->route('category.index')->with(['error' => 'This Category does not exist']);
        }

        return view('admin.category.show', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        try {



            if($request->has('photo')){
                $file= $request->photo;
                $filename= mt_rand(1000000, 9999999) . $file->getClientOriginalName();
                $file-> move(public_path('images/'), $filename);
                $data['image']= $filename;
            }


            Category::create(array_merge($request->all(), ['photo' => $data['image']]));


            return redirect()->route('category.index')->with(['success' => ' Category saved successfully ']);
        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($id)
    {
        $category = category::select()->find($id);
        if (!$category) {
            return redirect()->route('category.index')->with(['error' => 'This Category does not exist']);
        }

        return view('admin.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {

        try {
            $category = category::find($id);
            if (!$category) {
                return redirect()->route('admin.category.edit', $id)->with(['error' => 'This Category does not exist']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);



            if($request->has('photo')){
                $file= $request->photo;
                $filename= mt_rand(1000000, 9999999) . $file->getClientOriginalName();
                $file-> move(public_path('images/'), $filename);
                $data['image']= $filename;

            }



            $category->update(array_merge($request->all(), ['photo' => $data['image']]));

            return redirect()->route('category.index')->with(['success' => 'Category update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {

        try {
            $category = category::find($id);
            if (!$category) {
                return redirect()->route('admin.category', $id)->with(['error' => 'This Category does not exist']);
            }
            $category->delete();

            return redirect()->route('category.index')->with(['success' => 'Category deleted successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }




    public function changeStatus($id)
    {
        try {
            $category = category::find($id);
            if (!$category)
                return redirect()->route('category.index')->with(['error' => 'This Category does not exist ']);


           $category -> update(['active' =>!$category->active ]);

           return redirect()->route('category.index')->with(['success' => 'Category Status Changed successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }



}