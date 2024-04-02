<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
    
        // Flash a success message
        session()->flash('success', 'Order deleted successfully');
    
        return redirect()->back();
    }
    
}
