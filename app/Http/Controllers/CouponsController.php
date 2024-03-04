<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if(!$coupon){
            return redirect()->route('showcart.index')->withErrors('Invalid coupon code. Please try again.');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('showcart.index')->with('success_message', 'Coupon has been applied!');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
