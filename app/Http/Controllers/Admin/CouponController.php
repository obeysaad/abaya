<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = coupon::all();
        return view('admin.coupon.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {
        try {

            coupon::create($request->except(['_token']));

            return redirect()->route('coupon.index')->with(['success' => 'coupon saved successfully ']);;

               } catch (\Exception $ex) {
            return redirect()->route('coupon.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($id)
    {
        $coupon = coupon::select()->find($id);
        if (!$coupon) {
            return redirect()->route('coupon.index')->with(['error' => 'This coupon does not exist']);
        }

        return view('admin.coupon.edit', compact('coupon'));
    }

    public function update($id, Request $request)
    {

        try {
            $coupon = coupon::find($id);
            if (!$coupon) {
                return redirect()->route('admin.coupon.edit', $id)->with(['error' => 'This coupon does not exist']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $coupon->update($request->except('_token'));

            return redirect()->route('coupon.index')->with(['success' => ' Product update successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('coupon.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {

        try {
            $coupon = coupon::find($id);
            if (!$coupon) {
                return redirect()->route('admin.coupon', $id)->with(['error' => 'This coupon does not exist']);
            }
            $coupon->delete();

            return redirect()->route('coupon.index')->with(['success' => ' Product delete successfully  ']);

        } catch (\Exception $ex) {
            return redirect()->route('coupon.index')->with(['error' => 'Something went wrong, please try again later']);
        }
    }
}