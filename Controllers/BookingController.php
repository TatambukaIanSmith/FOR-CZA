<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('bookings.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // only returns a view to create an booking
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookings=new Booking();
        $bookings->name=$request->input('name');
        $bookings->phone=$request->input('phone');
        $bookings->email=$request->input('email');
        $bookings->address=$request->input('address');
        $bookings->save();
        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings=Booking::findOrfail($id);
        return view('bookings.edit',compact('bookings'));
        return redirect(route('bookings.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $bookings=Booking::findOrfail($id);
        $bookings->name=$request->input('name');
        $bookings->phone=$request->input('phone');
        $bookings->email=$request->input('email');
        $bookings->address=$request->input('address');
        $bookings->save();
        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookings=Booking::findOrfail($id);
        $bookings->delete();
        return redirect(route('bookings.index'));
    }
}
