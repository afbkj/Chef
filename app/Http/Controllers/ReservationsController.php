<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    // Other methods...

    public function destroy($id)
    {
        // Find the reservation by ID
        $reservation = Reservation::findOrFail($id);
        
        // Delete the reservation
        $reservation->delete();
        
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Reservation deleted successfully');
    }
}
