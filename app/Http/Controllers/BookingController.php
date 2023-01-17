<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with('user:id,name')->get();

        return view('admin.booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
        ]);

        try {
            Booking::create([
                'user_id' => Auth::user()->id,
                'date' => $request->date,
                'time' => $request->time,
            ]);
            return redirect()->route('booking.index')->with('success', 'Booking Berhasil Ditambahkan');
        } catch (Exception $e){
            return redirect()->route('booking.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
        ]);

        try {
            $booking = Booking::findOrFail($id);

            $booking->update($request->except('token'));
            
            return redirect()->route('booking.index')->with('success', 'Booking Berhasil Diupdate');
        } catch (Exception $e){
            return redirect()->route('booking.index')->with('error', $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $booking = Booking::findOrFail($id);

            $booking->destroy();
            
            return redirect()->route('booking.index')->with('success', 'Booking Berhasil Di delete');
        } catch (Exception $e){
            return redirect()->route('booking.index')->with('error', $e->getMessage());
        }
    }
}
