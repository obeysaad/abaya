<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = type::all();
        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        try {

            type::create($request->except(['_token']));

            return redirect()->route('type.index')->with(['success' => 'Type saved successfully ']);;

               } catch (\Exception $ex) {
            return redirect()->route('type.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($id)
    {
        $type = type::select()->find($id);
        if (!$type) {
            return redirect()->route('type.index')->with(['error' => 'This Type does not exist']);
        }

        return view('admin.type.edit', compact('type'));
    }

    public function update($id, Request $request)
    {

        try {
            $type = type::find($id);
            if (!$type) {
                return redirect()->route('admin.type.edit', $id)->with(['error' => 'This Type does not exist']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $type->update($request->except('_token'));

            return redirect()->route('type.index')->with(['success' => ' Product update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('type.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {

        try {
            $type = type::find($id);
            if (!$type) {
                return redirect()->route('admin.type', $id)->with(['error' => 'This Type does not exist']);
            }
            $type->delete();

            return redirect()->route('type.index')->with(['success' => ' Product delete successfully  ']);

        } catch (\Exception $ex) {
            return redirect()->route('type.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }
}