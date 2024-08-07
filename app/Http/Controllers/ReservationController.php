<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('backend.reservation.index' , ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        try {
            // $customer_id = $request->customer_id;
            $property_id = $request->property_id;
              
            Reservation::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'number' => $request->number,
                'property_id' => $property_id,
                // 'customer_id' => $customer_id,
            ]);
            return redirect()->route('frontend.details',['property' => $property_id])->withMessage("Reservation Request Sent!!");
        } catch (QueryException $e) {

            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        try {
            $reservation->delete();
            return redirect()->route('reservations.list')->withMessage("Deleted");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    // Reservation Accept
    public function accept(Reservation $reservation){

        try{

            $reservationToUpdate = Reservation::whereIn('status' , [0,2])->latest()->firstOrFail();
            $reservationToUpdate->status_id = 1;
            $reservationToUpdate->status = 'Accepted';
            $reservationToUpdate->save();
            return redirect()->route('reservations.list')->withMessage('Reservation Accepted');

        }catch (QueryException $e) {

            return redirect()->back()->withErrors('Something went wrong!');
        }
    }

    // Reservation Reject 
    public function reject(Reservation $reservation){
        try{
            $reservationToUpdate = Reservation::whereIn('status' , [1,0])->latest()->firstOrFail();
            $reservationToUpdate->status_id = 2;
            $reservationToUpdate->status = "Rejected";
            $reservationToUpdate->save();
            return redirect()->route('reservations.list')->withMessage('Reservation Rejected');
        } catch (QueryException $e) {

            return redirect()->back()->withErrors('Something went wrong!');
        }
    }
}
