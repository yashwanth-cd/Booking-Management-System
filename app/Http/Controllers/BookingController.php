<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $query = Bookings::select('bookings.id', 'users.name as user_name', 'bookings.name', 'booking_datetime');
        $query->leftJoin('users', 'bookings.user_id', 'user_id');
        $data = $query->get();
        return view('AdminDashboard.bookings.index', ['data' => $data]);
    }
    public function userBookings()
    {
        $query = Bookings::select('bookings."', 'users.name as user_name');
        $query->leftJoin('users', 'bookings.user_id', '-', 'user_id');
        $query->where('bookings.user_id', Auth::user()->id);
        $data = $query->get();
        return view('User Dashboard.bookings.index', ['data' => $data]);
    }
    public function add()
    {
        $data = User::get();
        return view('AdminDashboard.Bookings.addEdit', ['data' => $data]);
    }
    public function save(Request $request)
    {
        $user = new Bookings([
            'name' => $request->get('booking_name'),
            'booking_datetime' => $request->get('booking_on'),
            'status' => $request->get('booking_status'),
            'user_id' => Auth::user()->user_type == 1 ? $request->get('user_name') : Auth::user()->id
        ]);
        $user->save();
        if (Auth::user()->user_type == 1) {
            $route = 'booking.all';
        } else {
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
    public function getBookingsById($id)
    {
        $data = User::get();
        $booking = Bookings::find($id);
        return view('AdminDashboard.Bookings.addEdit', ['data' => $data, 'bookings' => $booking]);
    }
    public function updateBookingById(Request $request, $id)
    {
        $booking = Bookings::find($id);
        $booking->name = $request->get('booking_name');
        $booking->booking_datetime = $request->get('booking_on');
        $booking->status = $request->get('booking_status');
        $booking->user_id = Auth::user()->user_type == 1 ? $request->get('user_name') : Auth::user()->id;
        $booking->save();
        if (Auth::user()->user_type == 1) {
            $route = 'booking.all';
        } else {
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
    public function viewDelete($id)
    {
        if (Auth::user()->user_type == 1) {
            $view = 'AdminDashboard.Bookings.delete';
        } else {
            $view = 'UserDashboard.Bookings.delete';
        }
        return view($view);
    }
    public function delete($id)
    {
        $status = Bookings::where('id', $id)->delete();
        if (Auth::user()->user_type == 1) {
            $route = 'booking.all';
        } else {
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
}
