<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\DiscountProduct;
use App\Models\Dress;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = discount::all();
        return view('admin.discount.index', compact('discounts'));
    }

    public function create()
    {
        return view('admin.discount.create');
    }

    public function store(Request $request)
    {
        try {

            discount::create($request->except(['_token']));

            return redirect()->route('discount.index')->with(['success' => 'discount saved successfully ']);;

               } catch (\Exception $ex) {
            return redirect()->route('discount.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($id)
    {
        $discount = discount::select()->find($id);
        if (!$discount) {
            return redirect()->route('discount.index')->with(['error' => 'This discount does not exist']);
        }

        return view('admin.discount.edit', compact('discount'));
    }

    public function update($id, Request $request)
    {

        try {
            $discount = discount::find($id);
            if (!$discount) {
                return redirect()->route('admin.discount.edit', $id)->with(['error' => 'This discount does not exist']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $discount->update($request->except('_token'));

            return redirect()->route('discount.index')->with(['success' => ' Product update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('discount.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {

        try {
            $discount = Discount::find($id);
            if (!$discount) {
                return redirect()->route('admin.discount', $id)->with(['error' => 'This discount does not exist']);
            }
            $discount->delete();

            return redirect()->route('discount.index')->with(['success' => ' Product delete successfully  ']);

        } catch (\Exception $ex) {
            return redirect()->route('discount.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function discountProduct($id){

        $dress= Dress::find($id);

        $discounts = Discount::all();

        return view('admin.dress.discount' , compact('dress' , 'discounts') );
    }


    public function discountProductStore(Request $request){


         DiscountProduct::create($request->all());

         return redirect()->route('dress.index')->with(['success' => ' Product discount add  ']);
        }
}