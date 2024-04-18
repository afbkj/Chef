<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::id()) {
            return redirect('redirects');
        } else

            $data = Food::all();
        $count = Cart::count();

        $data2 = foodchef::all();
        return view("home", compact("data", "data2", 'count'));


    }

    public function foodchef()
    {

        $data2 = foodchef::all();
        return view("foodchef", compact("data2"));
    }

    public function redirects()
    {
        $data = food::all();
        $data2 = foodchef::all();
        $data3 = user::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '2') {
            return view('admin.users', compact("data3"));
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home', compact('data', 'data2', 'count'));
        }
    }


    public function addcart(Request $request, $id)
    {

        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $food = Food::findOrFail($foodid);
            $quantity = $request->quantity;

            if ($food)
            {
                $cart = new Cart();
                $cart->user_id = $user_id;
                $cart->food_id = $food->id;
                $cart->quantity = $quantity;
                $cart->save();
            }
            else
            {
                return redirect('/');
            }
            return redirect()->route('show.cart',['id' => Auth::user()->id]);
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = Cart::where('user_id', $id)->count();

        if (Auth::id() == $id) {
            $data2 = Cart::where('user_id', $id)->get();

            $data = Cart::where('user_id', $id)
                ->join('foods', 'carts.food_id', '=', 'foods.id')
                ->get();

            return view('showcart', compact('count', 'data', 'data2'));
        } else {
            return redirect()->back();
        }
    }

    public function showorder()
    {
        $user = Auth::user();
        $orders = $user->orders;

        return view('showorder', compact('orders'));
    }


    public function remove($id)
    {
        $data = Cart::find($id);

        $data->delete();


        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {
        $rules = [
            'foodname.*' => 'required|string',
            'quantity.*' => 'numeric|max:10',
            'phone' => 'required|digits:8',
        ];

        $messages = [
            'quantity.*.max' => 'Уучлаарай та 10 аас их тоо хэмжээтэй хоол захиалах боломжгүй',
            'phone.digits' => 'Утасны дугаар 8 оронтой байх ёстой',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        foreach ($request->foodname as $key => $foodname) {
            $data = new Order;

            $finalPrice = $request->price[$key];

            if ($request->has('coupon_code') && !empty($request->coupon_code)) {
                $coupon = Coupon::where('code', $request->coupon_code)->first();
                if ($coupon) {
                    $originalPrice = $request->price[$key];
                    $discountAmount = $coupon->value;
                    $finalPrice = $originalPrice - $discountAmount;
                    $finalPrice = max(0, $finalPrice);
                }
            }

            $data->foodname = $foodname;
            $data->price = $finalPrice;
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->user_id = Auth::user()->id;
            $data->save();
        }

        Auth::user()->carts()->delete();

        return redirect()->back()->with('message' , 'Амжилттай захиалагдлаа');
    }


    public function log()
    {
        return view("login");
    }
}
