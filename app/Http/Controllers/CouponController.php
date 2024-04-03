<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupon.index',compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {
       $validatedData =  $request->validate([
            'code' => 'required|string',
            'value' => 'required|unique:coupons',
        ]);

        Coupon::create([
            'code' => $validatedData['code'],
            'value' => $validatedData['value'],
        ]);

        return redirect('/coupon')->with('message', 'Coupon created successfully');
    }

    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupon.edit',compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $cou = Coupon::findOrFail($id);

        $validatedData =  $request->validate([
            'code' => 'required|string',
            'value' => 'required|unique:coupons',
        ]);

        $cou->update([
            'code' => $validatedData['code'],
            'value' => $validatedData['value'],
        ]);

        return redirect('/coupon')->with('message', 'Coupon updated successfully');
    }

    public function destroy($id)
    {
        $cou = Coupon::findOrFail($id);
        $cou->delete();
        return redirect('/coupon')->with('message', 'Coupon deleted successfully');
    }
}
