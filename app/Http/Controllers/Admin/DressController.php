<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dress;
use App\Models\Category;
use App\Models\DressImage;



class DressController extends Controller
{
    public function index()
    {
        $dresss = dress::all();
        return view('admin.dress.index', compact('dresss'));
    }

    public function show($id)
    {
        $dress = dress::find($id);
        if (!$dress) {
            return redirect()->route('dress.index')->with(['error' => 'This product does not exist']);
        }

        return view('admin.dress.show', compact('dress'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.dress.create' , compact('categories'));
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



           $dress = Dress::create(array_merge($request->all(), ['photo' => $data['image']]));





            foreach ($request->images as $imagefile) {


                $image = new DressImage;
                $file= $imagefile;
                $filename1= mt_rand(1000000, 9999999) . $imagefile->getClientOriginalName();
                $file-> move(public_path('images/'), $filename1);
                $data['image1']= $filename1;
                $image->url = $data['image1'];
                $image->dress_id = $dress->id;
                $image->save();
              }

            return redirect()->route('dress.index')->with(['success' => 'Product saved successfully']);
        } catch (\Exception $ex) {
            return redirect()->route('dress.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($id)
    {
        $dress = dress::select()->find($id);
        $categories = Category::all();

        if (!$dress) {
            return redirect()->route('dress.index')->with(['error' => 'This product does not exist']);
        }

        return view('admin.dress.edit', compact('dress' , 'categories'));
    }

    public function update($id, Request $request)
    {

        try {
            $dress = dress::find($id);
            if (!$dress) {
                return redirect()->route('admin.dress.edit', $id)->with(['error' => 'This product does not exist']);
            }



            if($request->has('photo')){
                $file= $request->photo;
                $filename= mt_rand(1000000, 9999999) . $file->getClientOriginalName();
                $file-> move(public_path('images/'), $filename);
                $data['image']= $filename;

            }



            $dress->update(array_merge($request->all(), ['photo' => $data['image']]));

            return redirect()->route('dress.index')->with(['success' => 'Product update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('dress.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {

        try {
            $dress = dress::find($id);
            if (!$dress) {
                return redirect()->route('admin.dress', $id)->with(['error' => 'This product does not exist']);
            }
            $dress->delete();

            return redirect()->route('dress.index')->with(['success' => 'Product delete successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('dress.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }




    public function changeStatus($id)
    {
        try {
            $dress = dress::find($id);
            if (!$dress)
            return redirect()->route('admin.dress', $id)->with(['error' => 'This product does not exist']);


           $dress -> update(['active' =>!$dress->active ]);

            return redirect()->route('dress.index')->with(['success' => ' Product Change Status successfully ']);

        } catch (\Exception $ex) {
            return redirect()->route('dress.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }



}